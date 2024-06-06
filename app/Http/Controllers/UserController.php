<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function index()
    {

        $name = 'Vickydev';
        $school = "SQI";

        // The with method;
        return view('index')->with("name", $name);

        // The compact method;
        return view('index', compact($name, $school));

        // The direct method;
        return view(
            'index',
            [
                'name' => $name,
                'school' => $school
            ]
        );
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $saveUser = $user->save();

        if ($saveUser) {
            return view('index')->with('message', 'User Saved successfully.');
        } else {
            return view('index')->with('Error occurred', 'Error occurred, Please try again.');
        }
        // return $request->name;


    }
}
