<?php

namespace Intrix\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        return $this->render('IntrixFrontendBundle:Home:index.html.twig');
    }

    public function bannerAction() {
        return $this->render('IntrixFrontendBundle:Home:_banner.html.twig');
    }

}
