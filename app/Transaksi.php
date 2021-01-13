<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'users_id','id');
    }
}
