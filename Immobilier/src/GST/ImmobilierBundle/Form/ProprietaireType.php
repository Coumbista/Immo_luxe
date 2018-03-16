<?php

namespace GST\ImmobilierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class ProprietaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numpiece',NumberType::class,array("label"=>"NIN"))
        ->add('nomcomplet',TextType::class,array("label"=>"Nom"))
        ->add('adressepro',TextType::class,array("label"=>"Adresse"))
        ->add('telPro',NumberType::class,array("label"=>"Tel"))
        ->add('emailPro',EmailType::class,array("label"=>"Email"))
        ->add('codebanque',NumberType::class,array("label"=>"Code_Banque"));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GST\ImmobilierBundle\Entity\Proprietaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gst_immobilierbundle_proprietaire';
    }


}
