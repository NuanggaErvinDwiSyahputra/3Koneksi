<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use PDF;

class RegisterController extends Controller
{
    public function index()
    {
        $register = Register::all();
        return view('admin', compact('register'));
    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'perusahaan'=> 'required',
            'alamat'=> 'required',
            'telepon'=> 'required',
            'email'=> 'required',
            'totalhargastand'=> 'required',
            'totalhargapromosi'=> 'required',
            'paketsponsor'=> 'required',
        
        ]);

        Register::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'totalhargastand' => $request->totalhargastand,
            'totalhargapromosi' => $request->totalhargapromosi,
            'paketsponsor' => $request->paketsponsor,
        ]);

        return redirect()->route('home');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validated = $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
            'instansi'=> 'required',
            'alamat'=> 'required',
            'telepon'=> 'required',
            'email'=> 'required',
            'totalhargastand'=> 'required',
            'totalhargapromosi'=> 'required',
            'paketsponsor'=> 'required',
        ]);
        $data= Register::find($id);       
        $data->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'instansi' => $request->instansi,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'totalhargastand' => $request->totalhargastand,
            'totalhargapromosi' => $request->totalhargapromosi,
            'paketsponsor' => $request->paketsponsor,
        ]);
        return redirect()->route('register');
    }
    public function destroy(string $id)
    {
        $data = Register::find($id);
        $data->delete();
        return redirect()->route('admin');
    }
    public function exportpdf(){
        $data = Register::all();
        $PDF = PDF::loadView('admin-cetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-register.pdf');
    }
}
