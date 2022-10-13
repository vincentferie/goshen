<?php

namespace App\Controllers;

use App\Models\Activity;

class ActivityController extends Controller
{

    public function index()
    {
        $activity = new Activity($this->getDB());
        $activites = $activity->findAll();

        return $this->view('content.index', compact('activites'));
    }

    public function show(int $id)
    {

        $activity = new Activity($this->getDB());
        $activity = $activity->findById($id);

        return $this->view('content.activity', compact('activity'));
    }

}
