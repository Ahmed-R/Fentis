<?php

namespace OC\FentisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class lifeInfoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('forceAme',           'number')
            ->add('tromperie',          'number')
            ->add('defCac',             'number')
            ->add('defDist',            'number')
            ->add('armure',             'number')
            ->add('malusTotal',         'number')
            ->add('eva',                'number')
            ->add('ptVieTotaux',        'number')
            ->add('ptVieActuel',        'number')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\FentisBundle\Entity\lifeInfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_fentisbundle_lifeinfo';
    }
}
