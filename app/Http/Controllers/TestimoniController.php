<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\User;
use DB;
use App\Testimoni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;


class TestimoniController extends Controller
{
    public function prosesTestimoni (Request $request, $id) {
        //$user = Auth::user();
        $user = DB::table('users')->select('name', 'email', 'password', 'username', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'al_email', 'photoProfil')->where('id', $id)->first();
        //dd($user);exit;
        $this->validate($request, [
        'email' => 'required',
        'nama' => 'required',
        'isiTestimoni' => 'required',
        'Photo' => 'required|unique:testimoni|max:255',
        ]);
        if($request->hasFile('Photo')) {
                    $file = Input::file('Photo');
                    $name = $file->getClientOriginalName();
                    $file->move(public_path().'/uploadPhoto/testimoni/', $name);
        $Testimoni = new Testimoni;
        $Testimoni = DB::table('testimoni')
                    ->where('user_id', $id)
                    ->insert(['email' => $request->input('email'), 'nama' => $request->input('nama'), 'Photo' => $name, 'isiTestimoni' => $request->input('isiTestimoni'), 'user_id' => $id]);
        //$Testimoni->save();
        //dd($Testimoni);exit;
        }

        //dd($user);exit;
        return redirect()->route('profilU', ['user_id' => $id]);
    }
}
