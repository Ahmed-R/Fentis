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
            ->add('forceAme',           'integer')
            ->add('tromperie',          'integer')
            ->add('defCac',             'integer')
            ->add('defDist',            'integer')
            ->add('armure',             'integer')
            ->add('malusTotal',         'integer')
            ->add('eva',                'integer')
            ->add('ptVieTotaux',        'integer')
            ->add('ptVieActuel',        'integer')
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
