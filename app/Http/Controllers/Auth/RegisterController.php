<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Crea al usuario con los parametros de llegada y le asigna un parametro activo true. 
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol'],
            'activo' => true,
            'carrera' => $data['carrera'],
            'rut' =>$data['rut'],

        ]);
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {


        if ($request->rol != 'jefeCarrera' && $request->rol != 'jefeCarreraProfesor') {
            if ($request->carrera != 'ninguna') {
                //dd("señor su archivo esta malo, debe usar el campo APELLIDO PATERNO como encabezado11111");
                return back()->with('error', 'El usuario no puede tener una carrera si no tiene el rol de jefe de carrera.');
            }
        } elseif ($request->carrera == 'ninguna') {

            //dd("señor su archivo esta malo, debe usar el campo APELLIDO PATERNO como encabezado22222222222222");
            return back()->with('error', 'Un jefe de carrera debe tener una carrera relacionada.');
        } 
            $this->validator($request->all())->validate();
            event(new Registered($user = $this->create($request->all())));
            // $this->guard()->login($user);
            return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
        
    }
}
