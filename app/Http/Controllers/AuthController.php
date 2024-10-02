<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Auth\Events\Verified;

class AuthController extends Controller
{
    public function createPost()
    {
        return view('auth.create-post');
    }

    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }

    public function registerUser(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|min:11',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $formFields = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];

        $user = User::create($formFields);

        if ($user) {
            $user->notify(new VerifyEmailNotification($user));
            auth()->login($user);
            return redirect('/verify-email-page')->with('success', 'User has been registered successfully. Please verify your email.');
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }

    public function loginuser(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=> 'required',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return redirect()->back()->with('error', 'Credentials did not match our records');
        }

        $remember = $request->has('remember');
        auth()->login($user, $remember);

        return redirect('/home')->with('success', 'Login successful');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home')->with('success', 'Logout Successfully');
    }

    public function verify($id, Request $request) {
        if (!$request->hasValidSignature()) {
            return abort(404);
        }

        $user = User::findOrFail($id);

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
            event(new Verified($user));
            return redirect('/home')->with('success', 'Email verified successfully');
        } else {
            return redirect('/')->with('error', 'Email already verified');
        }
    }

    public function resend(){
        if(auth()->user()->hasVerifiedEmail()){
            return redirect()->back()->with('error', 'Email already verified');
        }

        auth()->user()->sendEmailVerificationNotification();
        return redirect()->back()->with('success', 'Verification link has been resent to your email');
    }

    public function verifyEmailPage(){
        return view('auth.email-register');
    }

    public function emailRegister(){
        return view('auth.email-register');
    }

    public function forgotPasswordEmail(){
        return view('auth.passwords.email');
    }

    public function passwordEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User Not Found');
        }

        $response = Password::sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            // Redirect back or to a specific route with success message
            return redirect()->back()->with('status', 'Password reset link sent to your email!');
        } else {
            return redirect()->back()->with('error', 'Failed to send password reset link.');
        }
    }

    public function passwordReset(Request $request){
        return view('auth.passwords.reset', [
            'token' => $request->token
        ]);
    }

    public function passwordUpdate(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string|confirmed|min:8',
        'token' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator->errors());
    }

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        }
    );

    if ($status === Password::PASSWORD_RESET) {
        return redirect('/login')->with('success', 'Password reset was successful.');
    } else {
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
}

}
