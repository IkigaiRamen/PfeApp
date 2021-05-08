<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AnnonceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            
            ->add('description')   
            ->add('categorieJob', ChoiceType::class,
            array(
                    'choices' => array(
                        'Plombier' => '',
                        'Electricien' => '',
                        'x1' => '',
                        'x2' => '',
                        'x3' => '',
                    )
                
                )
                
            )
            ->add('Publier',SubmitType::class);
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
