<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");

        DB::table("regions")->insert([
            [
                "id"         => 1,
                "name"       => "Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                "id"         => 2,
                "name"       => "Nordeste",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                "id"         => 3,
                "name"       => "Sudeste",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                "id"         => 4,
                "name"       => "Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                "id"         => 5,
                "name"       => "Centro-Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
