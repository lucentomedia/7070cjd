<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	public function permissions()
	{
		return $this->hasMany(Permission::class);
	}
}
