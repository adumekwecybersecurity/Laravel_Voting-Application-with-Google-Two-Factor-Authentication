<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Nominee extends Model
{
    use HasFactory;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;



    public function user(){
        return $this->belongsTo('App\Models\User');
    }
/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
     
        'stud_ID', 	
        'Dept', 	
        'firstName', 		
        'midName', 	
        'surName',	
        'DOB', 	
        'gender', 	
        'nominee_ID', 	
        'position', 	
        'post_ID', 	
        'post_Memo', 	
        'phone', 	
        'email', 	
        'Address1', 	
        'Address2', 	
        'profile_photo_path',
        

        
        
    ];







    public function getNameAttribute()
    {
        return $this->surName.' '.$this->midName.' '.$this->firstName; 
    }





}
