<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Irvan Kadhafi';
        $user->email = 'irvan.kadhafi.tif18@polban.ac.id';
        $user->password = bcrypt('irvan456');
        $user->tipe = 1 ; //1:admin,0:author
        $user->save();
    }
}
