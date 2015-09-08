<?php

namespace OC\FentisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class globalsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aura',                   'number')
            ->add('ressource',              'number')
            ->add('sangFroid',              'number')
            ->add('agilite',                'number')
            ->add('perception',             'number')
            ->add('vigueur',                'number')
            ->add('intelligence',           'number')
            ->add('ruse',                   'number')
            ->add('technique',              'number')
            ->add('bonusDeg',               'number')
            ->add('initiative',             'number')
            ->add('mov',                    'number')
            ->add('ptRessTotaux',           'number')
            ->add('ptRessActuel',           'number')
            ->add('ptManaTotaux',           'number')
            ->add('ptManaActuel',           'number')
            ->add('resFleau',               'number')
            ->add('bestialite',             'number')
            ->add('impregne',               'number')
            ->add('necrose',                'number')
            ->add('stigmates',              'textarea')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\FentisBundle\Entity\globals'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_fentisbundle_globals';
    }
}
