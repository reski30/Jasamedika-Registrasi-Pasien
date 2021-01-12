<?php

namespace App\Http\Controllers;

use App\Kelurahan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        $kelurahan = Kelurahan::all();

        return view('admin.aksi.showdata', compact('kelurahan'));
    }

    public function create()
    {
        return view('admin.aksi.create');
    }

    public function store(Request $request)
    {
        $kelurahan = new Kelurahan([
            // 'nama kolom di database' => $request->inputan dari ('nama field dari form'),
            'kelurahan' => $request->input('namakelurahan'),
            ]);
        $kelurahan->save();

        return redirect('admin');
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('admin.aksi.edit',compact('kelurahan'));
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->kelurahan = $request->input('namakelurahan');
        $kelurahan->save();

        return redirect('admin');
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();
        
        return redirect('admin');
    }
}
