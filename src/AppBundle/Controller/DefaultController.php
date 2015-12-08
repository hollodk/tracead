<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/checkout")
     */
    public function checkoutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/checkout.html.twig', array(
        ));
    }

    /**
     * @Route("/ok")
     */
    public function okAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/ok.html.twig', array(
        ));
    }

    /**
     * @Route("/global")
     */
    public function globalAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/global.html.twig', array(
            'amount' => 100,
            'order_id' => 123,
            'currency' => 'DKK',
            'country' => 'Denmark',
            'tax_amount' => 100,
            'shipping_amount' => 100,
        ));
    }
}
