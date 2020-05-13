<?php

namespace App\Tenant\Models;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use UsesTenantConnection;

    public function user()
    {
        return $this->belongsTo(\App\Tenant\Models\User::class);
    }
}
