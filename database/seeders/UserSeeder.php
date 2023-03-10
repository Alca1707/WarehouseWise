<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouses = Warehouse::select('id')->get();

        User::factory($warehouses->count())->sequence(fn ($sequence) => [ 'warehouse_id' => $warehouses[$sequence->index]->id ])->create();

        User::factory()->create([
            'email' => 'admin@example.com',
            'warehouse_id' => $warehouses[0]->id,
        ]);
    }
}
