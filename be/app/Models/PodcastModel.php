<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $table = 'podcast';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'title', 'voice', 'voice_url', 'category', 'image', 'image_url',
    ];
    protected $useTimestamps = false;

}
