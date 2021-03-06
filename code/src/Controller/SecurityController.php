<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class SecurityController
 * @package App\Controller
 * @Route("/oauth2")
 */
class SecurityController extends AbstractController
{
    /**
     * @param ClientRegistry $clientRegistry
     * @return RedirectResponse
     * @Route("/connect", name="_connect")
     */
    public function connect(ClientRegistry $clientRegistry)
    {
        return $clientRegistry->getClient('google')->redirect([], []);
    }

    /**
     * @Route("/check", name="connect_google_check")
     */
    public function check()
    {

    }

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     * @throws \Exception
     */
    public function logout()
    {
        // controller can be blank: it will never be executed!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
