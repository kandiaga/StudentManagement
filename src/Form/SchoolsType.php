<?php

namespace App\Form;

use App\Entity\Schools;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchoolsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('schoolName')
            ->add('schoolCountry')
            ->add('schoolCity')
            ->add('schoolLevel')
            ->add('schoolAddress')
            ->add('schoolPhone')
            ->add('schoolPhax')
            ->add('schoolPostalcode')
            ->add('schoolDescription')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Schools::class,
        ]);
    }
}
