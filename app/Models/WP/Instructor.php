<?php

namespace App\Models\WP;

use Illuminate\Database\Eloquent\Model;

use Corcel\Model\Post as Corcel;

class Instructor extends Corcel
{
    protected $postType = 'instructors';
}
