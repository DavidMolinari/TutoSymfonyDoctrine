<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Cours;
use AppBundle\Form\CoursType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class AppliController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/creercours", name="CreerCours")
     */
    public function creerCoursACtion(Request $request){

        /*
        $cours = new Cours();


        $form = $this->createFormBuilder($cours)
            ->add('libellecours', TextType::class, array('label' => 'Libéllé du cours :'))
            ->add('nbjours', IntegerType::class, array('label' => 'Nb jours : :'))
            ->add('save', SubmitType::class)
            ->getForm();


        $form->handleRequest($request);

        $this->get('request');

        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();

            return $this->render('AppBundle::App:ok.html.twig', array('message' => 'Cours Créé'));
        }
        return $this->render('AppBundle::App:cours.html.twig', array('leFormulaire' => $form->createView()));

        */

        $cours = new Cours();

        $form = $this->createFormBuilder($cours)
            ->add('libellecours', TextType::class, array('label' => 'Libéllé du cours :'))
            ->add('nbjours', IntegerType::class, array('label' => 'Nb jours : :'))
            ->add('save', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->render('App/ok.html.twig', array('message' => 'Cours Créé'));

        }

        return $this->render('App/cours.html.twig', array('leFormulaire' => $form->createView()));


    }
}
