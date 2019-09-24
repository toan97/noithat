<?php

use Illuminate\Database\Seeder;

class Contact_formsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Contact_form::class, 50)->create();
    }
}
