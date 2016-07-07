<?php

namespace Intrix\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServicoController extends Controller {

    public function indexAction() {
        return $this->render('IntrixFrontendBundle:Servico:index.html.twig');
    }

    public function siteAction() {
        return $this->render('IntrixFrontendBundle:Servico:site.html.twig');
    }

    public function sistemaAction() {
        return $this->render('IntrixFrontendBundle:Servico:sistema.html.twig');
    }

    public function aluguelAction() {
        return $this->render('IntrixFrontendBundle:Servico:aluguel.html.twig');
    }

    public function manutencaoAction() {
        return $this->render('IntrixFrontendBundle:Servico:manutencao.html.twig');
    }

    public function hospedagemAction() {
        return $this->render('IntrixFrontendBundle:Servico:hospedagem.html.twig');
    }

    public function lojaAction() {
        return $this->render('IntrixFrontendBundle:Servico:loja.html.twig');
    }

    public function seoAction() {
        return $this->render('IntrixFrontendBundle:Servico:seo.html.twig');
    }

}
