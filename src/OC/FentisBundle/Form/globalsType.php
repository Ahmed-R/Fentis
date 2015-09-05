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
            ->add('aura',                   'integer')
            ->add('ressource',              'integer')
            ->add('sangFroid',              'integer')
            ->add('agilite',                'integer')
            ->add('perception',             'integer')
            ->add('vigueur',                'integer')
            ->add('intelligence',           'integer')
            ->add('ruse',                   'integer')
            ->add('technique',              'integer')
            ->add('bonusDeg',               'integer')
            ->add('initiative',             'integer')
            ->add('mov',                    'integer')
            ->add('ptRessTotaux',           'integer')
            ->add('ptRessActuel',           'integer')
            ->add('ptManaTotaux',           'integer')
            ->add('ptManaActuel',           'integer')
            ->add('resFleau',               'integer')
            ->add('bestialite',             'integer')
            ->add('impregne',               'integer')
            ->add('necrose',                'integer')
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
