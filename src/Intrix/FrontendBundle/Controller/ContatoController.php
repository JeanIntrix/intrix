<?php

namespace Intrix\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Intrix\FrontendBundle\Form\ContatoType;

class ContatoController extends Controller {

    public function indexAction(Request $request) {
	
        $form = $this->createForm(ContatoType::class);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $messageToSchoffen = \Swift_Message::newInstance()
                        ->setSubject($form->get('assunto')->getData())
                        ->setFrom($form->get('email')->getData())
                        ->setTo('contato@intrix.com.br')
                        ->setContentType("text/html")
                        ->setBody($this->renderView('IntrixFrontendBundle:Contato:email_intrix.html.twig', array(
                            'nome' => $form->get('nome')->getData(),
                            'assunto' => $form->get('assunto')->getData(),
                            'mensagem' => $form->get('mensagem')->getData(),
                            'email' => $form->get('email')->getData()
                )));

                $messageToCliente = \Swift_Message::newInstance()
                        ->setSubject($form->get('assunto')->getData())
                        ->setFrom('contato@intrix.com.br', 'Contato Intrix')
                        ->setTo($form->get('email')->getData())
                        ->setContentType("text/html")
                        ->setBody($this->renderView('IntrixFrontendBundle:Contato:email_cliente.html.twig', array(
                            'nome' => $form->get('nome')->getData(),
                            'assunto' => $form->get('assunto')->getData(),
                            'mensagem' => $form->get('mensagem')->getData()
                )));

                $this->get('mailer')->send($messageToSchoffen);
                $this->get('mailer')->send($messageToCliente);

                $request->getSession()->getFlashBag()->add('success', 'Seu email foi enviado, obrigado!');

                return $this->redirect($this->generateUrl('intrix_frontend_contato'));
            }
        }

        return $this->render('IntrixFrontendBundle:Contato:index.html.twig', array(
                    'form' => $form->createView()
        ));
    }

}
