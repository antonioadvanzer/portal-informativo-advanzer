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
use Mail;
use Carbon\Carbon;
use App\Circular;
use App\ImageCircular;
use App\ElementCarrusel;
use App\Birthday;
use App\LinkCircular;
use App\TypeCircular;
/*use App\BirthdayHistory;
use App\ImageBirthdayHistory;
use App\EventHistory;
use App\ImageEventHistory;*/


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
        $carrusel = ElementCarrusel::where('used',1)->orderBy('location', 'ASC')->get();

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
    {
        //var_dump($request->fullUrl());exit;
    	try{
			$user = Socialite::driver('google')->user();
			
			//echo $user->email;
    		//echo $user->user['domain'];exit;
    		if( ($user->user['domain'] == "advanzer.com") || ($user->user['domain'] == "entuizer.com")){
	    		//$value = session('users', ['email' => $user->email, 'domain' => $user->user['domain']]);

                //var_dump($user->user['domain']);exit;
                Session::put("user",$user->email);
				Session::put("empresa",$user->user['domain']);
	    		//Session::put("user",['email' => $user->email, 'domain' => $user->user['domain']]);
	    		//Session::put('domain',$user->user['domain']);

	    		return redirect()->guest('');
			}else{
				 return redirect()->guest(env('REDIRECT_FAIL_ACCOUNT'));
			}
    	
		}catch (Exception $e) {//exit;
            //return $e;
            return redirect()->guest(env('REDIRECT_FAIL_ACCOUNT'));
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
     * Display a view under construction.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getUnderConstruction()
    { 
       return View::make('help.under_construction');
    }

    /**
     * Display a view with a document.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getDocumentViewer($file)
    { 
        $file = URL::to('documents/'.$file);

       return View::make('help.file',["file" => $file]);
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
     * Display a view Graphical Material.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getBirthday()
    {   
        $calendar = Birthday::all()->first();
        
        return View::make('birthdays.birthday', ['calendar' => $calendar]);
    }

    /**
     * Display a view with specified rules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getMyPerformance()
    { 
       return View::make('main.my_performance');
    }

    /**
     * Display a view with all benefits.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getBenefits()
    { 
       return View::make('main.benefits');
    }

    /**
     * Display a view with specified rules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getSGMM()
    { 
       return View::make('benefits.sgmm');
    }

    /**
     * Display a view with specified rules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getCart()
    { 
       return View::make('benefits.cart');
    }

    /**
     * Display a view with specified rules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getTDU()
    { 
       return View::make('benefits.tdu');
    }

    /**
     * Display a view with specified rules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getStudyTec()
    { 
       return View::make('benefits.study1');
    }
    
    /**
     * Display a view with specified rules.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getStudyUdem()
    { 
       return View::make('benefits.study2');
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
    public function pia_getNews($month=null, $year=null)
    {   
        $news = null;

        if($month != null and $year != null){
            
            $date1 = date("Y-d-m", mktime(0, 0, 0, 1, $month, $year ));
            $date2 = date("Y-d-m", mktime(0, 0, 0, 1, $month+1, $year ));

            $news = Circular::where('type', 1)->where('date', '>=', $date1)->where('date', '<', $date2)->paginate(12);

        }else{

            $month = date("m");
			$year = date("Y");
			
			$date1 = date("Y-d-m", mktime(0, 0, 0, 1, $month, $year ));
            $date2 = date("Y-d-m", mktime(0, 0, 0, 1, $month+1, $year ));

            //$news = Circular::where('type', 1)->orderBy('created_at', 'DESC')->paginate(9);
            $news = Circular::where('type', 1)->where('date', '>=', $date1)->where('date', '<', $date2)->paginate(9);
        }
        
        return View::make('news.news', ['news' => $news, 'months' => $this->months, 'years' => $this->years, 'month' => $this->months[$month], 'year' => $year]);
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

            return View::make('news.circular', ['circular' => $circular, 'images' => $pictures]);
        }else{
            return redirect('noticias');
        }
    }

    /**
     * Display a view with birthdays history.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getBirthdays($month=null, $year=null)
    {  
        // $mytime = Carbon::now();
            //echo $mytime->toDateTimeString();

            //echo strtotime('01/31/2017');
            //echo "<br>".date('Y-m-d',strtotime('01/31/2017'));

            //$st = Carbon::createFromDate("m-d-Y",'01-31-2017');
            //echo "<br>".$st->toDateString();
            //exit;
                //Session::put("user",$user->email);
                //dd(session("empresa"));
                //dd($mounth." ".$year);

        
        
        $birthdays = null;

        if($month != null and $year != null){
            //dd(strtotime($year."-".$mounth));
            //dd(date("Y-m-d",strtotime($year."-".$mounth."-01")));

            //echo date("Y-m-d", mktime(0, 0, 0, 1, $mounth, $year ));
            
            $date1 = date("Y-d-m", mktime(0, 0, 0, 1, $month, $year ));
            $date2 = date("Y-d-m", mktime(0, 0, 0, 1, $month+1, $year ));
            //dd($date1." ".$date2);
            $birthdays = Circular::where('type', 2)->where('date', '>=', $date1)->where('date', '<', $date2)->paginate(12);

            //exit;
        }else{

            $month = date("m");
			$year = date("Y");
			
			$date1 = date("Y-d-m", mktime(0, 0, 0, 1, $month, $year ));
            $date2 = date("Y-d-m", mktime(0, 0, 0, 1, $month+1, $year ));
			
			$birthdays = Circular::where('type', 2)->where('date', '>=', $date1)->where('date', '<', $date2)->paginate(12);

            //$birthdays = Circular::where('type', 2)->orderBy('date', 'DESC')->paginate(12);
        }
    
        return View::make('birthdays.birthdays', ['birthdays' => $birthdays, 'months' => $this->months, 'years' => $this->years, 'month' => $this->months[$month], 'year' => $year]);
    }

    /**
     * Display the specified birthday album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pia_getBirthdayAlbum($id)
    {
        $album = Circular::find($id);

        if(!empty($album)){
            
            $pictures = ImageCircular::where('id_circular',$id)->get();

            return View::make('birthdays.album', ['album' => $album, 'images' => $pictures]);
        }else{
            return redirect('historial_de_cumpleaños');
        }
    }

    /**
     * Display a view with events history.
     *
     * @return \Illuminate\Http\Response
     */
    public function pia_getEvents($month=null, $year=null)
    {   
        $events = null;

        if($month != null and $year != null){
            
            $date1 = date("Y-d-m", mktime(0, 0, 0, 1, $month, $year ));
            $date2 = date("Y-d-m", mktime(0, 0, 0, 1, $month+1, $year ));
            
            $events = Circular::where('type', 3)->where('date', '>=', $date1)->where('date', '<', $date2)->paginate(12);

        }else{
            $month = date("m");
			$year = date("Y");
			
			$date1 = date("Y-d-m", mktime(0, 0, 0, 1, $month, $year ));
            $date2 = date("Y-d-m", mktime(0, 0, 0, 1, $month+1, $year ));
            //$events = Circular::where('type', 3)->orderBy('date', 'DESC')->paginate(12);
            $events = Circular::where('type', 3)->where('date', '>=', $date1)->where('date', '<', $date2)->paginate(12);
            
        }

        return View::make('events.events', ['events' => $events, 'months' => $this->months, 'years' => $this->years, 'month' => $this->months[$month], 'year' => $year]);
    }

    /**
     * Display the specified event album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pia_getEventAlbum($id)
    {
        $album = Circular::find($id);

        if(!empty($album)){
            
            $pictures = ImageCircular::where('id_circular',$id)->get();

            return View::make('events.album', ['album' => $album, 'images' => $pictures]);
        }else{
            return redirect('historial_de_eventos');
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

    // Stack with all email of backoffice
    private $emails = array(
        "m1" => 'micaela.llano@advanzer.com',
        "m2" => 'amira.chavez@advanzer.com',
        "m3" => 'argyris.reyna@advanzer.com',
        "m4" => 'karla.navarro@advanzer.com',
        "m5" => 'martin.garza@advanzer.com',
        "m6" => 'sergio.cardona@advanzer.com',
        "m7" => 'carlos.dominguez@advanzer.com',
        "m8" => 'liliana.carreon@advanzer.com',
        "m9" => 'anaid.montoya@advanzer.com',
        "m10" => 'awendy.uribe@advanzer.com',
        "m11" => 'belinda.lopez@advanzer.com',
        "m12" => 'gabriela.rodriguez@advanzer.com',
        "m13" => 'alejandra.torres@advanzer.com',        
        "m14" => 'juancarlos.zamarron@advanzer.com'
    );

    private $months = array(
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    );

    private $years = array(
        "2017" => "2017"
    );

    /**
     * You can spefified one user to send email.
     *
     * @param 
     * @return \Illuminate\Http\Response
     */
    public function sendMessageBackOffice(Request $request){
        
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            //'to' => "antonio.baez@advanzer.com"
            'to' => $this->emails[$request->input('employed')] 
        );

        //$this->sendMail($this->emails[$request->input('employed')], $data, 'emails.contact');
        try{
            $this->sendMail($data, 'emails.contact');
        }catch(Exception $e){
            echo $e;
        }
        return "Ok";
    }

    /**
     * Allow create a email format to send.
     *
     * @param 
     * @return \Illuminate\Http\Response
     */
    private function sendMail($data, $format){
        //'emails.test'
        //$data = array('name'=>"Advanzer");
        Mail::send($format, ['data' => $data], function ($message) use ($data) {
            $message->from('notificaciones.ch@advanzer.com', 'Portal Informativo Advanzer');
            $message->to($data['to']);
            $message->subject($data['subject']);
        });

    }
}
