<?php

namespace Alom\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostCommentFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('fullname', 'text', array(
            'label' => 'Fullname *'
        ));
        $builder->add('email', 'email', array(
            'label' => 'Email *'
        ));
        $builder->add('website', 'url', array(
            'label'    => 'Website',
            'required' => false
        ));
        $builder->add('body', 'textarea', array(
            'label' => 'Comment *'
        ));
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Alom\WebsiteBundle\Entity\PostComment'
        );
    }

    public function getName()
    {
        return 'postcomment';
    }
}
