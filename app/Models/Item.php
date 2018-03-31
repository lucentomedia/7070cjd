<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Item extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inventory()
	{
		return $this->hasMany(Inventory::class);
	}
}
