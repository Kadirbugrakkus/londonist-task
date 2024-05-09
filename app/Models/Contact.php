<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contacts';
    protected $fillable = [
        'designation_id',
        'first_name',
        'last_name',
        'country_id',
        'phone',
        'email',
        'meeting_date',
        'budget',
        'bedrooms_count',
    ];


    protected $casts = [
        'meeting_date' => 'datetime:Y-m-d',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
    ];



    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function designation()
    {
        return $this->hasOne(User::class, 'id', 'designation_id');
    }
}
