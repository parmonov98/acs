<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'father_name', 'passport_serial', 'passport_numbers', 'phone'];
    // 'first_name' => $request->first_name,
    // 'last_name' => $request->first_name,
    // 'father_name' => $request->father_name,
    // 'passport_serial' => $request->passport_serial,
    // 'passport_numbers' => $request->passport_numbers,
    // 'phone' => $request->phone,

    public function appeals()
    {

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
