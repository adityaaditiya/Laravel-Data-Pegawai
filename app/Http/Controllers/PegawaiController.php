<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employee;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //1111111111111111111111111111111111111111
    public function index()
    {
        $pegawai = Employee::all();
        return view('pegawai.index', compact('pegawai'));

    }
    public function index1()
    {
        $pegawai = Employee::all();
        return view('index', ['pegawai' => $pegawai]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //22222222222222222222222222222222222222222
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //33333333333333333333333333333333333333333333333333333333333
    public function store(Request $request)
    {

        Employee::create($request->all());
        return redirect('/pegawai')->with('status', 'Data Pegawai Berhasil Ditambahkan!');
    }
                    // $request->validate([
                    //     'nama' => 'required',
                    //     'foto' => 'required',
                    //     'nip' => 'required|size:9'
                    // ]);
            
                //    Employee::create([
            
                    //    $employee = new Employee;
                    //    $employee->nama = $request->nama;
                    //    $employee->nip = $request->nip;
                    //    $employee->alamat = $request->alamat;
                    //    $employee->ttl = $request->ttl;
                    //    $employee->jk = $request->jk;
                    //    $employee->sm = $request->sm;
                    //    $employee->tm = $request->tm;
                    //    $employee->jabatan = $request->jabatan;
                    //    $employee->foto = $request->foto;
                // //    ]);
                    // $employee->save();

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //44444444444444444444444444444444444444444444444
    public function show(Employee $employee)
    {
        return view('pegawai.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //555555555555555555555555555555555555555555555555
    public function edit(Employee $employee)
    {
        return view('pegawai.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //66666666666666666666666666666666666666666666666
    public function update(Request $request, Employee $employee)
    {
        Employee::where('id', $employee->id)
        ->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'sm' => $request->sm,
            'tm' => $request->tm,
            'jabatan' => $request->jabatan,
            'foto' => $request->foto

        ]);
        return redirect('/pegawai')->with('status', 'Data Pegawai Berhasil Diubah!');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //7777777777777777777777777777777777777777777
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect('/pegawai')->with('status', 'Data Pegawai Berhasil diHapus!');
    }
    
}
