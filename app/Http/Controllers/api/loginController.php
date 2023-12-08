<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;
use App\Mail\sendResetLinkEmail;


class loginController extends Controller
{
    public function registerForm()
    {
        return view('login/registerForm');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('math')]);
    }



    public function submitRegistration(Request $request)
    {
        // dd($request);



        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'phone' => 'required|integer|min:8|',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
          
            'captcha' => 'required',
        ]);

        // return response()->json(['success'=>'errors']);

        if ($validator->fails()) {
            // Return validation errors in the response
            return response()->json(['ValidationError'=>$validator->errors()]);
        }

        $action = $request->input('checkBox1') .'/'. $request->input('checkBox2').'/'. $request->input('checkBox3');


        $token = Str::random(40);
        // Create a new user
        $user = User::create([
            'name' => $request->input('firstName') . ' ' . $request->input('lastName'),
            'mobile' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'remember_token' => $token,
            'action' => $action,
            'role' => "Normal",

        ]);


        // $email =  $request->input('email'); 


        // $message = Mail::to($email)->send(new EmailVerification($email));
        // dd($message);

        if($user){
            return response()->json(['success' => 'User registered successfully', 'token' => $token]);
 
        }

        else{
            return response()->json(['error' => 'User registered Failed due Query']);
        }



    }


    public function loginform()
    {

        return view('login/loginForm');
    }

    function loginCheck(Request $request)
    {


        // $this->validate($request, [
        //     'email'   => 'required|email',
        //     'password'  => 'required|alphaNum|min:3'
        // ]);

        $user_data = array(
            'email'  => $request->email,
            'password' => $request->password
        );



        if (Auth::attempt($user_data)) {
            $user = Auth::user();

            $customToken = Str::random(40);

            $user->remember_token = $customToken;
            $user->save();

            return response()->json(['success' => 'Login Successfull', 'token' => $customToken]);
        } else {
            return response()->json(['error' => 'User Credential Mis Matched']);
        }
    }




    public function forgetPassword(Request $request)
    {
        // $validator = $this->validateEmail($request);

        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->errors()], 422);
        // }

        $email = $request->email;
        $user = User::where('email', $request->email)->first();

        // return response()->json(['success' => "hello"], 200);
        if (!$user) {
            return response()->json(['error' => 'Email not found'],);
        }

        // Generate and save a token and set its expiry
        $token = Str::random(40);
        //    return response()->json(['success' => "Reset Password Link Set On Your Email"], 200);
        // $user->update([
        //     'remember_token' => $token,
        //     // 'token_expiry' => now()->addMinutes(60),
        // ]);

        $user->remember_token = $token;
        $user->save();
        // mail::to($user->email)->send (new sendResetLinkEmail($user));
        $message = Mail::to($user)->send(new sendResetLinkEmail($user, $token));

        // Send email with reset link
        // $this->sendResetLinkEmail($user);

        return response()->json(['success' => 'Reset link sent successfully'], 200);
    }

    public function passwordResetFrom($token)
    {

        return view('login/passwordResetForm')->with(compact('token'));
        // Use where clause to find the user with the given token
        
    }

    public function passwordReset(Request $request)
    {

        $user = User::where('remember_token', $request->token)->first();

        // Check if the user is found
        if ($user) {
            // Do something with the user, for example, display user details
            $user->password= Hash::make($request->password);
            $user->save();

            return response()->json(['success' => 'Password Reset successfully'] );

        } else {
            // User not found
            dd('User not found for the given token.');
        }
    }

    function home()
    {
        return view('index');
    }

    function logout()
    {
        Auth::logout();
        return redirect('api/login');
    }

   
}
