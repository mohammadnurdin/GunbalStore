<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Detailpengajuan;
use Illuminate\Http\Request;

class DetailPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $detailpengajuan = Detailpengajuan::with(['barang'])->get();
        // dd($detailpengajuan);
        // // return view('detailpengajuan.index')->with([
        //     'detailpengajuans' => $detailpengajuan,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_pengajuan' => ['required', 'integer'],
        //     'id_barang' => ['required', 'integer'],
        //     'qty' => ['required','integer']
        // ]);
        $jumlah = count($request->input('id_barang'));
        $data = [];
        for ($i = 0; $i < $jumlah; $i++) {
            array_push($data, [
                'id_pengajuan' => $request->input('id_pengajuan'),
                'id_barang' => $request->input('id_barang')[$i],
                'qty'  => $request->input('qty')[$i]
            ]);
        }
        Detailpengajuan::insert($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = Detailpengajuan::findOrFail($id);

        $detail->delete();

        return back();
    }
}
