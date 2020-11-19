<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use App\Models\member;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
// use App\Providers\RouteServiceProvider;





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
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:member');
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
            'flat_no' => ['required', 'string', 'max:255'],
            'contact_no' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showmemberRegisterForm()
    {
        return view('auth.register', ['url' => 'member']);
    }
   
     /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'flat_no' => $data['flat_no'],
            'contact_no' => $data['contact_no'],
            'password' => Hash::make($data['password']),
        ]);
    }
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'flat_no' => $request->flat_no,
            'contact_no' => $request->contact_no,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/admin');
    }
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    protected function createmember(Request $request)
    {
        $this->validator($request->all())->validate();
        member::create([
            'name' => $request->name,
            'email' => $request->email,
            'flat_no' => $request->flat_no,
            'contact_no' => $request->contact_no,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/member');
    }
}
