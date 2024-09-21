<?php

namespace App\Http\Controllers;

use App\Models\Student;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function index(Request $request){
        return view('pages.registration');
    }

    public function data(Request $request){
        $data =  Student::all();
        return response()->json($data, 200);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'student_identity_number' => 'required',
            'rfid' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('register')->with('error', 'Gagal mendatarkan mahasiswa')->withErrors($validator);
        }
        $restaurant = New Student();
        $restaurant->name = $request->input('name');
        $restaurant->student_identity_number =  $request->input('student_identity_number');
        $restaurant->id = $request->input('rfid');
        $restaurant->save();
        return redirect()->route('register')->with('success', 'Berhasil mendatarkan mahasiswa');
    }
}
