<?php
namespace app\Models;

use Illuminate\Database\Eloquent\Model;
 class Clinet extends Model {
    protected $fillable =[
            'name',
            'age',
            'email',
            'id_national',
    ];
 };

