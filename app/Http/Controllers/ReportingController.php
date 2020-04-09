<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use PDF;



class ReportingController extends Controller {

    public function index() {
        $data['title']    = "Reporting - Rool";
        $data['barangs']   = DB::select("SELECT * FROM barangs");
                            return view('reporting',$data);
    }
    public function previewPdf() {
        $data['title']    = "Reporting - Rool";
        $data['barangs']  = DB::select("SELECT * FROM barangs");
        $pdf              = PDF::loadview('reporting-wrap', $data);                    
                            return $pdf->stream();
    
    }
    public function printPdf() {
        $data['title']    = "Reporting - Rool";
        $data['barangs']  = DB::select("SELECT * FROM barangs");
        $pdf              = PDF::loadview('reporting-wrap',$data);
                            return $pdf->download('reporting-file.pdf');
    
    }
}