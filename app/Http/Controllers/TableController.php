<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery_1;
use App\Models\Battery_2;
use App\Models\Battery_3;
use App\Models\Battery_4;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table1page = Battery_1::orderBy('timestamp', 'desc')->paginate(10);
        $table2page = Battery_2::orderBy('timestamp', 'desc')->paginate(10);
        $table3page = Battery_3::orderBy('timestamp', 'desc')->paginate(10);
        $table4page = Battery_4::orderBy('timestamp', 'desc')->paginate(10);

        return view('pages.table.table', compact('table1page', 'table2page', 'table3page', 'table4page')); 
    }
}
