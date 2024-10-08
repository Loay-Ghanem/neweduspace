<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'image',
       ];
       public function subject(){
        return $this->hasMany(Subject::class);
       }
       public function users(){
        return $this->belongsToMany(User::class);
}
}