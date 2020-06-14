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
remove DB_DATABASE variable from .env 
```
touch database/database.sqlite
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
`npm install vue --save-dev`
you can run `php artisan ui vue` nu know that there is a lot of extra stuf that gets added such as jquery and bootstrap.
Make sure you havew a clean repo so you see the changes


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

## NEW REPO
with pull
```
mkdir
git init
git pull https://github.com/transitlounge/laravel.git master
git remote add origin https://github.com/transitlounge/wuji.git
git push -u origin master
git remote add upstream https://github.com/transitlounge/laravel.git
git fetch upstream
git merge upstream/master 


```
when changes

`git pull upstream master` 


or use the github templete to copy/fork the project
but have not gotten the git pull upstream working here
```
git clone https://github.com/transitlounge/test.git
git remote add upstream https://github.com/transitlounge/laravel.git
git fetch upstream --allow-unrelated-histories
git pull upstream master --allow-unrelated-histories
```
if you get `fatal: Not possible to fast-forward, aborting` you might need to run `git merge` or `git merge upstream/master --allow-unrelated-histories`
