<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder {
    public function run() {
        DB::table("movies")->insert([
            ["name" => "Cars", "classification" => "Animacion", "release_date" => "2006-06-09", "review" => "Kachow!", "season" => null],
            ["name" => "Uncut Gems", "classification" => "Thriller", "release_date" => "2019-12-25", "review" => "Mucha tension.", "season" => null],
            ["name" => "Avengers", "classification" => "Accion", "release_date" => "2012-05-04", "review" => "Reunion epica.", "season" => null],
            ["name" => "The Shining", "classification" => "Terror", "release_date" => "1980-05-23", "review" => "Un clasico.", "season" => null],
            ["name" => "Star Wars IV", "classification" => "Sci-Fi", "release_date" => "1977-05-25", "review" => "El inicio de todo.", "season" => null],
        ]);
    }
}
