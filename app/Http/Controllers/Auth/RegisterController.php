<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SurveyFirst;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);

        return Validator::make($data, [
            'patient' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'diagnosis' => 'required',
            'tel' => 'required',
            'medid' => 'required',
            'codeMKB' => 'required',
            'selectedValues' => 'required',
            // 'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        dd($data);

        $user =  User::create([
            // 'phone' => $data['phone'],
            'patient' => $data['patient'],
            'gender' => $data['gender'],
            'date' => $data['date'],
            'diagnosis' => $data['diagnosis'],
            'tel' => $data['tel'],
            'medid' => $data['medid'],
            'codeMKB' => $data['codeMKB'],
            'password' => Hash::make($data['password']),
        ]);
        $surveyFirst = SurveyFirst::create([
            'user_id' => $user->id,
            'selectedValues' => json_encode($data['selectedValues']),
            // добавьте другие поля, если необходимо
        ]);
        return response()->json([
            'message' => 'Вы успешно прошли опрос',
            'login' => $data['tel'],
            'password' => $user->password,
        ]);
    }
}
