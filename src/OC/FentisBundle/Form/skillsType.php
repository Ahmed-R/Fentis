<?php

namespace OC\FentisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class skillsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('education',              'integer')
            ->add('detection',              'integer')
            ->add('parade',                 'integer')
            ->add('esquive',                'integer')
            ->add('respsy',                 'integer')
            ->add('lucidite',               'integer')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\FentisBundle\Entity\skills'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_fentisbundle_skills';
    }
}
