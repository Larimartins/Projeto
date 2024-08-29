<?php
namespace App\Controller;
use App\Controller\AppController;
class ArticlesController extends AppController
{

    public function index()
    {
        $this->set('articles', $this->Articles->find('all'));
    }

    public function view($id)
    {
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }

    public function add()
    {
        $article = $this->Articles->newEmptyEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if  ($this->Articles->save($article)) {
                $this->Flash->success(__('Seu artigo foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('article', $article);
    }

    public function edit($id = null)
    {
        $article = $this->Articles->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Seu artigo foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
        }
        $this->set('article', $article);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('O artigo com id: {0} foi deletado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}