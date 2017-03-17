<?php

namespace App\Http\Controllers;

use App\User;
use Yajra\Datatables\Datatables;

class DatatableController extends Controller
{
    public function getBasic()
    {
        return view('basic');
    }

    public function getBasicData()
    {
        $users = User::select(['id','name','email','created_at','updated_at']);

        return Datatables::of($users)->make();
    }
}
