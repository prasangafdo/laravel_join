<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //This returns join queries without any relationship
    
    //return view();
    //var_dump(App\User::all()->toArray());//This puts everything to an array
    
   /* var_dump(
         DB::table('students')
        ->join('term_fees', 'students.id', '=', 'term_fees.student_id')
        ->get()
        ->toArray()*/

        var_dump(
            DB::table('users')
           // ->select('users.first_name','users.last_name','users.user_address', 'user_roles.user_role')
            ->join('user_roles','users.id','=','user_roles.user_id')
           // ->where(['something' => 'something', 'otherThing' => 'otherThing'])
            ->get()
            ->toArray()
 

});
