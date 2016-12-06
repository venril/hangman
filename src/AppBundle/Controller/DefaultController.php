<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
 * @Route("/failed", name="failed")
 */
    public function failedAction()
    {
        return $this->render('hangman/failed.html.twig');
    }

    /**
     * @Route("/won", name="won")
     */
    public function wondAction()
    {
        return $this->render('hangman/won.html.twig');
    }
    /**
     * @Route("/game", name="game")
     */
    public function indexAction()
    {
        return $this->render('hangman/game.html.twig');
    }
    /**
     * @Route("/signin", name="signin")
     */
    public function connecAction()
    {
        return $this->render('hangman/connec.html.twig');
    }
    /**
     * @Route("/hello/{name}", name="hangman")
     */

    public function hangmanAction($name)
    {
        return $this->render('homepage.html.twig',
                [
                 'name' => $name,
                ]);
    }
    /**
     * @Route("/birthday/{month}/{day}", name="birthday")
     */
    public function yourbirthdayAction($month, $day)
    {
        $year = date('Y');
        $responseContent ='';
    for ($i=0;$i<10;$i++){
            $responseContent = $responseContent . ($year+$i).':'.date('l',mktime(0,0,0,$month,$day,$i))."<br>";

        }

        return new Response($responseContent);
    }
    /**
     * @Route("/birthdayr/{month}/{day}", name="birthday")
     */
    public function yourbirthdayrequirementAction($month, $day)
    {
        $year = date('Y');
        $birthdays =[];
        $responseContent ='';
        for ($i=0;$i<10;$i++){
            $birthdays[]=[
              'year' =>$year+$i,
                'day'=> date('l',mktime(0,0,0,$month,$day,$i))
            ];

        }

        return $this->render('homepage.html.twig',
            [
                'birthdays' => $birthdays,
            ]);
    }


}
