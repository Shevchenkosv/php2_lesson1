<?php

use Geekbrains\LevelTwo\Blog\User;
use Geekbrains\LevelTwo\Person\Name;
use Geekbrains\LevelTwo\Blog\Post;
use Geekbrains\LevelTwo\Blog\Comment;


include __DIR__ . "/vendor/autoload.php";

/*spl_autoload_register('load');

function load($className)
{
    $file =$className . "php";
    $file = str_replace("\\", "/", $file);
    $file = str_replace("Geekbrains/LevelTwo/", "src/", $file);
    if(file_exists($file)){
        include $file;
    }
}*/

$faker = Faker\Factory::create('ru_RU');

$name = new Name(
    $faker->firstName(),
    $faker->lastName()
);

$user = new User(
    $faker->randomDigitNotNull(),
    $name,
    $faker->sentence(5)
);

$route = $argv[1] ?? null;

switch ($route) {
    case "user":
        echo $user;
        break;
    case "post":
        $post = new Post(
            $faker->randomDigitNotNull(),
            $user,
            $faker->realText(rand(50,100))
        );
        echo $post;
        break;
    case "comment":
        $post = new Post(
            $faker->randomDigitNotNull(),
            $user,
            $faker->realText(rand(50,100))
        );
        $comment = new Comment(
            $faker->randomDigitNotNull(),
            $user,
            $post,
            $faker->realText(rand(50,100))
        );
        echo $comment;
        break;
    default:
        echo "error try user post comment parametr";
}









