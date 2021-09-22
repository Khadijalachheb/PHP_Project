<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Email;
use App\AAL;
use App\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* $adminemail=new Email();
        $aalWilaya=new AAL();
        $aalWilaya->name="Wilaya Souss Massa";
        $aalWilaya->type="Wilaya";
        $aalWilaya->IP="123.156.34.2";
        $aalWilaya->token="gdYGYhy34VGGFVsqé_çàhbdGH";
        $aalWilaya->save();
        $adminemail->email="khadija@gmail.com";
        $adminemail->aal()->associate($aalWilaya)->save();
        //create roles
        $role1=new Role;
        $role2=new Role;
        $role1->label="Admin_Wilaya";
        $role2->label="Admin_AAL";
        $role1->save();
        $role2->save();*/
    }
}
