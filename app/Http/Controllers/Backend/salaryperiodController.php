<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalaryPeriod;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SalaryperiodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaryperiods = SalaryPeriod::get();
        return view('backend.salaryperiod.index',compact('salaryperiods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.salaryperiod.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id

        ];

        SalaryPeriod::create($data);
        Session::flash('create');
        return redirect()->route('salaryperiod.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salaryperiod = SalaryPeriod::firstWhere('id',$id);
        return view('backend.salaryperiod.show', compact('salaryperiod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salaryperiod = SalaryPeriod::firstWhere('id',$id);
        return view('backend.salaryperiod.edit', compact('salaryperiod'));
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
        $request->validate([
            'name' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id

        ];

        SalaryPeriod::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('salaryperiod.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalaryPeriod::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('salaryperiod.index');
    }
}
