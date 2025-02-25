<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    use HasFactory;

    protected $table = 'police';
    protected $fillable = [
        'adress',
        'tournnes',
        'id_card',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
