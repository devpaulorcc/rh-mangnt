<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(): View
    {

        $colaborator = User::with('detail')
                        ->findOrFail(auth()->id());

        return view('user.profile')->with('colaborator', $colaborator);
    }

    public function updatePassword(Request $request)
    {
        // form validation
        $request->validate([
            'current_password' => 'required|min:8|max:16',
            'new_password' => 'required|min:8|max:16|different:current_password',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        $user = auth()->user();

        // check if the current password is correct
        if(!password_verify($request->current_password, $user->password)){
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // update password in database
        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }

    public function updateUserData(Request $request)
    {
        // form validation
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id()
        ]);

        // update user data
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success_change_data', 'Profile updated successfully.');
    }

    public function updateUserAddress(Request $request)
    {
        // form validation
        $request->validate([
            'address' => 'required|min:3|max:100',
            'zip_code' => 'required|min:8|max:8',
            'city' => 'required|min:3|max:50',
            'phone' => 'required|min:6|max:20'            
        ]);

        // get user detail
        $user = User::with('detail')->findOrFail(auth()->id());
        $user->detail->address = $request->address;
        $user->detail->zip_code = $request->zip_code;
        $user->detail->city = $request->city;
        $user->detail->phone = $request->phone;
        $user->detail->save();

        return redirect()->back()->with('success_change_address', 'Profile updated successfully.');
    }
}