<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactType;
use AppBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Model\Product;
use AppBundle\Model\Contact;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
    * @Route("/{_locale}/contacttt", name="contactold")
    */
    public function contactoldAction(){
        return $this->render('hangman/contact.html.twig');
    }

    /**
     * @Route("/product", name="product")
     */
    public function productAction(Request $request)
    {
        $product = new Product();
        $product->name = 'toto';
        $product->setPrice(50.0);
        $form = $this->createForm(ProductType::class, $product);
        $form->add('send', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            return $this->render('hangman/product.html.twig', [
                'formView' => $form->createView()

            ]);
        }
    }

        /**
         * @Route("/{_locale}/contact", name="contact")
         */
        public function contactAction(Request $request){
            $contact = new Contact();
            $form = $this->createForm(ContactType::class, $contact);
            $form->add('send',SubmitType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                return $this->render('hangman/contact.html.twig', [
                    'formView' => $form->createView()

                ]);
            }
    }


}