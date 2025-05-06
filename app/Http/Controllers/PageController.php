<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        $user = $request->input('username');
        $pass = $request->input('password');
    
        if ($user === 'yuda' && $pass === '123') {
            $data = [
                'username' => $user,
                'name' => 'Yuda',
                'email' => 'yuda@gmail.com',
            ];
    
            session(['data' => $data]);
    
            return redirect('dashboard');
        } else {
            return redirect()->back()->withInput()->with('error', 'Username atau password salah.');
        }
    }
    public function dashboard()
{$tasks = [
    ['name' => 'Math Homework', 'link' => 'https://example.com/math', 'deadline' => '2025-05-10'],
    ['name' => 'Science Project', 'link' => 'https://example.com/science', 'deadline' => '2025-05-12'],
    ['name' => 'History Essay', 'link' => 'https://example.com/history', 'deadline' => '2025-05-15'],
    ['name' => 'Biology Report', 'link' => 'https://example.com/biology', 'deadline' => '2025-05-18'],
    ['name' => 'English Presentation', 'link' => 'https://example.com/english', 'deadline' => '2025-05-20'],
    ['name' => 'Art Portfolio', 'link' => 'https://example.com/art', 'deadline' => '2025-05-22'],
    ['name' => 'Geography Quiz', 'link' => 'https://example.com/geography', 'deadline' => '2025-05-25'],
    ['name' => 'Physics Lab', 'link' => 'https://example.com/physics', 'deadline' => '2025-05-28'],
];


    return view('pengelolaan', ['tasks' => $tasks]);
}

}
