<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Contract extends Model
{
    use HasFactory;
    protected $table = 'contracts';
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
