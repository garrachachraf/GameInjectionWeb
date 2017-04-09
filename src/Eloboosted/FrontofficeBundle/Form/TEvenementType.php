<?php

namespace Eloboosted\FrontofficeBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TEvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleevent',TextType::class,array('attr' => array('placeholder' => 'title',)))
            ->add('note',TextareaType::class,array('attr' => array('class' => 'form-control','rows'=>5)))
            ->add('lien',TextType::class,array('attr' => array('placeholder' => 'http://',)))
            ->add('dateEvent',DateType::class,array(
                'years' => range(date('y') +10, date('y'))))
            ->add('typeEvent',EntityType::class,
                array(
                    'class' => 'Eloboosted\GameinjectionBundle\Entity\TypeEvent',
                    'choice_label' => 'nameEvent',
                    'attr'=>['class'=>'select2_single form-control'],
                    'multiple' => false,
                    ))
            ->add('imgEvent',FileType::class,array('data_class' => null))
            ->add('Add',SubmitType::class,array('attr' => array('class' => 'btn btn-success',)));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Eloboosted\GameinjectionBundle\Entity\TEvenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eloboosted_gameinjectionbundle_tevenement';
    }


}
