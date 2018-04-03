<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Storage;

class UserController extends Controller
{
  public function profile() {
    return view('profile');
  }
  public function saveImage(Request $request) {
    $user = auth()->user();
    $file = $request->file('image');
    if ($file) {
      $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
      $path = '/public/images/'.$user->id.'.'.$extension;
      Storage::put($path,
                  file_get_contents($file->getRealPath())
              );
      $user->image = $path;
      $user->save();
    }
    return redirect('/user/profile');
  }

  public function edit(){
    $user = auth()->user();
    return view('editprofile')->with(compact('user'));
  }

  public function update(Request $request){
    $user = auth()->user();
    $user->fill($request->all());
    // dd($user);
    $user->save();
    return redirect()->route('tu_perfil');
    // return 'ok ';
  }

}
