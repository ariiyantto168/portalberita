<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'comments';
    protected $primaryKey = 'idcomments';
    protected $fillable = [
        'subject'
    ];

    
    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
