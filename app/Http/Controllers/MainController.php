<?php
/*
    Company: Advanzer S.A de C.V.
    Author: Antonio Báez
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
     * Display a view Attracting Talent.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getAttractingTalent()
    { 
       return View::make('politics.attracting_talent');
    }

    /**
     * Display a view Annual Bonus.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getAnnualBonus()
    { 
       return View::make('politics.annual_bonus');
    }

    /**
     * Display a view Letters And Constancies.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getLettersAndConstancies()
    {
        return View::make('politics.letters_and_constancies');
    }

    /**
     * Display a view Certifications And Courses.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getCertificationsAndCourses()
    {
        return View::make('politics.certifications_and_courses');
    }

    /**
     * Display a view Dress Code.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getDressCode()
    {
        return View::make('politics.dress_code');
    }

    /**
     * Display a view Internal Comunication.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getInternalComunication()
    {
        return View::make('politics.internal_comunication');
    }

    /**
     * Display a view Free Days.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getFreeDays()
    {
        return View::make('politics.free_days');
    }

    /**
     * Display a view Schedules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getSchedules()
    {
        return View::make('politics.schedules');
    }

    /**
     * Display a view Absences.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getAbsences()
    {
        return View::make('politics.absences');
    }

    /**
     * Display a view Holidays.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getHolidays()
    {
        return View::make('politics.holidays');
    }

    /**
     * Display a view Travel Expenses.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getTravelExpenses()
    {
        return View::make('politics.travel_expenses');
    }

    /**
     * Display a view Graphical Material.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getGraphicalMaterial()
    {
        return View::make('main.graphical_material');
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
     * Display a view with identity of company.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getAboutUs()
    { 
       return View::make('main.company');
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
