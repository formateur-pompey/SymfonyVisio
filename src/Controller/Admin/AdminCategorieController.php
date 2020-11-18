<?php


namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCategorieController extends AbstractController
{

    /**
     * @Route("admin/categorie", name="admin_category_index")
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('admin/index.html.twig');
    }
}