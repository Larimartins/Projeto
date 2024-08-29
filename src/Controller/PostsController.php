<?php
namespace App\Controller\Api;

use App\Controller\AppController;

class PostsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Auth', [
            'authenticate' => ['Form'],
            'storage' => 'Session'
        ]);
    }

    public function index()
    {
        $posts = $this->Posts->find('all');
        $this->set([
            'posts' => $posts,
            '_serialize' => ['posts']
        ]);
    }

    public function view($id)
    {
        $post = $this->Posts->get($id);
        $this->set([
            'post' => $post,
            '_serialize' => ['post']
        ]);
    }
}

