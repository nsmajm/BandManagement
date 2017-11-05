<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\accounts;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(AccountRequest $request)
    {
        $user = new accounts();
        $user->firstname    = $request->FirstName;
        $user->lastname     = $request->LastName;
        $user->username     = $request->UserName;
        $user->email        = $request->Email;
        $user->password     = $request->Password;
        $user->joindate     = Carbon::now('Asia/Dhaka');
        $user->dob          =$request->Dob;

        $user->save();
        return redirect()->route('login.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = DB::table('accounts')->where('userid', $id)->first();

        return view('User.details')->with('account', $account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = DB::table('accounts')
            ->where('userid', $id)
            ->first();

        return view('User.update')->with('account', $account);
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
        $id = $request->accountId;
        $acc = accounts::find($id);

        $acc->accName = $request->accountName;

        $acc->save();
        //return redirect()->route('account.index');
        return redirect()->route('account.show', $acc->accId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}
