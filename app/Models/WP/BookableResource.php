<?php

namespace App\Models\WP;

use Illuminate\Database\Eloquent\Model;

use Corcel\Model\Post as Corcel;

class BookableResource extends Corcel
{
    protected $postType = 'bookable_resource';
}
