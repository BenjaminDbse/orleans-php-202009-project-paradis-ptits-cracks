<?php

namespace App\Controller;

use App\Model\IndividualManager;

class IndividualController extends AbstractController
{

    /**
     *Display information about a dog according is Id
     *
     * @param int $id
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $individualdog = new IndividualManager();

        $details = $individualdog->selectOneById($id);
        return $this->twig->render('Individual/individual.html.twig');
    }
}
