<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\TestModel;
use Validator;
use Input;
use Redirect;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$testInfo= new TestModel();
        
        //$testInfo->addInfo('2015-01-25','2017-01-25','0006','Off');
        /*$addInfo = new TestModel();
        $addInfo->Mfg='2015-01-25';
        $addInfo->ExpD='2016-01-25';
        $addInfo->Batch='0006';
        $addInfo->Status='Off';
        $addInfo->save();*/

        /*$testInfo->viewInfo();
        $users= DB::table('product_detail')->get();*/
        return view('test');
        //->withUsers($users);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=array(
        'username' => 'required',
        'password' => 'required|min:8',
        'password-repeat' => 'required|same:password'
        );
        $validator= Validator::make(Input::all(),$rules);
        if($validator->fails())
            //dd($validator->messages());
        //dd('done');
        return Redirect::to('/store')->withInput()->withErrors($validator->messages());
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
