<?php

namespace App\Form;

use App\Entity\Campaign;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CampaignType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr'  =>  [
                    'class' => 'validate'
                ]
            ])
            ->add('title', TextType::class, [
                'attr'  =>  [
                    'class' => 'validate'
                ]
            ])
            ->add('content', TextareaType::class, [
                'attr'  =>  [
                    'placeholder'   =>  'Décrivez à vos amis pourquoi vous faites une campagne',
                    'class'         =>  'materialize-textarea'
                    ]
            ])
            ->add('goal', NumberType::class, [
                'attr'  =>  [
                    'class' => 'validate'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Campaign::class,
        ]);
    }
}
