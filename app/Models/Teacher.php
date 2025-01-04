<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    //
    protected $fillable = ["name", 'email'];

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function tags() 
    {
        return $this->belongsToMany(Tag::class, "teacher_listing_id");
    }
}


// DB::table('teachers')->where('id', 1)->update(['name' => 'Teacher']);
