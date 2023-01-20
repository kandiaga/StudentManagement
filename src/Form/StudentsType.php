<?php

namespace App\Form;

use App\Entity\Students;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('studentName')
            ->add('studentImage')
            ->add('studentFistname')
            ->add('studentLastname')
            ->add('studentAge')
            ->add('studentBirth')
            ->add('idSchool')
            ->add('registrationDate')
            ->add('homeCity')
            ->add('homeAddress')
            ->add('fatherName')
            ->add('montherName')
            ->add('parentPhone')
            ->add('fatherPhone')
            ->add('montherPhone')
            ->add('created')
            ->add('idClasse')
            ->add('isActive')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Students::class,
        ]);
    }
}
