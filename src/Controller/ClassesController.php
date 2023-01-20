<?php

namespace App\Controller;

use App\Entity\Classes;
use App\Form\ClassesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/classes")
 */
class ClassesController extends AbstractController
{
    /**
     * @Route("/", name="app_classes_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $classes = $entityManager
            ->getRepository(Classes::class)
            ->findAll();

        return $this->render('classes/index.html.twig', [
            'classes' => $classes,
        ]);
    }

    /**
     * @Route("/new", name="app_classes_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $class = new Classes();
        $form = $this->createForm(ClassesType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($class);
            $entityManager->flush();

            return $this->redirectToRoute('app_classes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('classes/new.html.twig', [
            'class' => $class,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idClasse}", name="app_classes_show", methods={"GET"})
     */
    public function show(Classes $class): Response
    {
        return $this->render('classes/show.html.twig', [
            'class' => $class,
        ]);
    }

    /**
     * @Route("/{idClasse}/edit", name="app_classes_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Classes $class, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClassesType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_classes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('classes/edit.html.twig', [
            'class' => $class,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idClasse}", name="app_classes_delete", methods={"POST"})
     */
    public function delete(Request $request, Classes $class, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$class->getIdClasse(), $request->request->get('_token'))) {
            $entityManager->remove($class);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_classes_index', [], Response::HTTP_SEE_OTHER);
    }
}