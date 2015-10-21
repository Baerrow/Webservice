<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', 'text', array('label' => 'Nom :'))
            ->add('mail', 'email', array('label' => 'Mail :'))
            ->add('password', 'password', array('label' => 'Mot de passe :'))
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'Les mots de passe doivent être les mêmes.',
                'required' => true,
                'first_options'  => array('label' => 'Mot de passe : '),
                'second_options' => array('label' => 'Répéter le mot de passe :'),
            ))
            ->add('isAdmin', 'checkbox', array(
                'label' => 'Admin ?',
                'required'  => false
                )
            )
            ->add('audioListened', 'entity', array(
                'class' => 'AudioBundle:Audio',
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'userbundle_user';
    }
}
