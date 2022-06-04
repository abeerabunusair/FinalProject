<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'image',
        'categories_id',
        'quantity',
        'excerpt',
        'created_at',
       ' updated_at'

    ];


    public function category()
    {

        return $this->belongsTo(category::class);
    }
}
