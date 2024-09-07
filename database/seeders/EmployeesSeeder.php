<?php

namespace Database\Seeders;

use App\Models\employees;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        employees::factory(200)->create();
    }
}
