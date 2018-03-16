<?php

namespace GST\ImmobilierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BienProType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom')
        ->add('description')
        ->add('montantvoulu')       
        ->add('idparent')
        ->add('localite')   
        ->add('typebien')
        ->add('proprietaire',     ProprietaireType::class) // Ajoutez cette ligne
        ->add('save',      SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GST\ImmobilierBundle\Entity\BienPro'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gst_immobilierbundle_bienpro';
    }


}
