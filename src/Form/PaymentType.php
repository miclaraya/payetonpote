<?php

namespace App\Form;

use App\Entity\Payment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\ParticipantType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class PaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', NumberType::class, [
                'required'  =>  true,
                'attr'      =>  [
                    'pattern'   =>  '^[1-9]\d*',
                    'class'     =>  'validate',
                ]
            ])
            ->add('show_participant', CheckboxType::class, [
                'required' => false,
            ])
            ->add('show_amount', CheckboxType::class, [
                'required' => false,
            ])
            ->add('participant', ParticipantType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Payment::class,
            'allow_extra_fields' => true
        ]);
    }
}
