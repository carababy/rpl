<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Income;
use App\Product;
use App\Duration;
use App\Gender;
use App\EmploymentStatus;
use Auth;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Income::all();
        return view('admin.loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->name;
        $empstatus = EmploymentStatus::pluck('status', 'id')->prepend(trans('global.app_please_select'));
        $durations = Duration::pluck('duration', 'id')->prepend(trans('global.app_please_select'));
        $products = Product::pluck('product', 'id')->prepend(trans('global.app_please_select'));
        $genders = Gender::all()->pluck('gender', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.loans.create', compact('products', 'user', 'durations', 'empstatus', 'genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $lid = Keygen::numeric(5)->generate();
        //Session::put('lid', $lid);
        $data = request()->validate([
            'borrower' => 'required|not_in:0',
            'g_name' => 'required',
            'g_phone' => 'required',
            'duration' => 'required',
            'bvn' => 'required',
            'loan_amount' => 'required',
            'image1' => 'required',
            'image2' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
