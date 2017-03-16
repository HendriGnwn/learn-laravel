<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	
	protected $dates = ['deleted_at'];
	
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content'];

    
}
