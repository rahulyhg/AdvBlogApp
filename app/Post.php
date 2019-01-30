<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    // Allowing the mass assignments to these field only (kind of security layers)
    protected $fillable = [
        'title', 'content', 'category_id', 'featured'
    ];

    // Creating a new date stamp in the database
    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
