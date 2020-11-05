<?php

namespace App\Form;

use App\Entity\Recette;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                "label" => "Nom de la recette",
                "required" => false,
                "attr" => [
                    "placeholder" => "Nom de la recette"
                ]
            ])
            ->add('resumer', TextType::class, [
                "label" => "Résumer de la recette",
                "required" => false,
            ])
            ->add('preparation', TextareaType::class, [
                "required" => false,
                "attr" => [
                    "rows" => 8
                ]
            ])
            ->add('temps', TextType::class, [
                "required" => false,
            ])
            ->add('personne', NumberType::class, [
                "required" => false,
            ])
            //->add('createdAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
