<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{

    public function blog()
    {
        $article = new Article($this->getDB());
        $articles = $article->all();
        
        return $this->view('content.blog', compact('articles'));
    }

    public function show(int $id)
    {

        $article = new Article($this->getDB());
        $article = $article->findById($id);

        return $this->view('content.article', compact('article'));
    }

    public function tag(int $id)
    {
        $tag = (new Tag($this->getDB()))->findById($id);

        return $this->view('content.tag', compact('tag'));
    }


}
