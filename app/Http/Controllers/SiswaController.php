<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }


    public function create()
    {
        return view('siswa.tambah');
    }





    public function store(Request $request)
    {
       // Cara 1

        // $siswa = new Siswa;
        // $siswa->nama = $request->nama;
        // $siswa->nrp = $request->nrp;
        // $siswa->email = $request->email;
        // $siswa->jurusan = $request->jurusan;

        // $siswa->save();



        // Cara 2
        // Siswa::create([
        //    'nama' => $request->nama,
        //    'nrp' => $request->nrp,
        //    'email' => $request->email,
        //    'jurusan' => $request->jurusan
        // ]);


        // Cara 3
        $request->validate([
            'nama' => 'required|string',
            'nrp' => 'required|size:9|unique:Siswa,nrp',
            'email' => 'required|email:rfc,filter|unique:Siswa,email',
            'jurusan' => 'required|string'
        ]);
        Siswa::create($request->all());



        return redirect('/siswa')->with('status', 'Data Berhasil Ditambahkan');
    }




    public function show(Siswa $siswa)
    {
        return view('siswa.detail', compact('siswa'));
    }




    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }





    public function update(Request $request, Siswa $siswa)
    {
         $request->validate([
            'nama' => 'required|string',
            'nrp' => 'required|size:9|unique:Siswa,nrp',
            'email' => 'required|email:rfc,filter|unique:Siswa,email',
            'jurusan' => 'required|string'
        ]);


        Siswa::where('id', $siswa->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/siswa')->with('status', 'Data Berhasil Diubah');
    }






    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/siswa')->with('status', 'Data Berhasil Dihapus');

    }
}
