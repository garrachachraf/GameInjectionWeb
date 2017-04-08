<?php

namespace Eloboosted\FrontofficeBundle\Form;

use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleProduit', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Libelle')))
            ->add('marqueProduit', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Marque')))
            ->add('prixProduit', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Price','onkeypress'=>'return isNumber(event)')))
            //->add('dateProduit')
            ->add('etat', ChoiceType::class, array('attr' => array('class' => 'form-control'), 'choices' => array(
                'Exchange' => 'Exchange',
                'Sell' => 'Sell',

            ),))
            ->add('imgProduit', FileType::class, array('data_class' => null,'attr' => array('class' => 'BSbtnsuccess', 'style' => "position: absolute; clip: rect(0px 0px 0px 0px);")))
            ->add('imageProduit2', FileType::class, array('data_class' => null,'attr' => array('class' => 'BSbtnsuccess', 'style' => "position: absolute; clip: rect(0px 0px 0px 0px);")))
            ->add('imageProduit3', FileType::class, array('data_class' => null,'attr' => array('class' => 'BSbtnsuccess', 'style' => "position: absolute; clip: rect(0px 0px 0px 0px);")))
            //->add('idCompteProd')
            ->add('idCategorieProd', EntityType::class,
                array(
                    'class' => 'Eloboosted\GameinjectionBundle\Entity\TCategorie',
                    'choice_label' => 'nomCategorie',
                    'attr' => ['class' => 'form-control input-md'],
                    'multiple' => false,
                ))
            ->add('descriptionProduit', TextareaType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Description', 'rows' => 7)))
            ->add('Valider', SubmitType::class, array('attr' => array('class' => 'btn btn-success btn-lg btn-rounded btn-shadow')))
            ->add('captcha',CaptchaType::class,array('invalid_message'=>'you have put a wrong captcha code :)'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Eloboosted\GameinjectionBundle\Entity\TProduit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eloboosted_gameinjectionbundle_tproduit';
    }


}
