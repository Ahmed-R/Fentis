<?php

namespace OC\FentisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichePersoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user',                   new UsersType())
            ->add('personnage',             'text')
            ->add('xptotal',                'number')
            ->add('xprestant',              'number')
            ->add('race',                   'text')
            ->add('avantagesRaciaux',       'text')
            ->add('inconvenientRaciaux',    'text')
            ->add('user',                   'text')
            ->add('image',                  new ImageType())
            ->add('Skills',                 new SkillsType())
            ->add('save',                   'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\FentisBundle\Entity\FichePerso'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oc_fentisbundle_ficheperso';
    }
}
