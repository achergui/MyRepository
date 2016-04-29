<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Donnateur;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    /**
     * @Route("/somme/{a}/{b}")
     */
    public function sommeAction($a,$b)
    {
    	$s = $a+$b;
    	return $this->render('default/somme.html.twig', array('a'=>$a, 'b'=>$b,'somme'=>$s));
    }
    
    /**
     * @Route("/addDonnateur/{nom}/{prenom}")
     */
    public function addDonnateurAction($nom,$prenom)
    {
    	$donnateur = new Donnateur();
    	$donnateur->setCivilite("Mme");
    	$donnateur->setNom($nom);
    	$donnateur->setPrenom($prenom);
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($donnateur);
    	$em->flush();
    	
    	return $this->render('default/addDonnateur.html.twig', array('donnateur'=>$donnateur));
    }
    
    /**
     * @Route("/listeDonnateurs",name="list")
     * @Template()
     */
    public function listeDonnateursAction()
    {
    	$donnateurs = $this->getDoctrine()->getRepository("AppBundle:Donnateur")->findAll();
    	 
    	return $this->render('default/listeDonnateurs.html.twig', array('donnateurs'=>$donnateurs));
    }
    
    /**
     * @Route("/saisieDonnateurs")
     * @Template()
     */
    public function saisieDonnateursAction(Request $request)
    {
    	$donnateur = new Donnateur();
    	// On crée le FormBuilder grâce au service form factory
    	$formBuilder = $this->createFormBuilder($donnateur)
    		->add('nom',TextType::class)
    		->add('prenom',TextType::class)
    		->add('fonction',TextType::class)
    		->add('dateDeNaissance',DateType::class)
    		->add('Add', SubmitType::class)
    	;
    	// À partir du formBuilder, on génère le formulaire

    	$form = $formBuilder->getForm();
    	$form->handleRequest($request);
    	if($form->isValid()){
    		$em=$this->getDoctrine()->getManager();
    		$em->persist($donnateur);
    		$em->flush();
    		return $this->redirect($this->generateUrl("list"));
    		
    	}
    	
    	return $this->render('default/saisieDonnateurs.html.twig', array('f'=>$form->createView()));
    }
    
    
}
