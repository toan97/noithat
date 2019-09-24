<?php

use Illuminate\Database\Seeder;

class Invoice_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Invoice_detail::class, 50)->create();
    }
}
