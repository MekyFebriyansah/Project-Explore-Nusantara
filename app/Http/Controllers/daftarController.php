<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegisterUsers;

class daftarController extends Controller
{
    public function pindah_daftar()
    {
        return view ('daftar');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("masuk")->withSuccess('You have signed-in');
    }
    
    protected $arah = RouteServiceProvider::HOME;
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function validasi(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    public function buatAkun(array $data)
    {
        return User::created([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
