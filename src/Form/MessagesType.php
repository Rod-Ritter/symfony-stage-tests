<?php

namespace App\Form;

use App\Entity\Messages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class MessagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class,
        ['attr' => ['placeholder' => ' Votre Nom *',]])
        ->add('prenom', TextType::class,
        ['attr' => ['placeholder' => ' Votre Prénom *',]])
        ->add('Email', EmailType::class,
        ['attr' => ['placeholder' => ' Votre Email *',]])
        ->add('entreprise', TextType::class,
        ['attr' => ['placeholder' => ' Votre Entreprise *',]])
        ->add('telephone', TelType::class,
        ['attr' => ['placeholder' => ' Votre Numéro *',]])
        ->add('Message', TextareaType::class,
        ['attr' => ['placeholder' => 'Votre Message *',]])
        ->add('Envoyer', SubmitType::class);
    
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Messages::class,
        ]);
    }
}