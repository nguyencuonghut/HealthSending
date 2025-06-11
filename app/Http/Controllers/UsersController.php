<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,xlsx,xls',
        ]);

        // Process the file and import users
        // ...

        return redirect()->route('users.index')->with('success', 'Import dữ liệu thành công!');
    }
}
