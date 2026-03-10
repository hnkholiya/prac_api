<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ContactController;

class Contact extends Model
{
 protected $table='contact';
 protected $primaryKey = "user_id";

 protected $fillable = [
        'user_name',
        'user_email',
        'user_desc'
    ];
}
