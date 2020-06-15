# About Qcards

## CARDS
add cards to the `storage/images/cards` folder
add details per card at `recources/lang/en/cards.php`
make sure the seeder is loaded
run `php artisan migrate:refresh --seed`
or for just the cards `php artisan db:seed --class=CardSeeder`



