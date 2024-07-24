<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
        'status'
    ];
    public $timestamps = false;
    public function loadAllCate(){
        $query = DB::table($this->table)
            ->select($this->fillable)
            ->get();
        return $query;
    }
    public function loadDataWithPager()
    {
        // orm
        $query = Category::query()
            ->with('loadAllCategory')
            ->latest('id')
            ->paginate('5');
        // qb
        // join
    
        return $query;
    }
}
