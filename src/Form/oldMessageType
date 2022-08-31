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
        ['label' => 'Nom :','attr' => ['placeholder' => ' Votre Nom *',
        'class' => 'formCssInput']])
        ->add('prenom', TextType::class,
        ['label' => 'Prénom :','attr' => ['placeholder' => ' Votre Prénom *',
        'class' => 'formCssInput']])
        ->add('Email', EmailType::class,
        ['label' => 'Email :','attr' => ['placeholder' => ' Votre Email *',
        'class' => 'formCssInput']])
        ->add('entreprise', TextType::class,
        ['label' => 'Entreprise :','attr' => ['placeholder' => ' Votre Entreprise *',
        'class' => 'formCssInput']])
        ->add('telephone', TelType::class,
        ['label' => 'Téléphone :','attr' => ['placeholder' => ' Votre Numéro *',
         'class' => 'formCssInput']])
        ->add('Message', TextareaType::class,
        ['label' => ' Message :','attr' => ['placeholder' => 'Votre Message *',
        'class' => 'formCssMessage']])
        ->add('Envoyer', SubmitType::class,
        ['label' => 'Envoyer :','attr' => ['class' => 'formCssSend']])
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Messages::class,
        ]);
    }
}