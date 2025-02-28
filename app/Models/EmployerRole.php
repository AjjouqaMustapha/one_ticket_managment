<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerRole extends Model
{
    use HasFactory;
    protected $fillable = [
        'role',
    ];


    public function employer (){
        return $this->hasMany(Employer::class, 'role');
    }
}
