<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    
    protected $table ='faculitys';

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
