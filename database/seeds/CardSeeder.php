<?php

use App\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$cardlangs = Lang::get('cards');
			$cards = Storage::disk('public')->allfiles('images/cards');
			foreach($cards as $card) {
				$parts = pathinfo($card);
				if(isset($cardlangs[$parts['filename']])) {
					Card::create([
						'name' => $cardlangs[$parts['filename']] ['name'],
						'path' => $card,
						'description' => $cardlangs[$parts['filename']] ['description'] ,
					]);
				} else {
					echo $parts['filename']." not found\n";
				}
			}
    }
}
