<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
//     public function index(){
//         $doctors = Doctor::all();
//         return view('backend.reports.f018',compact('doctors'));
//     }

    public function create(){
        $data = [
//             'imagePath'    => public_path(asset('images/profile.png')),
            'doctorName'         => '',
            'doctorID'      => '',
            'mobileNumber' => '',
            'reportDate' => '',
            'joiningDate' => '',
        ];
        return view('backend.reports.f018',compact('data'));
    }

    public function store(Request $request){
        return back();
    }
    public function pdf(Request $request)
    {
//        return $request;
        $data = [
//            'imagePath'    => public_path('images/profile.png'),
            'doctorName'=> $request->doctorName,
            'doctorID' => $request->doctorID,
            'reportDate' => $request->reportDate,
            'joiningDate' => $request->joiningDate,
        ];
//        return $data;
        $pdf = PDF::loadView('backend.reports.f018', compact('data'));
        return $pdf->download('f018.pdf');
    }
}