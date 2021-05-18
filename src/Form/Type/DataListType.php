<?php

namespace SweetSallyBe\FormsBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataListType extends AbstractType
{
    public function getParent()
    {
        return TextType::class;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['choices']);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['choices'] = $options['choices'];
    }

    public function getBlockPrefix(): string
    {
        return 'datalist';
    }

}