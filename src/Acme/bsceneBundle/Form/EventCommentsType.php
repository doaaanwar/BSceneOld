<?php

namespace Acme\bsceneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventCommentsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('comment')
            ->add('commentTime')
            ->add('username')
            ->add('email')
            ->add('event')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\bsceneBundle\Entity\EventComments'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_bscenebundle_eventcomments';
    }
}
