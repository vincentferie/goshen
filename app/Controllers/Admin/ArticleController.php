<?php 

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{


    public function index(){
        $articles = (new Article($this->getDB()))->all();
        return $this->adminView('admin.article.index', compact('articles'));
    }

    public function edit($id){
        $article = (new Article($this->getDB()))->findById($id);
        return $this->adminView('admin.article.edit', compact('article'));
    }

    public function destroy(int $id){

        $article = new Article($this->getDB());
        $result = $article->destroy($id);

        if ($result) {
            header('Location: ../');
        } else {
            echo ' Article non supprimée de la base de données ';
        }
    
    }

}
