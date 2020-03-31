<?php

namespace App\Http\Controllers;

use App\Task;
use App\Employee;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        $pegawai = Employee::all();
        return view('absen.index', compact('tasks', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect('/tasks')->with('status', 'Data Activity Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasks = Task::all();
        $pegawai = Employee::find($id);
        return view('absen.show', compact('pegawai', 'tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        Task::where('id', $task->id)
        ->update([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'from' => $request->from,
            'end' => $request->end
            

        ]);
        return redirect('/tasks')->with('status', 'Data Activity Berhasil Diubah!');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        Task::destroy($task->id);
        return redirect('/tasks')->with('status', 'Data Activity Berhasil diHapus!');
    }
}
