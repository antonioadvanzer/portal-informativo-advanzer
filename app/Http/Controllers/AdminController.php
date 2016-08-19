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
    {   
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
     * Display users table.
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
        // Store circular saved
        try{
            $circular = Circular::create([
                            'title' => $request->get('title'),
                            'summary' => $request->get('summary'),
                            'content' => $request->get('content'),
                        ]);
        }catch(\Exception $e){
            //echo $e;
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
                }
               
            }catch(\Exception $e){
                    echo $e;
            }

            ImageCircular::create([
                'path' => $filename,
                'id_circular' => $circular->id
            ]);
            
        }

        /*if($uploadcount == $file_count){
            Session::flash('success', 'Upload successfully'); 
            return Redirect::to('upload');
        }else {
            return Redirect::to('upload')->withInput()->withErrors($validator);
        }*/


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

}
