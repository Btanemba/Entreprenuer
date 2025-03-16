<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Define the table name if it's not plural of the model name
    protected $table = 'profiles';

    // The attributes that are mass assignable
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'dob', 'nationality', 'address', 'post_code',
        'city', 'state', 'country', 'phone_number', 'university_name', 'start_year',
        'finish_year', 'id_card_front', 'id_card_back'
    ];

    // Define the relationship with User model (One to One)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
