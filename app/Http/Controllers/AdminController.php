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
use App\User;
use App\Circular;
use App\ImageCircular;
use App\ElementCarrusel;

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
        $news = Circular::all();
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
        $carrusel = ElementCarrusel::where('used',1)->get();
        return View::make('admin.carrusel.elements', ['elements' => $carrusel]);
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

                    $destinationPath = $this->urlNews;
                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;

                    ImageCircular::create([
                        'path' => $filename,
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

            ElementCarrusel::create([
                'id_circular' => $circular->id,
                'id_img_circular' => $ic->id,
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

            return View::make('admin.news.update_circular', ['circular' => $circular, 'pictures' => $pictures]);
        }else{
            return redirect('advanzer-admin/noticias');
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
            
            foreach($files as $file) {

                    if ($file !== null) {

                        $destinationPath = $this->urlNews;
                        $filename = $file->getClientOriginalName();
                        $upload_success = $file->move($destinationPath, $filename);
                        $uploadcount ++;

                        ImageCircular::create([
                            'path' => $filename,
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
     * Allow edit status of specified circular on carrusel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pia_changeCircular($id)
    { 
        $ec = ElementCarrusel::where('id_circular',$id)->get()->first();
        
        ElementCarrusel::where('id_circular',$id)->update(["used" => ( $ec->used ? 0 : 1 )]);

        return redirect('advanzer-admin/noticias');
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
        Circular::where('id',$id)->delete();

        return redirect('advanzer-admin/noticias');        
    }

}
