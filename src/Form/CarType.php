<?php

namespace App\Form;

use App\Entity\Car;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('model')
            ->add('date_of_creation')
            ->add('brand', ChoiceType::class , [
                'choices' => $options['brands'],
                'choice_label' => function ($choice) {
            
                    return $choice->getName();
                },
                'choice_value' => function ($choice) {
            
                    return $choice->getId();
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
            'brands' => []
            
        ]);
    }
}
