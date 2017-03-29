<?php

namespace Eloboosted\FrontofficeBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GamesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomGames', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Game Name "), 'label' => false))
            ->add('imageGames', FileType::class, array(
                'attr' => array('class' => 'form-control', 'placeholder' => ""),

                'label' => false,
                'required' => false,
                'data_class' => null
            ))
            ->add('prix', NumberType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "price"), 'label' => false))
            ->add('supported', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Supported by "), 'label' => false))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Description "), 'label' => false))
            ->add('idCathegorieg',EntityType::class, array(
                'attr' => array('class' => 'form-control', 'placeholder' => "Cathegorie"),
                'class'=>'Eloboosted\GameinjectionBundle\Entity\Cathegorie',
                'choice_label'=>'nom',
                'multiple'=>false,
                'empty_data'=>'',
                'label' => false
            ))
            ->add('submit',SubmitType::class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Eloboosted\GameinjectionBundle\Entity\Games'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eloboosted_gameinjectionbundle_games';
    }


}
