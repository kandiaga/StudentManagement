<?php

namespace App\Controller;

use App\Entity\Schools;
use App\Form\SchoolsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/schools")
 */
class SchoolsController extends AbstractController
{
    /**
     * @Route("/", name="app_schools_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $schools = $entityManager
            ->getRepository(Schools::class)
            ->findAll();

        return $this->render('schools/index.html.twig', [
            'schools' => $schools,
        ]);
    }

    /**
     * @Route("/new", name="app_schools_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $school = new Schools();
        $form = $this->createForm(SchoolsType::class, $school);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($school);
            $entityManager->flush();

            return $this->redirectToRoute('app_schools_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('schools/new.html.twig', [
            'school' => $school,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idSchool}", name="app_schools_show", methods={"GET"})
     */
    public function show(Schools $school): Response
    {
        return $this->render('schools/show.html.twig', [
            'school' => $school,
        ]);
    }

    /**
     * @Route("/{idSchool}/edit", name="app_schools_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Schools $school, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SchoolsType::class, $school);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_schools_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('schools/edit.html.twig', [
            'school' => $school,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idSchool}", name="app_schools_delete", methods={"POST"})
     */
    public function delete(Request $request, Schools $school, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$school->getIdSchool(), $request->request->get('_token'))) {
            $entityManager->remove($school);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_schools_index', [], Response::HTTP_SEE_OTHER);
    }
}
