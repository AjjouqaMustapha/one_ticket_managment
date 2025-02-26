<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'user_id', 'police_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class,'id_card', 'id_card');
    }

    public function police()
    {
        return $this->belongsTo(Police::class);
    }

}
