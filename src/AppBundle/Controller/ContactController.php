<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Model\Product;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactController extends Controller
{
    /**
    * @Route("/{_locale}/contact", name="contact")
    */
    public function contactAction(){
        dump("ok");
        return $this->render('hangman/contact.html.twig');
    }

    /**
     * @Route("/product", name="product")
     */
    public function productAction(){
        $product = new Product();
        $product->name = 'toto';
        $product->setPrice(50.0);
        $form = $this->createForm(ProductType::class, $product);
        $form->add('send',SubmitType::class);
        return $this->render('hangman/product.html.twig',[
            'formView'=> $form->createView()

        ]);
    }


}