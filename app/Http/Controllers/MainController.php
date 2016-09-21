<?php
/*
    Company: Advanzer S.A de C.V.
    Author: Antonio Báez
*/

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use URL;
use Session;
use Socialite;
use Exception;
use App\Circular;
use App\ImageCircular;
use App\ElementCarrusel;
use Mail;

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
        // Get all new activate to show on carrusel
        $carrusel = ElementCarrusel::where('used',1)->get();

       /*foreach($carrusel as $c){
           var_dump($c->circular); 
       } 
       exit;*/
       return View::make('main.index', ['news' => $carrusel]);
    }
	
	// call a google login account
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
	
	// validate if user is advanzer employed
    public function handleGoogleCallback(Request $request)
    {//var_dump($request->fullUrl());exit;
    	try{
			$user = Socialite::driver('google')->user();
			//var_dump($user->user);exit;
			//echo $user->email;
    		
    		if( ($user->user['domain'] == "advanzer.com") || ($user->user['domain'] == "entuizer.com")){
	    		//$value = session('users', ['email' => $user->email, 'domain' => $user->user['domain']]);
                
	    		Session::put(['users' => $user->email]);
	    		return redirect()->guest('');
			}else{
				 return redirect()->guest('https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://accounts.google.com/o/oauth2/auth?scope%3Dopenid%2Bprofile%2Bemail%26response_type%3Dcode%26redirect_uri%3Dhttp://intranet.advanzer.com:5000/auth/google/callback%26state%3Dwclq8ztvxzbUhWfH4ukxe74Woac2ZUdxzFIRWpiz%26client_id%3D607109204233-2dsjtfpqu9v48mdo31ukt5jkhilpi5h2.apps.googleusercontent.com%26from_login%3D1%26as%3D-1e6b8d5797988cf4&oauth=1&sarp=1&scc=1#identifier');
			}
    	
		}catch (Exception $e) {
            //return $e;
            return redirect()->guest('https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://accounts.google.com/o/oauth2/auth?scope%3Dopenid%2Bprofile%2Bemail%26response_type%3Dcode%26redirect_uri%3Dhttp://intranet.advanzer.com:5000/auth/google/callback%26state%3Dwclq8ztvxzbUhWfH4ukxe74Woac2ZUdxzFIRWpiz%26client_id%3D607109204233-2dsjtfpqu9v48mdo31ukt5jkhilpi5h2.apps.googleusercontent.com%26from_login%3D1%26as%3D-1e6b8d5797988cf4&oauth=1&sarp=1&scc=1#identifier');
        }
	 	 
		 /*try {
            $user = Socialite::driver('google')->user();
            
            $userModel = new User;
            $createdUser = $userModel->addNew($user);
            Auth::loginUsingId($createdUser->id);
            return redirect()->route('home');
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }*/
    
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
    public function pia_getAboutUsAdvanzer()
    { 
       return View::make('main.companyAdvanzer');
    }

    /**
     * Display a view with identity of company.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getAboutUsEntuizer()
    { 
       return View::make('main.companyEntuizer');
    }

    /**
     * Display a view with news.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getNews()
    {   
        $news = Circular::orderBy('created_at', 'DESC')->paginate(9);;
        
        return View::make('main.news', ['news' => $news]);
    }

    /**
     * Display the specified circular.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pia_getCircular($id)
    {
        $circular = Circular::find($id);

        if(!empty($circular)){
            
            $pictures = ImageCircular::where('id_circular',$id)->get();

            return View::make('main.circular', ['circular' => $circular, 'images' => $pictures]);
        }else{
            return redirect('noticias');
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

    /**
     * Allow create a email format to send.
     *
     * @param 
     * @return \Illuminate\Http\Response
     */
    public function sendMail($to, $data){
        
        //$data = array('name'=>"Advanzer");
        Mail::send('emails.test', ['data' => $data], function ($message) use ($data) {
            $message->from('notificaciones.ch@advanzer.com', 'Portal Informativo Advanzer');
            $message->to($to);
        });

    }
}
