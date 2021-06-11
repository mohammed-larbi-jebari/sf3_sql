<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Class ContactType
 * @package AppBundle\Form
 */
class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('name', TextType::class, array(
                        'required' => true,
                        'label' => 'Name',
                        'attr' => array('class' => 'form-control','style' => 'margin-bottom:15px'),

                        'constraints' => array(
                            new NotBlank(),
                        ),
                    ))
            ->add('email', EmailType::class, array(
                'required' => true,
                'label' => 'Email',
                'attr' => array('class' => 'form-control','style' => 'margin-bottom:15px'),

                'constraints' => array(
                    new Assert\NotBlank([
                        'message' => 'This field can not be blank'
                    ]),
                    new Assert\Email([
                        'message'=>'This is not the corect email format'
                    ]),
                ),
            ))
            ->add('subject', TextType::class, array(
                'required' => true,
                'label' => 'Subject',
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                'constraints' => array(
                    new NotBlank(),
                ),
            ))
            ->add('message', TextareaType::class, array(
                'required' => true,
                'label' => 'Message',
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px'),
                'constraints' => array(
                    new NotBlank(),
                ),
            ));
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
