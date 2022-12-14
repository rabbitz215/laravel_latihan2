<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_birth', 'gender', 'address', 'major_id', 'image'];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }
}
