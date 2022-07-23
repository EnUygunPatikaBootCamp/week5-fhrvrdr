<?php

namespace App\Controller;

use App\Service\SlugGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(SlugGenerator $slugGenerator): Response
    {
        $slug = $slugGenerator->generateSlug('Bu mesajı slug haline getirdim');
        return $this->render('blog/index.html.twig', [
            'slug' => $slug,
        ]);
    }
}
