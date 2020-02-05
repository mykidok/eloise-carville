<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    private $formFactory;

    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * @Route(path="", name="home", methods={"GET"})
     * @Template("home.html.twig")
     */
    public function homeAction()
    {
        return [];
    }

    /**
     * @Route(path="/who-am-i", name="whoami", methods={"GET"})
     * @Template("whoami.html.twig")
     */
    public function whoAmIAction()
    {
        return [];
    }

    /**
     * @Route(path="/services", name="services", methods={"GET"})
     * @Template("services.html.twig")
     */
    public function serviceAction()
    {
        return [];
    }

    /**
     * @Route(path="/contact", name="contact", methods={"GET"})
     * @Template("contact.html.twig")
     */
    public function contactAction()
    {
        return [];
    }

    /**
     * @Route(path="/legal-notice", name="legals", methods={"GET"})
     * @Template("legal.html.twig")
     */
    public function legalAction()
    {
        return [];
    }
}