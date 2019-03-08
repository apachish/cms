<?php
/**
 * Created by PhpStorm.
 * User: shahriar
 * Date: 3/8/19
 * Time: 9:57 PM
 */

namespace Shahriar\Cms\app;


use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
  protected  $fillable = ['title'];
}