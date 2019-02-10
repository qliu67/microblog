<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // one status belongs to one user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
