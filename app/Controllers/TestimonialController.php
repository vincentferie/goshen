<?php

namespace App\Controllers;

use App\Models\Testimonial;

class TestimonialController extends Controller
{

    public function index()
    {
        $testimonial = new Testimonial($this->getDB());
        $testimonials = $testimonial->findAll();

        return $this->view('content.index', compact('testimonials'));
    }

    public function show(int $id)
    {
        
        $testimonial = new Testimonial($this->getDB());
        $testimonial = $testimonial->findByID($id);

        return $this->view('content.test', compact('test'));
    }

}
