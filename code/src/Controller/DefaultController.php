<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function default()
    {
        return $this->render('default/default.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        return $this->render('default/profile.html.twig');
    }
}