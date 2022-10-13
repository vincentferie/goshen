<?php

namespace App\Models;

use DateTime;

class Article extends Model
{
    protected $table = 'articles';

    public function getCreatedAt(): string
    {
        return $date = (new DateTime($this->created_at))->format('d/m/Y à H:i');
    }

    public function getExcerpt(){
        return substr($this->content, 0, 350) . '...';
    }

    public function getButton()
    {
        return <<<HTML

         <a class="blog-btn" href="article/$this->id ?>">Lire plus</a>

HTML;

    }

    public function getTags()
    {
        return $this->query("
           SELECT t.* FROM tags t
           INNER JOIN article_tag at ON at.tag_id = t.id
           INNER JOIN articles a ON at.article_id = a.id
           WHERE a.id = ?
          ", $this->id
        );
    }
}