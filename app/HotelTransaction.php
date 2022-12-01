<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelTransaction extends Model
{
    use SoftDeletes;

    protected $guards = [];
    protected $fillable = ['id', 'train_code', 'train_date', 'clean', 'soil', 'stain', 'torn', 'train_status', 'delivery_status'];
}
