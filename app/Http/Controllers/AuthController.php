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

        $arr = []; 

        foreach($konsuling as $item){
            array_push($arr, [
                'nama_guru' => $item->bk->user->name,
                'tanggal' => $item->tanggal_konseling,
                'waktu' => $item->waktu_konseling,
                'tipeBimbingan' => $item->layananBK->jenis_layanan,
                'urlImg' => $item->bk->fotos()->count() > 0 ? asset('storage/'.$item->bk->fotos()->first()->img_location) : 'https://static.wikia.nocookie.net/bokunoheroacademia/images/8/8f/Toru_Hagakure_Full_Body_Uniform.png/revision/latest?cb=20161230191807'
            ]);
        }
        return response()->json([
            'data' => $arr
        ]);
    }
}
