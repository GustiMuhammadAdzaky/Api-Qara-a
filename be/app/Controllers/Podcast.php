<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PodcastModel;

class Podcast extends BaseController
{
    protected $podcastModel;

    public function __construct()
    {
        $this->podcastModel = new PodcastModel();
    }

    public function index()
    {
        $data = [
            'podcast' => $this->podcastModel->findAll(),
        ];

        // dd($this->podcastModel->findAll());
        return view('podcast/index', $data);
    }

    public function create()
    {
        return view('podcast/create');
    }

    public function save()
    {
        # code...
    }

}
