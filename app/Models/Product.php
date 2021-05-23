<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function imagesList()
    {
        return explode(",", $this->images);
    }
    public function imagesComma()
    {
        return implode(",", $this->imagesList());
    }
}
