<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    // SHows all users
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }
    // Show register form
    public function create()
    {
        return view('users.register');
    }

    // Register user

    /**
     * @throws ValidationException
     */
    public function store()
    {
        // Validate form data
        $this->validate(request(), [
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hack to prevent auto login

        request()->merge(['password' => bcrypt(request('password'))]);

        // Create and save user
        $user = User::create(request(['name', 'email', 'password']));

        // Sign in user
        auth()->login($user);

        // Redirect to home page
        return redirect('/books')->with('success', 'You have successfully registered!');
    }

    // Show login form

    public function loginForm()
    {
        return view('users.login');
    }

    // Login user

    public function authenticate()
    {
        // Validate form data
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log user in
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'email' => 'Please check your credentials and try again.'
            ]);
        }

        // If successful, then redirect to their intended location
        return redirect('/books')->with('success', 'You have successfully logged in!');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/books')->with('success', 'You have successfully logged out!');
    }

    public function profile()
    {
        return view('users.profile', [
            'user' => auth()->user()
        ]);
    }

    public function update()
    {
        // Validate form data
        $this->validate(request(), [
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')->ignore(auth()->user()->id)],
            'password' => 'nullable|confirmed|min:6'
        ]);

        // Update user
        $user = auth()->user();
        $user->name = request('name');
        $user->email = request('email');
        if (request('password')) {
            $user->password = bcrypt(request('password'));
        }
        $user->save();

        return redirect('/profile')->with('success', 'You have successfully updated your profile!');
    }

    public function destroy()
    {
//        dd('hhahahahhaha');
        $user = auth()->user();
//        $user->delete();
        $user->update(['blocked_at' => Carbon::now()]);

        return redirect('/login')->with('success', 'You have successfully deleted your account!');
    }
}
