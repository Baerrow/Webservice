<?php

namespace AudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AudioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Nom de l\'audio :'))
            ->add('number', 'text', array('label' => 'Numéro de l\'audio dans sa série :'))
            ->add('description', 'textarea', array('label' => 'Description :'))
            ->add('isSaga', 'checkbox', array(
                'label' => 'Fait-il parti d\'une saga ?',
                'required'  => false
                )
            )
            ->add('genres', 'entity', array(
                'class' => 'GenreBundle:Genre',
                'choice_label' => 'name',
                'multiple' => true
                )
            )
            ->add('link', 'text', array('label' => 'Lien de l\'audio :'))
            ->add('uploadedBy', 'entity', array(
                'class' => 'UserBundle:User',
                'choice_label' => 'login',
                'label' => 'Mis en ligne par :'
                )
            )
            ->add('authors', 'entity', array(
                'class' => 'AuthorBundle:Author',
                'choice_label' => 'name',
                'multiple' => true,
                'label' => 'Auteur(s)'
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
            'data_class' => 'AudioBundle\Entity\Audio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'audiobundle_audio';
    }
}
