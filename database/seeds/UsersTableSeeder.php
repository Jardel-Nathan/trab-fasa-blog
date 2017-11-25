<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(blog\User::class, 1)
            ->states('admin')
            ->create(
                [
                    'name'=>'admin',
                    'email'=>'admin@admin',
                    'password'=>bcrypt('admin')

                ]
            );

        factory(blog\User::class, 1)
            ->create(
                [
                    'name'=>'Paulo César',
                    'email'=>'usuario@usuario',
                    'password'=>bcrypt('123456')

                ]);

    }
}
