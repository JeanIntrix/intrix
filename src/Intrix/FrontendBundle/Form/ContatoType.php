<?php

namespace Intrix\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContatoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('nome', TextType::class, array(
                    'attr' => array(
                        'data-msg-required' => 'Preencha esse campo',
                        'pattern' => '.{2,}', //minlength
                        'class' => 'span3'
                    )
                ))
                ->add('email', EmailType::class, array(
                    'attr' => array(
                        'type' => 'email',
                        'data-msg-required' => 'Preencha esse campo',
                        'data-msg-email' => 'Preencha com email valido',
                        'class' => 'span3'
                    )
                ))
                ->add('assunto', TextType::class, array(
                    'attr' => array(
                        'data-msg-required' => 'Preencha esse campo',
                        'pattern' => '.{3,}', //minlength
                        'class' => 'span6'
                    )
                ))
                ->add('mensagem', TextareaType::class, array(
                    'attr' => array(
                        'data-msg-required' => 'Preencha esse campo',
                        'class' => 'span6',
                        'rows' => '10'
                    )
                ))
                ->add('save', SubmitType::class, array(
                    'label' => 'Enviar mensagem',
                    'attr' => array(
                        'class' => 'btn btn-primary btn-large',
                        'data-loading-text' => 'Carregando...',
                        'value' => 'Enviar mensagem'
                    )
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $collectionConstraint = new Collection(array(
            'nome' => array(
                new Length(array('min' => 2))
            ),
            'email' => array(
                new Email(array('message' => 'Invalid email address.'))
            ),
            'assunto' => array(
                new Length(array('min' => 3))
            ),
            'mensagem' => array(
                new Length(array('min' => 5))
            )
        ));

        $resolver->setDefaults(array(
            'constraints' => $collectionConstraint
        ));
    }

    public function getName() {
        return 'intrix_intrixfrontendbundle_contato';
    }

}
