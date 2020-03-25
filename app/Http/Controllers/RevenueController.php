<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revenue;
class RevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('revenue.index')->with('revenue',Revenue::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('revenue.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         Revenue::create([
            'company_name' => $request->company_name,
            'invoice_amt' => $request->invoice_amt,
        ]);

        $request->session()->flash('success', 'Succesfully Created The Revenue');
        return redirect(route('revenue.index'));
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
        return view('revenue.edit')->with('revenue',Revenue::find($id));
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
        $revenue=Revenue::find($id);
        $revenue->company_name=$request->company_name;
        $revenue->invoice_amt=$request->invoice_amt;
        $revenue->save();
        return redirect(route('revenue.index'));
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
        $revenue=Revenue::find($id);
        $revenue->delete();
         return redirect(route('revenue.index'));   
    }
}
