<?php

namespace OC\FentisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class detailsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personnage',             'text')
            ->add('xptotal',                'integer')
            ->add('xprestant',              'integer')
            ->add('race',                   'text')
            ->add('sexe',                   'text')
            ->add('gabarit',                'text')
            ->add('taille',                 'integer')
            ->add('poids',                  'integer')
            ->add('beaute',                 'textarea')
            ->add('caractere',              'textarea')
            ->add('avantagesRaciaux',       'textarea')
            ->add('inconvenientRaciaux',    'textarea')
            ->add('note',                   'textarea')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\FentisBundle\Entity\details'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_fentisbundle_details';
    }
}
