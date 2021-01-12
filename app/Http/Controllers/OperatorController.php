<?php

namespace App\Http\Controllers;

use AddIdpasienOnPasienTable;
use App\Pasien;
use Illuminate\Http\Request;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Swift_IdGenerator;
use Swift_Mime_IdGenerator;

class OperatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:operator');
    }

    public function index()
    {
        $pasien = Pasien::all();

        return view('operator.aksi.showdata', compact('pasien'));
    }

    public function create()
    {
        return view('operator.aksi.create');
    }

    public function store(Request $request)
    {
      
        $noid = IdGenerator::generate([
            'table' => 'pasiens', 'length' => 10, 'prefix' => date('ym')
            ]);

        $totalpasien = Pasien::count(); // hitung total pasien

        $idpasien = $noid + $totalpasien;
        
        $pasien = new Pasien([
            // 'nama kolom di database' => $request->inputan dari ('nama field dari form'),
            'idpasien' => $idpasien,
            'nama' => $request->input('nama'),
            'tgl'  => $request->input('tgl'),
            'jk'   => $request->input('jk'),
            'alamat' => $request->input('alamat'),
            'nohp' => $request->input('nohp'),
            'rtrw' => $request->input('rtrw'),
            'kel' => $request->input('kel'),
            'kec' => $request->input('kec'),
            'kota' => $request->input('kota'),
            ]);
        $pasien->save();

        // dd($idpasien);

        return redirect('operator');
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('operator.aksi.edit',compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);
            $pasien->nama = $request->input('nama');
            $pasien->tgl = $request->input('tgl');
            $pasien->jk = $request->input('jk');
            $pasien->alamat = $request->input('alamat');
            $pasien->nohp = $request->input('nohp');
            $pasien->rtrw = $request->input('rtrw');
            $pasien->kel = $request->input('kel');
            $pasien->kec = $request->input('kec');
            $pasien->kota = $request->input('kota');

        $pasien->save();

        return redirect('operator');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        
        return redirect('operator');
    }

    public function kartu($id)
    {
        $pasien = Pasien::find($id);
        return view('operator.aksi.kartu',compact('pasien') );

        // $pdf = PDF::loadView('operator.aksi.kartu', compact('pasien'))->setPaper('a4', 'portrait');
        // return $pdf->stream();
    }

    public function cetak($id)
    {
        $pasien = Pasien::find($id);
        $pdf = PDF::loadView('operator.aksi.kartu', compact('pasien'))->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
