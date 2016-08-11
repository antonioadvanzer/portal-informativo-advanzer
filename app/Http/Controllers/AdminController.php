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
     * Display users table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminGetUsers()
    {   
        $users = User::all();
        return View::make('admin.users', ['users' => $users]);
    }

    /**
     * Display form new user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminNewUserForm()
    {   
        return View::make('admin.new_user');
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
