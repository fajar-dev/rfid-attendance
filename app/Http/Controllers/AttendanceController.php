<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    public function in(){
        $data['student'] =  Attendance::where('is_attendance', true)->orderby('created_at', 'ASC')->get();
        return view('pages.in', $data);
    }

    public function inStore(Request $request){
        $validator = Validator::make($request->all(), [
            'rfid' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Gagal mendatarkan mahasiswa')->withErrors($validator);
        }
        $attedance = New Attendance();
        $attedance->student_id = $request->input('rfid');
        $attedance->is_attendance = true;
        $attedance->save();
        return redirect()->back()->with('success', 'Absensi berhasil');
    }

    public function out(){
        $data['student'] =  Attendance::where('is_attendance', false)->orderby('created_at', 'ASC')->get();
        return view('pages.out', $data);
    }

    public function outStore(Request $request){
        $validator = Validator::make($request->all(), [
            'rfid' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Gagal mendatarkan mahasiswa')->withErrors($validator);
        }
        $attedance = New Attendance();
        $attedance->student_id = $request->input('rfid');
        $attedance->is_attendance = false;
        $attedance->save();
        return redirect()->back()->with('success', 'absensi Berhasil');
    }
}
