<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('users')
            ->Paginate(5)
            ->fragment('users');

        return view('/allusers', ['data' => $users]);
    }

    public function singleUser(string $id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('user', ['data' => $users]);
    }

    public function addUser(Request $req)
    {

        $user = DB::table('users')->insert(
            [
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
            ]
        );

        if ($user) {
            return redirect()->route('home');
            // echo "<h1>Data Successfully added</h1>";
        } else {
            echo "<h1>Data not added</h1>";
        }
    }

    public function updatePage(string $id)
    {
        // $user = DB::table('user')->where('$id', $id)->get();
        $user = DB::table('users')->find($id);

        return view('updateuser', ['data' => $user]);
    }

    public function updateUser(Request $req, $id)
    {
        $user =  DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
            ]);

        if ($user) {
            return redirect()->route('home');
            echo "<h1>Data Successfully update</h1>";
        } else {
            echo "<h1>Data not updated</h1>";
        }
    }

    public function deleteUser(string $id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->delete();

        return redirect()->route('home');
    }
}
