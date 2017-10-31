<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
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
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'fat_student' => 'required|in:true,false',
            'fat_register' => 'required_if:fat_student,true',
        ];
        $messages = [
            'fat_student.boolean' => 'O campo :attribute deve ser "Sim" ou "Não".',
            'fat_register.required_if' => 'O campo matrícula é obrigatório quando você diz ser aluno da FAT.'
        ];
        $attributes = [
            'name' => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
            'fat_student' => 'aluno da FAT',
            'fat_register' => 'matrícula'
        ];
        return Validator::make($data, $rules, $messages, $attributes);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'fat_register' => $data['fat_register'],
                    'password' => bcrypt($data['password']),
        ]);
        $user->roles()->sync(\App\Role::where('name', 'aluno')->first());
        return $user;
    }

}
