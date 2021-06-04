<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.home',compact('data'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->pas_foto != NULL) {
            $imgname = $request->pas_foto->getClientOriginalName();
            $request->pas_foto->move(public_path('images'), $imgname);
        }else{
            $imgname = NULL;
        }

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'pas_foto' => $imgname,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_edit = Siswa::where('id', $id)->first();
        return view('siswa.edit', compact('data_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Siswa::where('id', $id)->first();
        if ($request->pas_foto != NULL) {
            $imgname = $request->pas_foto->getClientOriginalName();
            $request->pas_foto->move(public_path('images'), $imgname);
        }else{
            $imgname = $data->pas_foto;
        }

        Siswa::find($id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'pas_foto' => $imgname,
        ]);

        return redirect()->route('home');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Siswa::destroy($id);
        return redirect()->route('home')->with('status-danger', 'Data Berhasil di Delete !');;
    }
}
