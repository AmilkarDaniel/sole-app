<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $fillable = ['full_name', 'birth_date', 'country'];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
