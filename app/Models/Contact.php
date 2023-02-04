<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'categories_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id','id');
    }
}
