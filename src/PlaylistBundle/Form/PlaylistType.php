<?php

namespace PlaylistBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PlaylistType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Nom de la playlist :'))
            ->add('description', 'textarea', array('label' => 'Description :'))
            ->add('listAudios', 'entity', array(
                'class' => 'AudioBundle:Audio',
                'choice_label' => 'name',
                'multiple' => true,
                'label' => 'Audio(s)',
                'required' => false
                )
            )
            ->add('listPlaylists', 'entity', array(
                'class' => 'PlaylistBundle:Playlist',
                'choice_label' => 'name',
                'multiple' => true,
                'label' => 'Playlist(s)',
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
            'data_class' => 'PlaylistBundle\Entity\Playlist'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'playlistbundle_playlist';
    }
}
