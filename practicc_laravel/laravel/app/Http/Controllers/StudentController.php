<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $mahasiswas = Student::all();
        return view('student.index', ['students' => $mahasiswas]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim'           => 'required|size:8,unique:students',
            'nama'          => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan'       => 'required',
            'alamat'        => ''
        ]);

        $mahasiswa = new Student();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->name = $validateData['nama'];
        $mahasiswa->gender = $validateData['jenis_kelamin'];
        $mahasiswa->department = $validateData['jurusan'];
        $mahasiswa->address = $validateData['alamat'];
        $mahasiswa->save();

        $request->session()->flash('pesan', 'Penambahan data berhasil');
        return redirect()->route('student.index');
    }

    public function show($student_id)
    {
        $result = Student::findOrFail($student_id);
        return view('student.show', ['student' => $result]);
    }
}