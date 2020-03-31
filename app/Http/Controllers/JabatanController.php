<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;


class JabatanController extends Controller
{
   //  public function index()
   //  {
   //      $pegawai = Employee::all();
   //      return view('pegawai.index', ['pegawai' => $pegawai]);
   //  }

    public function index($jabatan = null){
       $rqe = Request(); $pegawai = null;
       if ($jabatan == null){
          if($rqe->query('jabatan') != null ){
            $pegawai =  Employee::where('jabatan', $rqe->query('jabatan'))->orderBy('nip','ASC')->get();
          }
          else{
            $pegawai =  Employee::all();
          }
       } else {
          $jabatan = str_replace('+', ' ', $jabatan);
         //  dd($jabatan);
         $pegawai =  Employee::where('jabatan', $jabatan)->orderBy('nip','ASC')->get();
       }

      return view('jabatan', compact('pegawai'));
   }
    public function manager(){
        $pegawai =  Employee::where('jabatan', 'manager')->orderBy('nip','ASC')->get();
  
        return view('jabatan', compact('pegawai'));

     }
  
     public function sistemanalyst(){
        $pegawai =  Employee::where('jabatan', 'sistem analyst')->orderBy('nip','ASC')->get();
  
        return view('jabatan', ['pegawai' => $pegawai]);
     }
     public function programmerdesign(){
        $pegawai =  Employee::whereIn('jabatan', ['Programmer', 'Software Designer'])->orderBy('nip','ASC')->get();
  
        return view('jabatan', ['pegawai' => $pegawai]);
     }
     public function tester(){
        $pegawai =  Employee::where('jabatan', 'Software Tester')->orderBy('nip','ASC')->get();
  
        return view('jabatan', ['pegawai' => $pegawai]);
     }
     
}
