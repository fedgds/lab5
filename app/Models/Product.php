<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'price',
        'quantity',
        'image',
        'category_id',
        'status'
    ];
    public $timestamps = false;
    public function loadAllCategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function loadDataWithPager()
    {
        // orm
        $query = Product::query()
            ->with('loadAllCategory')
            ->latest('id')
            ->paginate('5');
        // qb
        // join
        

        return $query;
    }
}
