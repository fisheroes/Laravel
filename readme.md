DEPLOY GITHUB

install git

buka aplikasi git bash

arahkan ke folder project laravel disimpan

ketik "git init" inisialisasi git pada project

ketik "git remote add origin https://github.com/fisheroes/Laravel.git" menghubungkan file project ke repository github

ketik "git add ." menambahkan file project

ketik "git commit -m "Init commit"" menyimpan file project untuk diantar ke repository

ketik "git push -u origin master" memindahkan file ke repository github



DEPLOY HEROKU FREE

install Heroku Command Line Interface (CLI)

buat file Procfile untuk menentukan root folder dengan cara :

buka git bash ketik "heroku login", masukkan email dan password yang telah terdaftar

buka bash baru ketik "heroku create" untuk membuat project baru dengan random name

ketik "heroku buildpacks:set heroku/php" untuk set build project ke php

"$ git add ." untuk menandai file

"$ git commit -m "Init commit"" merekam perubahan file

"$ git push heroku master" deploy ke heroku

buka project hasil deploy -> setting -> config vars, kemudian isi variabel app_name,env,key,url berdasarkan file .env pada root project laravel
