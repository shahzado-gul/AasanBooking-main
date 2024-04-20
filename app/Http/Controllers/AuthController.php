<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function login_auth(Request $request)
    {
        $user = User::where('email', $request->login)
            ->orwhere('name', $request->login)
            ->orwhere('phone', $request->login)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'invalid username or password');
        }

        Auth::login($user, $request->boolean('remember'));


        if (Auth::user()->role === 'admin') {
            $url = 'admin/dashboard';
        } elseif (Auth::user()->role === 'user') {
            $url = 'user/dashboard';
        } else {
            $url = '/login';
        }

        return redirect()->intended($url);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'firstName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone1' => 'required',
        ]);
        $imageName = "";
        $userImagePath = public_path('images/UserImage');
        if (!File::exists($userImagePath)) {
            File::makeDirectory($userImagePath);
        }
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($userImagePath, $imageName);
        }
        $user = Customer::create([
            'first_name' => $request->firstName,
            'last_name' => $request->last_name,
            'phone' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'photo' => $imageName,
        ]);

        User::create([
            'name' => $request->first_name . " " . $request->last_name,
            'username' => $request->firstName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $imageName,
            'phone' => $request->phone1,
            'address' => $request->address,
            'role' => 'user',
        ]);

        return redirect('user/dashboard'); // Customize the redirection as needed
    }
}
