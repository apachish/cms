<?php
/**
 * Created by PhpStorm.
 * User: shahriar
 * Date: 3/8/19
 * Time: 7:28 PM
 */

namespace Shahriar\Cms\app\Http\Controllers;


use Flash;
use Shahriar\Cms\app\Admin;

class AdminPanelController extends BaseController
{

    public function index()
    {
//        return  \Cms::listAdmin();
        Flash::success('This is a success message.');

        $name = 'admin Panel controller injas';

        return view('cms::index',compact('name'));
    }

}