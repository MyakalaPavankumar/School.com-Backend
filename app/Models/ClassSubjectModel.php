<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubjectModel extends Model
{
    use HasFactory;
    protected $table = 'class_subject';
    static public function getSingle($id)
    {
        return Self::find($id);
    }
    static public function getRecord()
    {
        return Self::get();
    }
}
