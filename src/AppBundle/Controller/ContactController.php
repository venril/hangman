<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
    * @Route("/{_locale}/contacter" name="contactor")
    */
    public function contactAction(){
        dump("ok");
        return $this->render('hangman/contact');
    }

}