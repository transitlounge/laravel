<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	public static function path($id)
	{
		$card = Card::find($id);
		return $card->path;
	}
}
