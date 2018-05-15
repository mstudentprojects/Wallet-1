<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;

//////////////////////////////////
// TODO:
// all methods need to authenticate that the user is the ower of the wallet
//////////////////////////////////

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets = Wallet::where('user_id', auth()->user()->id)->get();
        return view('wallets.index')->with('wallets', $wallets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wallets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wallet::create(['name' => $request->name, 'user_id' => auth()->user()->id]);
        return redirect(route('wallets.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wallet = Wallet::find($id);
        if ($wallet) {
            return view('wallets.show')->with('wallet', $wallet);
        } else {
            return "404, Page Not Found";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wallet = Wallet::find($id);
        return view('wallets.edit')->with('wallet', $wallet);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wallet = Wallet::find($id);
        $wallet->name = $request->name;
        $wallet->save();
        return redirect(route('wallets.show', $wallet->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wallet::find($id)->delete();
        return redirect(route('wallets.index'));
    }
}
