<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //protected $fillable = ['title','excerpt','body','id'];


    public function getRouteKeyName()
    {
        //return parent::getRouteKeyName(); // TODO: Change the autogenerated stub
        return 'slug';
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
