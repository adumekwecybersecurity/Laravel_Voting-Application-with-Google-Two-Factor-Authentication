<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
   /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayData = [



            [
                'staff_ID'=>'staff01',
                'firstName'=>'surizal',
                'midName'=>'bin',
                'surName'=>'Nazeri',
                'userName'=>'surizal2028',
                'DOB'=>'14-03-2022',
                'gender'=>'male',
                'Address1'=>'Uniten Admin block Putrajaya malaysia CCI',
                'Address2'=>'Uniten Staff Building Putrajaya malaysia CCI',
                'phone'=>'+60123456788',
                'email'=>'surizal@uniten.edu.my',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password : is password : '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
                'remember_token' => Str::random(10),
                'access_grant'=>'staff',
            ],





            [
            'staff_ID'=>'staff02',
            'firstName'=>'Rajina',
            'midName'=>'binti',
            'surName'=>'M A Raj Mohamed',
            'userName'=>'rajina2022',
            'DOB'=>'14-03-2022',
            'gender'=>'female',
            'Address1'=>'Uniten Admin block Putrajaya',
            'Address2'=>'Uniten Staff Building Putrajaya',
	        'phone'=>'+60123456789',
            'email'=>'rajina@uniten.edu.my',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password : is password : '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
            'remember_token' => Str::random(10),
            'access_grant'=>'staff',
            ],


        [
            'electoral_ID'=>'elect01',
            'firstName'=>'boggie',
            'midName'=>'man',
            'surName'=>'alive',
            'userName'=>'boogie101',
            'DOB'=>'14-03-2022',
            'gender'=>'male',
            'Address1'=>'123 malaysia menara building',
            'Address2'=>'870AD Building Putrajaya malaysia CCI class Hall',
	        'phone'=>'+60111156700',
            'email'=>'boogieman@uniten.edu.my',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password : is password : '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
            'remember_token' => Str::random(10),
            'access_grant'=>'electoral',
        ],




         
        ];

        foreach($arrayData as $value){
            Staff::create($value);
        }
    }

}



