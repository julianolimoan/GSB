<?php

namespace App\Form;

use App\Entity\Visiteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;  
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VisiteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('login',TextType::class,array('label'=>'Login: ','attr'=>  
                  array('class' =>'form-control','placeholder'=>'Login ...')))  
            ->add('mdp',TextType::class,array('label'=>'Mdp: ','attr'=>  
                  array('class' =>'form-control','placeholder'=>'Mdp...')))  
            ->add('valider',SubmitType::class,array('label'=>'valider ','attr'=>  
                  array('class' =>'btn btn-primary btn-block')))
            ->add('annuler',SubmitType::class,array('label'=>'annuler ','attr'=>  
                  array('class' =>'btn btn-primary btn-block')))
          


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Visiteur::class,
        ]);
    }
}
