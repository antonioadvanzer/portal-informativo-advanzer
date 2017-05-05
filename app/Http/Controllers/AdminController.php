<?php
/*
    Company: Advanzer S.A de C.V.
    Author: Antonio Báez
*/
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use URL;
use Auth;
use Hash;
use DB;
use File;
use App\User;
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

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('admin.main');
    }

    /**
     * Display a Log In Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminLogIn()
    {   //$this->middleware('auth');
        if (Auth::check()){ 
            return redirect('advanzer-admin');
        }else{
            return View::make('admin.login');
        }
    }

    /**
     * Start session.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminStartSession(Request $request)
    {
        $user = array(
            'name' => $request->input('login__username'),
            'password' => $request->input('login__password')
        );
        
        if(Auth::attempt($user)) {
            return redirect('advanzer-admin');
        }else{
            // authentication failure! lets go back to the login page
            return redirect('advanzer-admin/iniciar_sesion')
            ->with('flash_error', 'El usuario/contraseña son incorrectos.')
            ->withInput();
        }
    }

    /**
     * Close session.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminCloseSession()
    {
        Auth::logout();

        return redirect('advanzer-admin/iniciar_sesion');

    }

    /**
     * Display users table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminGetUsers()
    {   
        $users = User::all();
        return View::make('admin.users.users', ['users' => $users]);
    }
    
    /**
     * Display news table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminGetNews()
    {   
        $news = Circular::where('type',1)->get();
        return View::make('admin.news.news', ['news' => $news]);
    }

    /**
     * Display elements of carrusel table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminGetElementsCarrusel()
    {   
        //$carrusel = ElementCarrusel::where('used',1)->orderBy('location', 'ASC')->get();
        //return View::make('admin.carrusel.elements', ['elements' => $carrusel]);
        return View::make('admin.carrusel.elements');
    }

    /**
     * Get elements of carrusel table.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function adminGetElementsCarruselArray()
    {   
        $carrusel = ElementCarrusel::where('used',1)->orderBy('location', 'ASC')->get();
        
        $elements = array();

        foreach($carrusel as $c){
            array_push($elements, ['id' => $c->id, 'location' => $c->location, 'name' => $c->circular()->first()->getType()->first()->name, 'title' => $c->circular()->first()->title]);
        }

        return json_encode($elements);
    }

    /**
     * Display form to change picture of mural mounth.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminCalendarBirthday()
    {   
        $calendar = Birthday::all()->first();
        return View::make('admin.calendar.birthday', ['calendar' => $calendar]);
    }

    /**
     * Display birthdays table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminGetBirthdays()
    {   
        $birthdays = Circular::where('type',2)->get();
        return View::make('admin.calendar.birthdays_history', ['birthdays' => $birthdays]);
    }

    /**
     * Display events table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminGetEvents()
    {   
        $events = Circular::where('type',3)->get();
        return View::make('admin.events.events_history', ['events' => $events]);
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
     * Display the form form creating new user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminNewUserForm()
    {   
        return View::make('admin.users.new_user');
    }

    /**
     * Display the form form creating new circular.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminNewCircularForm()
    {   
        return View::make('admin.news.new_circular');
    }

    /**
     * Display the form form creating new album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminNewAlbumForm()
    {   
        return View::make('admin.calendar.new_album');
    }

    /**
     * Display the form form creating new event album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminNewAlbumEventForm()
    {   
        return View::make('admin.events.new_album');
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
     * Save new user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminSaveNewUser(Request $request)
    {   
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        return "success"; 
    }
    
    private $urlNews = "img/noticias";
    private $urlMural = "img/cumpleaños";
    private $urlBirthday = "img/historial de cumpleanos";
    private $urlEvent = "img/historial de eventos";
    
    /**
     * Save new circular.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminSaveNewCircular(Request $request)
    {   
        DB::beginTransaction();

        // Store circular saved
        try{
            $circular = Circular::create([
                            'title' => $request->get('title'),
                            'summary' => $request->get('summary'),
                            'content' => $request->get('content'),
                            'date' => date('Y-m-d',strtotime($request->get('date'))),
                            'type' => 1
                        ]);
        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        // getting all of the post data
        $files = $request->file('file');

        // Making counting of uploaded images
        $file_count = count($files);

        // start count how many uploaded
        $uploadcount = 0;
        
        $destinationPath = $this->urlNews."/".AdminController::createPathFormat($request->get('title'));
        File::makeDirectory($destinationPath, 0777);

        foreach($files as $file) {

        //$rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
        //$validator = Validator::make(array('file'=> $file), $rules);

            /*if($validator->passes()){
                $destinationPath = 'uploads';
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $uploadcount ++;
            }*/
        
            try{

                if ($file !== null) {
                
                //echo $file->getClientOriginalName();
                //dd($file);exit;

                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;

                    ImageCircular::create([
                        'path' => $destinationPath."/".$filename,
                        'id_circular' => $circular->id
                    ]); 
                }
               
            }catch(\Exception $e){
                    echo $e;
                    DB::rollBack();
                    exit;
            }
            
        }

        /*if($uploadcount == $file_count){
            Session::flash('success', 'Upload successfully'); 
            return Redirect::to('upload');
        }else {
            return Redirect::to('upload')->withInput()->withErrors($validator);
        }*/

        try{

            $ic = ImageCircular::where('id_circular',$circular->id)->get()->first();

            $carsl = ElementCarrusel::where('used',1)->count();

            ElementCarrusel::create([
                'id_circular' => $circular->id,
                'id_img_circular' => $ic->id,
                'location' => $carsl+1,
                'used' => ($request->get('public') ? 1 : 0 )
            ]);

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        try{
            // getting link
            $cont = 0;
            while(($link = $request->get('url'.$cont)) != null){
                LinkCircular::create([
                    'url' =>$link,
                    'description' => $request->get('url-description'.$cont),
                    'id_circular' => $circular->id
                ]);
                $cont++;
            }
        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        DB::commit();

        echo "success"; 
    }

    /**
     * Save new album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminSaveNewAlbum(Request $request)
    {   //echo date("Y-m-d");
        //echo str_replace('/', '-', $request->get('date')); exit;
        //echo date("m-d-Y", str_replace('/', '-', $request->get('date'))); exit;
        //echo date("Y-m-d",str_replace('/', '-', $request->get('date'))); exit;

        //echo strtotime('01/31/2017');
        //echo "<br>".date('Y-m-d',strtotime('01/31/2017'));

        DB::beginTransaction();

        // Store circular saved
        try{
            $birthday = Circular::create([
                            'title' => $request->get('title'),
                            'summary' => $request->get('summary'),
                            'content' => $request->get('content'),
                            //'date' => $request->get('date')
                            //'date' => str_replace('/', '-', $request->get('date'))
                            'date' => date('Y-m-d',strtotime($request->get('date'))),
                            'type' => 2
                        ]);
        }catch(\Exception $e){
            DB::rollBack();
            dd($e);
        }

        // getting all of the post data
        $files = $request->file('file');

        // Making counting of uploaded images
        $file_count = count($files);

        // start count how many uploaded
        $uploadcount = 0;
        
        //$destinationPath = $this->urlBirthday."/".$request->get('title');
        $destinationPath = $this->urlBirthday."/".AdminController::createPathFormat($request->get('title'));
        File::makeDirectory($destinationPath, 0777);

        foreach($files as $file) {
        
            try{

                if ($file !== null) {

                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;

                    ImageCircular::create([
                        'path' => $destinationPath."/".$filename,
                        'id_circular' => $birthday->id
                    ]); 
                }
               
            }catch(\Exception $e){
                    DB::rollBack();
                    dd($e);
            }
            
        }

        try{

            $ic = ImageCircular::where('id_circular',$birthday->id)->get()->first();

            $carsl = ElementCarrusel::where('used',1)->count();

            ElementCarrusel::create([
                'id_circular' => $birthday->id,
                'id_img_circular' => $ic->id,
                'location' => $carsl+1,
                'used' => ($request->get('public') ? 1 : 0 )
            ]);

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        DB::commit();

        echo "success"; 
    }

    /**
     * Save new album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminSaveNewAlbumEvent(Request $request)
    {   
        DB::beginTransaction();

        // Store circular saved
        try{
            $event = Circular::create([
                            'title' => $request->get('title'),
                            'summary' => $request->get('summary'),
                            'content' => ($request->get('content')),
                            'date' => date('Y-m-d',strtotime($request->get('date'))),
                            'type' => 3
                        ]);
        }catch(\Exception $e){
            DB::rollBack();
            dd($e);
        }

        // getting all of the post data
        $files = $request->file('file');

        // Making counting of uploaded images
        $file_count = count($files);

        // start count how many uploaded
        $uploadcount = 0;
        
        //$destinationPath = $this->urlEvent."/".$request->get('title');
        $destinationPath = $this->urlEvent."/".AdminController::createPathFormat($request->get('title'));
        File::makeDirectory($destinationPath, 0777);

        foreach($files as $file) {
        
            try{

                if ($file !== null) {

                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;

                    ImageCircular::create([
                        'path' => $destinationPath."/".$filename,
                        'id_circular' => $event->id
                    ]); 
                }
               
            }catch(\Exception $e){
                    DB::rollBack();
                    dd($e);
            }
            
        }

        try{

            $ic = ImageCircular::where('id_circular',$event->id)->get()->first();
            
            $carsl = ElementCarrusel::where('used',1)->count();
            
            ElementCarrusel::create([
                'id_circular' => $event->id,
                'id_img_circular' => $ic->id,
                'location' => $carsl+1,
                'used' => ($request->get('public') ? 1 : 0 )
            ]);

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        DB::commit();

        echo "success"; 
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
     * Show the form for editing the specified Cirucular.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminEditCircular($id)
    {
        $circular = Circular::find($id);

        if(!empty($circular)){
            
            $pictures = ImageCircular::where('id_circular',$id)->get();
            $links = LinkCircular::where('id_circular',$id)->get();

            return View::make('admin.news.update_circular', ['circular' => $circular, 'pictures' => $pictures, 'links' => $links]);
        }else{
            return redirect('advanzer-admin/noticias');
        }
    }

    /**
     * Show the form for editing the specified Álbum.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminEditAlbum($id)
    {
        $album = Circular::find($id);

        if(!empty($album)){
            
            $pictures = ImageCircular::where('id_circular',$id)->get();

            return View::make('admin.calendar.update_album', ['album' => $album, 'pictures' => $pictures]);
        }else{
            return redirect('advanzer-admin/historial_de_noticias');
        }
    }

    /**
     * Show the form for editing the specified Álbum Event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminEditAlbumEvent($id)
    {
        $album = Circular::find($id);

        if(!empty($album)){
            
            $pictures = ImageCircular::where('id_circular',$id)->get();

            return View::make('admin.events.update_album', ['album' => $album, 'pictures' => $pictures]);
        }else{
            return redirect('advanzer-admin/historial_de_eventos');
        }
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
     * Update the specified circular in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminUpdateCircular(Request $request)
    {
        DB::beginTransaction();

        try{

            Circular::where('id', $request->get('id'))
                ->update([
                    'title' => $request->get('title'),
                    'summary' => $request->get('summary'),
                    'content' => $request->get('content'),
                    'date' => date('Y-m-d',strtotime($request->get('date')))
                ]);
         
            if($imgs = $request->get('imgs')){

                // creating variable to store conditions
                $ifimg = array();
                
                foreach($imgs as $img){
                    $ifimg[] = ['id', "!=", $img];
                }

                // if user deleted any pictures
                ImageCircular::where('id_circular', $request->get('id'))
                    ->where($ifimg)
                    ->delete();
            
            }

            // getting all of the post data
            $files = $request->file('file');

            // Making counting of uploaded images
            $file_count = count($files);

            // start count how many uploaded
            $uploadcount = 0;

            $destinationPath = $this->urlNews."/".$request->get('title');
            if(!is_dir($destinationPath)){
                $directory = File::makeDirectory($destinationPath, 0777);
            }
            
            foreach($files as $file) {

                    if ($file !== null) {

                        //$destinationPath = $this->urlNews;
                        
                        $filename = $file->getClientOriginalName();
                        $upload_success = $file->move($destinationPath, $filename);
                        $uploadcount++;

                        ImageCircular::create([
                            'path' => $destinationPath."/".$filename,
                            'id_circular' => $request->get('id')
                        ]); 
                    }
            }

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        try{

            $ic = ImageCircular::where('id_circular',$request->get('id'))->get()->first();

            ElementCarrusel::where('id_circular', $request->get('id'))
                    ->update(['id_img_circular' => $ic->id]);

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        try{
            
            // getting link
            $cont = $request->get('cant-links');

            LinkCircular::where('id_circular', $request->get('id'))->delete();

            /*while(($link = $request->get('url'.$cont)) != null){
                LinkCircular::create([
                    'url' =>$link,
                    'description' => $request->get('url-description'.$cont),
                    'id_circular' => $request->get('id')
                ]);
                $cont--;
            }*/

            for($i = intval($cont); $i>0; $i--){
                $link = $request->get('url'.$i);
                //dd("aaa");
                if($link != null){//
                    //dd("bbb");
                    LinkCircular::create([
                        'url' =>$link,
                        'description' => $request->get('url-description'.$i),
                        'id_circular' => $request->get('id')
                    ]);
                }
            }

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }
        
        DB::commit();

        echo "success";
    }

    /**
     * Update the specified album in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminUpdateAlbum(Request $request)
    {
        DB::beginTransaction();

        try{

            Circular::where('id', $request->get('id'))
                ->update([
                    'title' => $request->get('title'),
                    'summary' => $request->get('summary'),
                    'content' => $request->get('content'),
                    'date' => date('Y-m-d',strtotime($request->get('date')))
                ]);
            
            if($imgs = $request->get('imgs')){

                // creating variable to store conditions
                $ifimg = array();
                
                foreach($imgs as $img){
                    $ifimg[] = ['id', "!=", $img];
                }

                // if user deleted any pictures
                ImageCircular::where('id_circular', $request->get('id'))
                    ->where($ifimg)
                    ->delete();
            
            }

            // getting all of the post data
            $files = $request->file('file');

            // Making counting of uploaded images
            $file_count = count($files);

            // start count how many uploaded
            $uploadcount = 0;

            $destinationPath = $this->urlBirthday."/".$request->get('title');
            if(!is_dir($destinationPath)){
                $directory = File::makeDirectory($destinationPath, 0777);
            }
            
            foreach($files as $file) {

                    if ($file !== null) {

                        //$destinationPath = $this->urlNews;
                        
                        $filename = $file->getClientOriginalName();
                        $upload_success = $file->move($destinationPath, $filename);
                        $uploadcount ++;

                        ImageCircular::create([
                            'path' => $destinationPath."/".$filename,
                            'id_circular' => $request->get('id')
                        ]); 
                    }
            }

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        try{

            $ic = ImageCircular::where('id_circular',$request->get('id'))->get()->first();

            ElementCarrusel::where('id_circular', $request->get('id'))
                    ->update(['id_img_circular' => $ic->id]);

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }
        
        DB::commit();

        echo "success";
    }

    /**
     * Update the specified album in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminUpdateAlbumEvent(Request $request)
    {
        DB::beginTransaction();

        try{

            Circular::where('id', $request->get('id'))
                ->update([
                    'title' => $request->get('title'),
                    'summary' => $request->get('summary'),
                    'content' => $request->get('content'),
                    'date' => date('Y-m-d',strtotime($request->get('date')))
                ]);
            
            if($imgs = $request->get('imgs')){

                // creating variable to store conditions
                $ifimg = array();
                
                foreach($imgs as $img){
                    $ifimg[] = ['id', "!=", $img];
                }

                // if user deleted any pictures
                ImageCircular::where('id_circular', $request->get('id'))
                    ->where($ifimg)
                    ->delete();
            
            }

            // getting all of the post data
            $files = $request->file('file');

            // Making counting of uploaded images
            $file_count = count($files);

            // start count how many uploaded
            $uploadcount = 0;

            $destinationPath = $this->urlEvent."/".$request->get('title');
            if(!is_dir($destinationPath)){
                $directory = File::makeDirectory($destinationPath, 0777);
            }
            
            foreach($files as $file) {

                    if ($file !== null) {

                        //$destinationPath = $this->urlNews;
                        
                        $filename = $file->getClientOriginalName();
                        $upload_success = $file->move($destinationPath, $filename);
                        $uploadcount ++;

                        ImageCircular::create([
                            'path' => $destinationPath."/".$filename,
                            'id_circular' => $request->get('id')
                        ]); 
                    }
            }

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }

        try{

            $ic = ImageCircular::where('id_circular',$request->get('id'))->get()->first();

            ElementCarrusel::where('id_circular', $request->get('id'))
                    ->update(['id_img_circular' => $ic->id]);

        }catch(\Exception $e){
            echo $e;
            DB::rollBack();
            exit;
        }
        
        DB::commit();

        echo "success";
    }

    /**
     * Allow edit status of specified circular on carrusel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminChangeCircular($id)
    { 
        $carsl = ElementCarrusel::where('used',1)->count();

        //dd(count($carrusel)+1);

        $ec = ElementCarrusel::where('id_circular',$id)->get()->first();
        
        //ElementCarrusel::where('id_circular',$id)->update(["used" => ( $ec->used ? 0 : 1 ), "location" => ($ec->used ? 0 : count($carrusel)+1) ]);
//dd($ec);
        $use = array();

        if($ec->used){
             $use = ["used" => 0, "location" => 0];
        }else{
             $use = ["used" => 1, "location" => $carsl+1];
        }

        ElementCarrusel::where('id_circular',$id)->update($use);

        $carrusel = ElementCarrusel::where('used',1)->orderBy('location', 'ASC')->get();
//dd($carrusel);
        
        if($ec->used){
            $num = 1;
            foreach($carrusel as $ca){
                ElementCarrusel::where('id',$ca->id)->update(["location" => $num]);
                $num++;
            }
        }

        return redirect('advanzer-admin/');
    }

    /**
     * Allow change imagen of mural birthday.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminChangeMural(Request $request)
    { 
        $file = $request->file('mural');        
        $destinationPath = $this->urlMural;
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath, $filename);

        Birthday::where('id',1)->update(["path" => $filename]);

        return redirect('advanzer-admin/cumpleanos_del_mes');
    }

    /**
     * Update carrusel.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminUpdateElementsCarruselArray(Request $request)
    {
        //ElementCarrusel::all()->update(["used" => 0 , "location" => 0 ]);
        DB::table('carrusel')->update(["used" => 0 , "location" => 0 ]);
        
        $carrusel = json_decode($request->get("array"));
        
        $num = 1;
        
        foreach($carrusel as $ca){
            ElementCarrusel::where('id',$ca)->update(["used" => 1, "location" => $num]);
            $num++;
        }

        //return $request->get("array");
        return "success";
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
     * Remove the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminDeleteUser($id)
    {
        User::where('id',$id)->delete();

        return redirect('advanzer-admin/usuarios');        
    }

    /**
     * Remove the specified circular with images.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminDeleteCircular($id)
    {   
        ElementCarrusel::where('id_circular',$id)->delete();
        ImageCircular::where('id_circular',$id)->delete();
        LinkCircular::where('id_circular',$id)->delete();
        Circular::where('id',$id)->delete();

        return redirect('advanzer-admin/noticias');        
    }

    /**
     * Remove the specified album with images.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminDeleteAlbum($id)
    {   
        ElementCarrusel::where('id_circular',$id)->delete();
        ImageCircular::where('id_circular',$id)->delete();
        Circular::where('id',$id)->delete();

        return redirect('advanzer-admin/historial_de_cumpleaños');        
    }

    /**
     * Remove the specified event with images.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminDeleteAlbumEvent($id)
    {   
        ElementCarrusel::where('id_circular',$id)->delete();
        ImageCircular::where('id_circular',$id)->delete();
        Circular::where('id',$id)->delete();

        return redirect('advanzer-admin/historial_de_eventos');        
    }

    /**
     * create a path format
     *
     * @return String
     */
    private static function createPathFormat($string)
    {
        return str_replace(" ","-", AdminController::deleteSimbols($string));
    }

    private static function deleteSimbols($text)
    {
        $text = htmlentities($text, ENT_QUOTES, 'UTF-8');
        $text = strtolower($text);
        $patron = array (
            // Espacios, puntos y comas por guion
            //'/[\., ]+/' => ' ',

            // Vocales
            '/\+/' => '',
            '/&agrave;/' => 'a',
            '/&egrave;/' => 'e',
            '/&igrave;/' => 'i',
            '/&ograve;/' => 'o',
            '/&ugrave;/' => 'u',

            '/&aacute;/' => 'a',
            '/&eacute;/' => 'e',
            '/&iacute;/' => 'i',
            '/&oacute;/' => 'o',
            '/&uacute;/' => 'u',

            '/&acirc;/' => 'a',
            '/&ecirc;/' => 'e',
            '/&icirc;/' => 'i',
            '/&ocirc;/' => 'o',
            '/&ucirc;/' => 'u',

            '/&atilde;/' => 'a',
            '/&etilde;/' => 'e',
            '/&itilde;/' => 'i',
            '/&otilde;/' => 'o',
            '/&utilde;/' => 'u',

            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',

            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',

            // Otras letras y caracteres especiales
            '/&aring;/' => 'a',
            '/&ntilde;/' => 'n',

            // Agregar aqui mas caracteres si es necesario

        );

        $text = preg_replace(array_keys($patron),array_values($patron),$text);
        return $text;
    }
}
