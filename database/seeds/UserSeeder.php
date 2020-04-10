<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new User();
        $employee->name = 'Employee Name';
        $employee->email = 'employee@example.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        
        $saler = new User();
        $saler->name = 'Saler Name';
        $saler->email = 'saler@example.com';
        $saler->password = bcrypt('123456');
        $saler->save();

 
        $manager = new User();
        $manager->name = 'Admin Name';
        $manager->email = 'admin@example.com';
        $manager->password = bcrypt('123456');
        $manager->save();

    }
}
