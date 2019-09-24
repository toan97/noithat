<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(Contact_formsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(Invoice_detailsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
