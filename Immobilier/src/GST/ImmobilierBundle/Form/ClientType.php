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

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numeropiece',TextType::class,array("label"=>"NIN"))
        ->add('nomclient',TextType::class,array("label"=>"Nom & Prénom"))
        ->add('telclient',NumberType::class,array("label"=>"Téléphone"))
        ->add('adresseclient',TextType::class,array("label"=>" Adresse"))
        ->add('emailclient',EmailType::class,array("label"=>"Login"))
        ->add('password',PasswordType::class,array("label"=>"Password"))
        ->add('save',SubmitType::class,array("label"=>"S'inscrire"));
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GST\ImmobilierBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gst_immobilierbundle_client';
    }


}
