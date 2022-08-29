<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'Salut Michel',
        ]);
    }

    #[Route('/blog/{id}', name: 'main_blog_id', requirements: ['id' => '\d+'])]
    public function blogId(int $id)
    {
        // dd($name);
        return new Response("<h1>Ceci est une page de blog, valeur $id</h1>");
    }

    #[Route('/blog/{name}', name: 'main_blog_name')]
    public function blogName(string $name)
    {
        // dd($name);
        return new Response("<h1>Ceci est une page de blog, page $name</h1>");
    }
}

    #[Route('/blog/{id}', name: 'main_blog_id', requirements: ['id' => '\d+'])]
    public function blogId(int $id)
    {
        // dd($name);
        return new Response("<h1>Combien de biéres? $id</h1>");
    }

    #[Route('/blog/{name}', name: 'main_blog_name')]
    public function blogName(string $name)
    {
        // dd($name);
        return new Response("<h1>Tu fou quoi? $name</h1>");
    }
}

<style>
				.example-wrapper {
					margin: 1em auto;
					max-width: 800px;
					width: 95%;
					font: 18px / 1.5 sans-serif;
				}
				.example-wrapper code {
					background: #F5F5F5;
					padding: 2px 6px;
				}
				header ul {
					display: flex;
					justify-content: flex-end;
					list-style: none;
					gap: 4rem;
					padding-right: 3rem;
					background-color: #E3700A;
					color: white;
					padding-top: 2rem;
					padding-bottom: 2rem;
				}
				header li {
					font-size: 2rem
				}
				footer {
					display: flex;
					background-color: #E3700A;
					position: fixed;
					left: 0;
					bottom: 0;
					width: 100%;
					background-color: #E3700A;
					color: white;
					text-align: center;
				}
			</style>