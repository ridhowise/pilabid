<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akuntansi extends Model
{
    protected $table = 'akuntansi';
    public $timestamps = true;

    public function server()
    {
      return $this->belongsTo('App\Models\server', 'server_id');
    }
}
