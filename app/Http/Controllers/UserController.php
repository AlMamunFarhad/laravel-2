<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {

//        DB::table('users')->insert([
//           'name' => 'farhad',
//            'email' => 'farhad@gmail.com',
//            'password' => Hash::make('secret12345@@###')
//        ]);
////
//        return redirect('/');
     //********** Reading ***********
//        $users =  DB::table('users')->get();
//        dd($users);
//
/// //********** Update query ************

//$result = DB::table('users')->where('id', 1)->update([
//    'name'=> 'farhad',
//    'created_at'=> Carbon::now(),
//    'updated_at'=> Carbon::now()
//]);
//
//dd($result);


//   DB::table('users')->where('id', 1)->delete();
//        return redirect('/');

//    DB::table('users')->truncate();
//    return redirect('/');

        // Show Json Data

//        $users = Storage::json('public/users.json');
//
//       dd($users);

        $readData = DB::table('users')->get();

//       $users = Storage::json('public/users.json');
       $time = Carbon::now();
       foreach ($readData as $user){
           echo "<br>";
//           echo "<h1>".$user->created_at."</h1>";
           echo Carbon::parse($user->created_at)->diffForHumans();

//           DB::table('users')->insert([
//               'name'=> $user['name'],
//               'email'=>  $user['email'],
//               'password'=> Hash::make($user['email']),
//               'created_at' => $time->addHour(),
//               'updated_at' => $time->addHour()
//           ]);
       }



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
