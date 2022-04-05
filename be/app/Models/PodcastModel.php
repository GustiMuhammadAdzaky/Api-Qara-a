<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $table = 'podcast';
    protected $primaryKey = 'id';
    protected $returnType = 'App\Entities\Podcast';
    protected $allowedFields = [
        'title', 'voice', 'category', 'image',
    ];
    protected $useTimestamps = false;

}
