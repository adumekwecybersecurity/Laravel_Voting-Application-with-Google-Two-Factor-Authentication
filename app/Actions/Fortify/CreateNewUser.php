<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [


          
            'stud_ID' => ['required', 'string', 'max:255', 'unique:users' ],
            'firstName' => ['required', 'string', 'max:255', ],
            'midName' => ['required', 'string', 'max:255', ],
            'surName' => ['required', 'string', 'max:255', ],
            'userName' => ['required', 'string', 'max:255', 'unique:users' ],
            'DOB' => ['required', 'string', 'max:255', ],
            'gender' => ['required', 'string', 'max:255', ],
            'Address1' => ['required', 'string', 'max:255', ],
            'Address2' => ['required', 'string', 'max:255', ],
            'Dept' => ['required', 'string', 'max:255', ],
		    'phone' => ['required', 'string', 'max:255', 'unique:users' ],  
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([

           
            'stud_ID' =>$input['stud_ID'],
            'firstName' =>$input['firstName'],
            'midName' =>$input['midName'],
            'surName' =>$input['surName'],
            'userName' =>$input['userName'],
            'DOB' =>$input['DOB'],
            'gender' =>$input['gender'],
            'Address1' =>$input['Address1'],
            'Address2' =>$input['Address2'],
            'Dept' =>$input['Dept'],
            'phone' =>$input['phone'],
            'email' =>$input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

