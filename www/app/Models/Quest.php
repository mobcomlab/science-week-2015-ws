<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
	protected $table = 'quest';
    protected $primaryKey = 'id';

	public $timestamps = false;
	
	protected $casts = [
	        'id' => 'integer',
			'type' => 'integer',
			'status' => 'integer'
	    ];
}
