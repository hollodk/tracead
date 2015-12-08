<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            //'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'amount' => 100,
            'order_id' => 123,
            'currency' => 'DKK',
            'country' => 'Denmark',
            'tax_amount' => 73,
            'shipping_amount' => 14
        ));
    }
}
