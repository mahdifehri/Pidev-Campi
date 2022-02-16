<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_user')
            ->add('description',TextareaType::class,[
                "attr" =>[
                    "class" =>"form-control"
                ]
            ])
            ->add('image',TextType::class)
            ->add('date')
            ->add('destination',TextType::class,[
                "attr"=>[
                    "class"=>"form-control"
                ]
            ])
            ->add('prix',TextType::class)
            ->add('nbr_participants')
            ->add('nbr_participants_max',TextType::class)
            ->add('etat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
