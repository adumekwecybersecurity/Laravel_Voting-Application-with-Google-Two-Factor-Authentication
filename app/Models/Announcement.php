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

class Announcement extends Model
{
    use HasFactory;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;



   
/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
     
        'status_ID', 	
        'due_DATE', 	
        'Dept', 		
        'Information', 	
        
        
    ];







   





}
