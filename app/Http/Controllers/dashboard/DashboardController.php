<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Base;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $bases = Base::paginate(10);
        return view('dashboard', [
            'bases' => $bases
        ]);
    }

    public function home()
    {
        $bases = Base::paginate(10);
        return view('list', [
            'bases' => $bases
        ]);
    }
}

