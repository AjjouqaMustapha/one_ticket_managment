<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerIssues extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_issue',
        'id_employer'
    ];



    public function issue() {
        return $this->belongsTo(Issues::class, 'id_issue', 'id');
    }
    public function employer () {
        return $this->belongsTo(Employer::class, 'id_employer');
    }
    
}
