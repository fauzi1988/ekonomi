<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index', [
            'beritas' => Berita::all()->sortByDesc('id')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validasi = $request->validate([
            'judul' => 'required',
            'slug' => 'required',
            'penulis' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]); 

        if($request->file('image')) {
            $validasi['image'] = $request->file('image')->store('post-images');
        }

        $validasi['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Berita::create($validasi);

        return redirect('berita_i')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beritas=Berita::find($id);
        return view('admin.berita.show', compact('beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        /*
        return view('admin.berita.edit', [
            'berita' => $berita,
            'beritas' => Berita::all()
        ]);
        */
        

        $beritas=Berita::find($id);
        return view('admin.berita.edit', compact('beritas'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {

        $beritas=Berita::whereId($id)->first();
        $beritas->update([
            'judul'=>$request->judul,
            'slug'=>$request->slug,
            'body'=>$request->body,
            'penulis'=>$request->penulis,
        ]);
        return redirect('berita_i')->with('success','Data berhasil diubah');

        /*
        $validasi = $request->validate([
            'judul' => 'required',
            'slug' => 'required',
            'penulis' => 'required',
            'body' => 'required'
        ]); 


        Berita::where('id', $berita->id)
        ->update($validasi);

        return redirect('berita_i')->with('success','Data berhasil diubah');
        */

        /*
       
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::whereId($id)->delete();

        return redirect('berita_i')->with('success','Data berhasil dihapus');
    }

}
