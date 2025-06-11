<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class MediaController extends Controller
{
    public function landing()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('landing');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function signup(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $path = $file->store('temp_media', 'public');
            return view('play', ['filePath' => $path]);
        }
        return redirect()->back();
    }

    public function cleanOldMedia()
    {
        $directory = public_path('storage/temp_media');

        if (!is_dir($directory)) {
            return;
        }

        $files = scandir($directory);
        $now = time();

        foreach ($files as $file) {

            if ($file === '.' || $file === '..') {
                continue;
            }

            $filePath = $directory . DIRECTORY_SEPARATOR . $file;

            if (is_file($filePath)) {

                $fileModified = filemtime($filePath);

                Log::info('File modified at: ' . $fileModified);

                // Periksa apakah file lebih dari 30 menit
                if ($now - $fileModified > 1800) {
                    Log::info("Deleting file: " . $filePath);
                    unlink($filePath);
                }
            }
        }
    }
}