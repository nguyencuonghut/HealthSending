<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Mail\HealthResultMail;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function import(Request $request)
    {
        ini_set('memory_limit', '1024M'); // or higher if needed
        ini_set('max_execution_time', 300);

        $request->validate([
            'excel_file' => 'required|file|mimes:csv,xlsx,xls',
        ]);
        // Clear all data in the users table before importing
        User::truncate();

        // Import the Excel file using the UsersImport class
        Excel::import(new UserImport, request()->file('excel_file'));

        return redirect()->route('users.send')->with('success', 'Import dữ liệu thành công!');
    }

    public function sendEmail()
    {
        return view('users.send');
    }

    public function sendEmailPost(Request $request)
    {
        $users = User::where('email', '!=', null)->get();

        foreach ($users as $user) {
            //Send email to each user
            Mail::to($user->email, $user->name)
                ->queue(new HealthResultMail($user));
        }
        return redirect()->route('users.send')->with('success', 'Email đã được gửi thành công!');
    }
}
