<?php

namespace App\Controllers;

use App\Models\Activity;
use App\Models\Testimonial;


class RenderController extends Controller
{

    public function index()
    {
        $activity = new Activity($this->getDB());
        $activites = $activity->findAll();

        return $this->view('content.index', compact('activites'));
    }

    public function about()
    {
        return $this->view('content.about');
    }

    public function job()
    {
        return $this->view('content.job');
    }

     public function contact()
    {
        return $this->view('content.contact');
    }

    public function test()
    {

        $testimonial = new Testimonial($this->getDB());
        $testimonials = $testimonial->findAll();

        return $this->view('content.test', compact('testimonials'));
    }

}
