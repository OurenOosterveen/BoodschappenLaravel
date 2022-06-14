<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    use HasFactory;

    // protected $guarded = ['id']; mass assign all but - [] for no mass assign
    protected $fillable = ['name', 'number', 'price', 'category_id']; // App\Models\Grocery::create(['name' => 'ketchup', 'number' => 1, 'price' => 0.59]);
    // TODO :: Dit zou een belongsto moeten zijn 
    public function categories() {
        return $this->hasOne(Category::class);
    }

}
