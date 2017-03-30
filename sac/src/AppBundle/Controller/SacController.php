<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SacController extends Controller
{
    /**
     * @Route("/sac/begin", name="SAC")
     */
    public function listAction()
    {
    	$clientes = $this->getDoctrine()->getRepository('AppBundle:Cliente')->findAll();
        return $this->render('sac/index.html.twig', array('clientes' => $clientes));

    }

    /**
     * @Route("/sac/create", name="SAC_CREATE")
     */
    public function createAction()
    {
    	
    	
        return $this->render('sac/create.html.twig');
    }

    /**
     * @Route("/sac/edit/{id}", name="SAC_EDIT")
     */
    public function editAction($id)
    {
    	
        return $this->render('sac/edit.html.twig');
    }

    /**
     * @Route("/sac/details", name="SAC_DETAILS")
     */
    public function detailsAction()
    {
    	
        return $this->render('sac/details.html.twig');
    }

     /**
     * @Route("/sac/produtos", name="SAC_Produtos")
     */
    public function produtosAction()
    {
    	
        return $this->render('sac/produtos.html.twig');
    }

     /**
     * @Route("/sac/pedidos", name="SAC_PEDIDOS")
     */
    public function pedidosAction()
    {
    	
        return $this->render('sac/pedidos.html.twig');
    }
}
