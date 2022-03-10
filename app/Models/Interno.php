<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interno extends Model
{
    //use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Nombres', 'Interno', 'Email', 'Departamento'];
    /**
     * @var mixed
     */
    private $Nombres;


}
