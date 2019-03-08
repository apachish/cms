<?php
/**
 * Created by PhpStorm.
 * User: shahriar
 * Date: 3/8/19
 * Time: 1:41 AM
 */

namespace Shahriar\Cms;


use Shahriar\Cms\app\Admin;

class Cms
{
    public function listAdmin()
    {
        return Admin::pluck('title');
    }
}