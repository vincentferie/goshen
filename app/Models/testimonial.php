<?php

namespace App\Models;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    public function getExcerpt()
    {
        return substr($this->content, 0, 150). '...';
    }

}