<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function Login(Request $R)
    {
        $user = User::where('email', $R->name)->first();

        if ($user != '[]' && Hash::check($R->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response = ['status' => 200, 'token' => $token, 'user' => $user, 'message' => 'Login Successfully!'];
            return response()->json($response);
        } else if ($user == '[]') {
            $response = ['status' => 500, 'message' => 'No account found with this username'];
        } else {
            $response = ['status' => 500, 'message' => 'Wrong username or password! please try again'];
        }
    }

    function getDataKonselingSiswa($id){
        $user = User::find($id);

        $siswa = $user->siswa;

        $konsuling = $siswa->konsulings;

        return response()->json([

        ]);
    }
}
