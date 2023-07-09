<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Buku::all();
        return view('buku.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'buku_no' => 'bail|required|unique:buku',
                'buku_judul' => 'required'
            ],
            [
                'buku_no.required' => 'Nomor wajib diisi',
                'buku_no.unique' => 'Judul sudah ada',
                'buku_judul.required' => 'Nama wajib diisi'
            ]
        );

        Buku::create([
            'buku_no' => $request->buku_no,
            'buku_judul' => $request->buku_judul,
            'buku_penulis' => $request->buku_penulis,
            'buku_penerbit' => $request->buku_penerbit,
            'buku_tahun' => $request->buku_tahun
        ]);

        return redirect('buku');
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
        $row = Buku::findOrFail($id);
        return view('buku.edit', compact('row'));
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
        $request->validate(
            [
                'buku_no' => 'bail|required',
                'buku_judul' => 'required'
            ],
            [
                'buku_no.required' => 'Nomor wajib diisi',
                'buku_judul.required' => 'Judul wajib diisi'
            ]
        );

        $row = Buku::findOrFail($id);
        $row->update([
            'buku_no' => $request->buku_no,
            'buku_judul' => $request->buku_judul,
            'buku_penulis' => $request->buku_penulis,
            'buku_penerbit' => $request->buku_penerbit,
            'buku_tahun' => $request->buku_tahun
        ]);

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Buku::findOrFail($id);
        $row->delete();

        return redirect('buku');
    }
    public function search(Request $request)
    {
    $keyword = $request->search;
    $rows = Buku::where('buku_judul', 'like', "%" . $keyword . "%")->paginate(5);
    return view('buku.index', compact('rows'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}