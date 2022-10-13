<?php 

namespace App\Models;
use DateTime;

class Tag extends Model
{
    
    protected $table = 'tags';


    public function getCreatedAt(): string
    {
        return $date = (new DateTime($this->created_at))->format('d/m/Y à H:m');
    }

    public function getExcerpt()
    {
        return substr($this->content, 0, 350) . '...';
    }

    public function getButton()
    {
        return <<<HTML

         <a class="blog-btn" href="../article/$this->id ?>">Lire plus</a>

HTML;

    }

    public function getPosts()
    {
        return $this->query("
                                SELECT a.* FROM articles a
                                INNER JOIN article_tag at ON at.article_id = a.id
                                WHERE at.tag_id = ?
                            ", 
                            $this->id
        );
    }

}
