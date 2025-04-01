<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $types = ['Html', 'Css', 'Javascript', 'Php', 'Laravel'];
        foreach ($types as $type) {
            if (!Type::where('name', $type)->exists()) {
                $newType = new Type();
                $newType->name = $type;
                $newType->save();
            }
        }
    }
}
