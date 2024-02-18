<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * @mixin \Eloquent
 */
class Greeting extends Model
{
    use HasFactory;

    protected $table = 'greeting';

    protected $guarded = ['id'];
  

    /**
     * Validation rules for this model
     */
    static public $rules = [
        'title'        => 'required|min:3|max:191',
        'subtitle'      => 'required|min:3|max:191',
        'message' => 'required|min:3|max:2000',
        'buttonlink'    => 'nullable',
        'photo'     => 'max:6000|mimes:jpg,jpeg,png,bmp',
    ];

    static public $messages = [];
    
}
