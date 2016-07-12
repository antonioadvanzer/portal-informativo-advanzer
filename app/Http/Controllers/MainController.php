<?php
/*
Company: Advanzer S.A de C.V.
Author: Antonio Baez
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use URL;

class MainController extends Controller
{   
    //protected $layout = 'layouts/main';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       return View::make('main.index');
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
        //
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
     * Display a view with all politics.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getPolitics()
    { 
       return View::make('main.politics');
    }

    /**
     * Display a view with Attracting Talent.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getAttractingTalent()
    { 
       return View::make('politics.attracting_talent');
    }

    /**
     * Display a view with specified rules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getSGMM()
    { 
       return View::make('main.sgmm');
    }

    /**
     * Display a view with contacts.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getContact()
    { 
       return View::make('main.contact');
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