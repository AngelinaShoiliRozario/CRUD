<?php

namespace App\Http\Controllers;

use App\Database;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function saveregister_value(Request $re)
    {
        // all forms value is available in Request classes object $re => dd($re);

        //for showing error message from previous page
        $valid = $re->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:databases',
                'password' => 'required'
            ]
        );


        //Database is a table or model to enter the data using create() method

        if ($valid) {
            $id = $re->id;
            $n = $re->name;
            $e = $re->email;
            $p = $re->password;
            $ad = $re->isAdmin;

            Database::create(['id' => $id, 'name' => $n, 'email' => $e, 'password' => $p, 'isAdmin' => $ad]);
            //return redirect()->back();  //again come same page
            return redirect('/datashow');
        }

        // else {
        //     return redirect('/register');  //go another page
        // }
    }

    public function show_value()
    {
        // get and all() almost same
        $database_data = Database::get();  //all record of database
        //dd($database_data);
        return view('show_data')->with('data', $database_data);
    }

    public function delete($id)

    {
        $delete = Database::where('id', $id)->delete();

        if ($delete) {
            return redirect()->back();
        } else {
            echo "Not Deleted Yet";
        }
    }

    public function edit($id)
    {
        //Database::where('id', $id)->update(['name'=>$request->name,'detail'=>$request->detail]);
        $data = Database::where('id', $id)->first();
        return view('update')->with('v', $data);
    }

    public function edit_value(Request  $r, $id)
    {
        
        Database::where('id', $id)->update(['id' => $r->id, 'name' => $r->name, 'password' => $r->password, 'isAdmin' => $r->isAdmin]);

        return redirect('/datashow');
    }
}
