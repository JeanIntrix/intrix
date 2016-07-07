<?php

namespace Intrix\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ValorController extends Controller {

    public function indexAction() {
        return $this->render('IntrixFrontendBundle:Valor:index.html.twig');
    }

    public function siteAction() {
        return $this->render('IntrixFrontendBundle:Valor:site.html.twig');
    }

    public function sistemaAction() {
        return $this->render('IntrixFrontendBundle:Valor:sistema.html.twig');
    }

    public function aluguelAction() {
        return $this->render('IntrixFrontendBundle:Valor:aluguel.html.twig');
    }

    public function manutencaoAction() {
        return $this->render('IntrixFrontendBundle:Valor:manutencao.html.twig');
    }

    public function hospedagemAction() {
        return $this->render('IntrixFrontendBundle:Valor:hospedagem.html.twig');
    }

    public function lojaAction() {
        return $this->render('IntrixFrontendBundle:Valor:loja.html.twig');
    }

    public function seoAction() {
        return $this->render('IntrixFrontendBundle:Valor:seo.html.twig');
    }

}
