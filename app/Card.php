<?php

namespace App;

use App\Note;
use Illuminate\Database\Eloquent\Model;

class Card extends Model {
	public function notes() {
		return $this->hasMany(Note::class);
	}
}
