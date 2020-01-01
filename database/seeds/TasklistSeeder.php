<?php

use Illuminate\Database\Seeder;

class TasklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        /*DB::table('tasks')->insert([
            'title' => 'test title 1',
            'content' => 'test content 1'
         ]);
         
        DB::table('tasks')->insert([
            'title' => 'test title 2',
            'content' => 'test content 2'
        ]);
        DB::table('tasks')->insert([
            'title' => 'test title 3',
            'content' => 'test content 3'
        ]);
        */
        
        for($i = 1; $i <= 100; $i++) {
            DB::table('tasks')->insert([
                'title' => 'test title' . $i,
                'content' => 'test content' . $i
            ]);
        }
    }
}
