<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Barang;
use Illuminate\Http\Request;
use PDF;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function profile()
    {
        return view('admin.profile');
    }
    
    public function listproduk()
    {
        $data['barangs']   = DB::select("SELECT * FROM barangs");
                            return view('admin.listproduk', $data);
        
    }
    public function uploadAction(Request $request) {
        $method = $request->method();
        if ( $method == "POST" ) {
            $directory      = 'uploads';
            $file           = $request->file('file');

            $file->move($directory, $file->getClientOriginalName());

            $query = DB::table('barangs')->insert(['gambar' => $directory."/".$file->getClientOriginalName(), 
                                                    'nama_barang' => $request->input('nama_barang'),
                                                    'harga' => $request->input('harga'),
                                                    'stok' => $request->input('stok'),
                                                    'kategori' => $request->input('kategori')]);
            
            if ( $query ) {
                return redirect('/admin/listproduk');
            } else {
                echo "Gagal menambahkan data ke database";
            }
        } else {
            return redirect('/admin/listproduk');
        }
    }
    public function deleteAction($id){

        $delete = DB::table('barangs')->where('id', '=', $id)->delete();

        if ( $delete ) {
            return redirect('/admin/listproduk');
        } else {
            echo "Produk tidak ditemukan";
        }
    }

    public function updateAction(Request $request){
        $file = $request->file('file');
        $directory      = 'uploads'; // lokasi penyimpanan
        
        if ($file != "" ) {
            $file->move($directory, $file->getClientOriginalName());
            $query = DB::table('barangs')->where('id', $request->input('id'))
                                        ->update(['gambar' => $directory."/".$file->getClientOriginalName(), 
                                        'nama_barang' => $request->input('nama_barang'),
                                        'harga' => $request->input('harga'),
                                        'stok' => $request->input('stok'),
                                        'kategori' => $request->input('kategori')]);
        } else {
            $query = DB::table('barangs')->where('id', $request->input('id'))
                                        ->update(['gambar' => $directory."/".$file->getClientOriginalName(), 
                                        'nama_barang' => $request->input('nama_barang'),
                                        'harga' => $request->input('harga'),
                                        'stok' => $request->input('stok'),
                                        'kategori' => $request->input('kategori')]);
        }

        if ( $query ) {
            return redirect('/admin/listproduk');
        } else {
            echo "Gagal update";
        }
    }
    public function laporan()
    {
        $data['barangs']   = DB::select("SELECT * FROM barangs");
                            return view('admin.laporan',$data);
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
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/home');
      }
}
