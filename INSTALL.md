## Basic setup
```
laravel new transitlounge
init git /add/commit
composer require laravel-frontend-presets/tailwindcss --dev
php artisan ui tailwindcss --auth
npm install && npm run dev
mkdir database/data
touch database/data/main.sqlite
```
## ENV/DB
set DB, name, url
```
php artisan migrate

```

## STORAGE
in config/filesystem.php
```php
'links' => [
    public_path('images') => storage_path('app/public/images'),
],
```
then run:

`php artisan storage:link`

## SEED
Set the user seeder
```
php artisan migrate:refresh --seed
```

## DEBUGBAR
```bash
composer require barryvdh/laravel-debugbar --dev
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
```

Add `DEBUGBAR_ENABLED=true` to .env file

## VUE
<!-- npm install vue --save-dev -->

## IDE HELPER
```
composer require --dev barryvdh/laravel-ide-helper
https://gist.githubusercontent.com/barryvdh/5227822/raw/4be028a27c4ec782965bb8f2fdcb4c08c71a441d/_ide_helper.php
php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan ide-helper:models --nowrite
```

## GIT FORK UPSTREAM 
We want this transitlounge/laravel fork to follow changes in laravel/laravel origonal repo
we setup the upsteam first:
```
git checkout master
git remote -v

git remote add upstream https://github.com/laravel/laravel.git 
OR 
git remote set-url upstream https://github.com/laravel/laravel.git

git remote -v
```
Then we fetch the changes, deal with any conflicts and merge

`git fetch upstream`

Merge upstream with the appropriate local branch

`git merge upstream/master ( maybe need to add: --allow-unrelated-histories)`

and push

`git push origin master`
