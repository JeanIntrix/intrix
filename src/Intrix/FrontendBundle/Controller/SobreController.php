<?php

namespace Intrix\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SobreController extends Controller {

    public function indexAction() {
        return $this->render('IntrixFrontendBundle:Sobre:index.html.twig');
    }

}
