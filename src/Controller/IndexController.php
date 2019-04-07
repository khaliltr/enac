<?php

namespace App\Controller;

use App\Entity\Categorie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {$repositoryCategorie = $this->getDoctrine()->getRepository(Categorie::class);
        $categories= $repositoryCategorie->findAll();
        return $this->render('index.html.twig',[
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('Admin/index.html.twig');
    }

}
