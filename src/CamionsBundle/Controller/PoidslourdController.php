<?php

namespace CamionsBundle\Controller;

use CamionsBundle\Entity\Poidslourd;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Poidslourd controller.
 *
 * @Route("poidslourd")
 */
class PoidslourdController extends Controller
{
    /**
     * Lists all poidslourd entities.
     *
     * @Route("/", name="poidslourd_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $poidslourds = $em->getRepository('CamionsBundle:Poidslourd')->findAll();

        return $this->render('poidslourd/index.html.twig', array(
            'poidslourds' => $poidslourds,
        ));
    }

    /**
     * Creates a new poidslourd entity.
     *
     * @Route("/new", name="poidslourd_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $poidslourd = new Poidslourd();
        $form = $this->createForm('CamionsBundle\Form\PoidslourdType', $poidslourd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($poidslourd);
            $em->flush();

            return $this->redirectToRoute('poidslourd_show', array('id' => $poidslourd->getId()));
        }

        return $this->render('poidslourd/new.html.twig', array(
            'poidslourd' => $poidslourd,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a poidslourd entity.
     *
     * @Route("/{id}", name="poidslourd_show")
     * @Method("GET")
     */
    public function showAction(Poidslourd $poidslourd)
    {
        $deleteForm = $this->createDeleteForm($poidslourd);

        return $this->render('poidslourd/show.html.twig', array(
            'poidslourd' => $poidslourd,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing poidslourd entity.
     *
     * @Route("/{id}/edit", name="poidslourd_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Poidslourd $poidslourd)
    {
        $deleteForm = $this->createDeleteForm($poidslourd);
        $editForm = $this->createForm('CamionsBundle\Form\PoidslourdType', $poidslourd);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('poidslourd_edit', array('id' => $poidslourd->getId()));
        }

        return $this->render('poidslourd/edit.html.twig', array(
            'poidslourd' => $poidslourd,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a poidslourd entity.
     *
     * @Route("/{id}", name="poidslourd_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Poidslourd $poidslourd)
    {
        $form = $this->createDeleteForm($poidslourd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($poidslourd);
            $em->flush();
        }

        return $this->redirectToRoute('poidslourd_index');
    }

    /**
     * Creates a form to delete a poidslourd entity.
     *
     * @param Poidslourd $poidslourd The poidslourd entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Poidslourd $poidslourd)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('poidslourd_delete', array('id' => $poidslourd->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
