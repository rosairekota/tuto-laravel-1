<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Faculity;
class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'gender',
    ];

    public function faculity(){
        return $this->belongsTo(Faculity::class);
    }
}
