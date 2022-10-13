<?php 

namespace App\Models;

class Activity extends Model
{

    protected $table = 'activites';

    public function getExcerpt()
    {
        return substr($this->content, 0, 50) . '...';
    }

}