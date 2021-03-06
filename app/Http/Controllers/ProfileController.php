<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getProfile($username)

    {
        $user=User::where('username', $username)->first();
        
		if(!$user) {
			abort(404);
		}
		
		return view('user.profile')
		->with('user', $user);
    }

    public function getEdit() {

        return view('profile.edit');
    }

    public function postEdit(Request $request) {
        $this->validate($request, [
            'name'=>'alpha|max:50',
            'username'=>'alpha|max:50',
            
            ]);
        dd('all ok');
    }

}
