<?php
/**
 * Created by PhpStorm.
 * User: rn
 * Date: 2/5/16
 * Time: 10:08 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['name', 'email', 'message'];
}