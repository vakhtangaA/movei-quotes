![movie-quotes](https://user-images.githubusercontent.com/71987862/148092278-6bf724c2-a110-471d-a69c-d4ac5b6b9d2b.png)

# Movie App #

<p>
This is a website for random quotes from different films, when you visit main page, website shows one, random quote from the database, with it's image and 
and a title of the movie, from which, quote is taken. Title is hyperlink, if you click it, you visit to the movie page, where all quotes from this specific movie are shown.
    
This is what you can see as a guest user. If you are an admin you can see dashboard and make CRUD operations on Movie and Quote models. Add, create, edit and delete them.
    
Frontend is built with [TailwindCSS](https://tailwindcss.com/) and on backend I used [Laravel](https://laravel.com/).
    
You can change English and Georgian languages on the website, thank to [Spatie Laravel translatable](https://github.com/spatie/laravel-translatable).
*But keep in mind, when you first run app and seed database, data is generated by laravel faker and quotes aren't on Georgian, when you make them, only those quotes will be translatable.*
</p>

<hr>

* [Installation](#installation)
* [Used Tools](#used-tools)
* [Prerequisites](#prerequisites)
* [Database](#database)
* [Development](#development)
* [Resources](#resources)
* [License](#license)





#
### Installation


```sh
git clone https://github.com/RedberryInternship/vakhtangchitauri-movie-quotes.git 
```

```sh
composer install
```

```sh
npm install
```

## Used Tools


* <img src="/public/images/readme/mix.png" height="18" style="position: relative; top: 4px" /> [Laravel Mix](https://laravel-mix.com/) - Compiler
* <img src="./public/images/readme/jwt.png" height="18" style="position: relative; top: 4px" /> [JWT Auth](https://jwt-auth.readthedocs.io/en/develop/) - Authentication 
* <img src="./public/images/readme/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - Translation
* <img src="./public/images/readme/spatie.png" height="19" style="position: relative; top: 4px" /> [Laravel-unique-translation](https://github.com/codezero-be/laravel-unique-translation) - Laravel-unique-translation

#
## Prerequisites

* <img src="./public/images/readme/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@7.3 and up*
* <img src="./public/images/readme/sqlite.png" width="35" style="position: relative; top: 14px" /> *Sqlite@3.36  and up*
* <img src="./public/images/readme/npm.png" width="35" style="position: relative; top: 4px" /> *npm@6 and up*
* <img src="./public/images/readme/composer.png" width="35" style="position: relative; top: 6px" /> *composer@2 and up*

#
## Development

### After cloning the application you need to create your own  environment.

**Run this scripts from the ROOT directory.**

Create .env file
```sh
  cat .env.example > .env
```
Generate unique key.
```sh
  php artisan key:generate
```
Change database from mysql to sqlite
```sh
  sed -i 's/mysql/sqlite/' .env
```
Create sqlite file
```sh
  touch database/database.sqlite
```
Run migration
```sh
  php artisan migrate --seed
```


If you want to see just client side, at this point you already can run application.</br>
But if you want to see admin side and CRUD operations, you need to be admin.</br>

**Before creating admin**


Connect public to resources
```sh
  php artisan storage:link
```
Make driver public
```
sed -i 's/FILESYSTEM_DRIVER=local/FILESYSTEM_DRIVER=public/' .env
```

Create new admin from command line with this command.</br>
***creating admin has this constraints:***</br>
ADMIN NAME MUST BE ADMIN, EMAIL NEEDS TO BE VALID EMAIL AND PASSWORD NEEDS TO BE AT LEAST 5 CHARACTERS
```sh
  php artisan create:admin
```
Run the application
```sh
  php artisan serve
```

## Database

schema made with **https://drawsql.app/**

<img src="https://user-images.githubusercontent.com/71987862/139205914-fdda7f8f-7c9d-4dde-998e-e96a9ae71e50.png" >

See diagram here https://drawsql.app/redberry-9/diagrams/random-movie

## Resources
[Figma Designs](https://www.figma.com/file/IIJOKK5esgM8uK8pM3D59J/Movie-Quotes?node-id=0%3A1)

[Drawsql](https://drawsql.app/)



## License

The Movie App is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT) :smile: :smile:
# movei-quotes
# movei-quotes