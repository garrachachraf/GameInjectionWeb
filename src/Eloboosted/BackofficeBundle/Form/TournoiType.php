<?php

namespace Eloboosted\BackofficeBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournoiType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Tournament 's name "), 'label' => false))
            ->add('startDate', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => false,
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',

                ]
            ])
            ->add('endDate', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => false,
                'attr' => [
                    'class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',

                ]
            ])
            ->add('reward1', NumberType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Reward 1"), 'label' => false))
            ->add('reward2', NumberType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Reward 2"), 'label' => false))
            ->add('reward3', NumberType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Reward 3"), 'label' => false))
            ->add('prixParJoueur', NumberType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Participation fees"), 'label' => false))
            ->add('nbrJoueur', NumberType::class, array('attr' => array('class' => 'form-control', 'placeholder' => "Players Number"), 'label' => false))
            ->add('imageTournoi', FileType::class, array(
                'attr' => array('class' => 'form-control', 'placeholder' => "etat"),

                'label' => false,
                'required' => false,
                'data_class' => null
            ))
            ->add('idGameTrn', EntityType::class, array(
                'attr' => array('class' => 'form-control', 'placeholder' => "Game"),
                'class' => 'EloboostedGameinjectionBundle:Gamelist',
                'choice_label' => 'name',
                'label' => false,
                'multiple' => false,
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Eloboosted\GameinjectionBundle\Entity\Tournoi'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eloboosted_gameinjectionbundle_tournoi';
    }


}
