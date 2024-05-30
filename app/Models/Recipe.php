<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';
    protected $primaryKey = 'id_recipe';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}
