<?php

namespace App\Http\Controllers;

use App\Models\Debtor;
use App\Models\User;
use Illuminate\Http\Request;

class DebtorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.index')->with('debtors',Debtor::all());
    }

    public function openAccount()
    {
        return view('user.accounts')->with('users',User::all());
    }

    public function getDetail($id)
    {
        return view('user.debtor.index')->with('debtors',Debtor::where('id',$id)->first());

    }
    public function changeUserRole($id)
    {
        logger($id);
        return redirect()->back();
        // return view('user.debtor.index')->with('debtors',Debtor::where('id',$id)->first());

    }
    public function deleteUser($id)
    {
        // return view('user.debtor.index')->with('debtors',Debtor::where('id',$id)->first());

    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function show(Debtor $debtor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function edit(Debtor $debtor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Debtor $debtor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Debtor $debtor)
    {
        //
    }
}
