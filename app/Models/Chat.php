<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model {

    protected $table = "chat";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

}