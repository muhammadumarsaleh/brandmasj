<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MasjidRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masjids = DB::table('masjid')->where('user_id', '=', Auth::user()->id)->get();

        return view('pages.masjid.index', [
            'masjids' => $masjids
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masjid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasjidRequest $request)
    {
        $request->request->add(['user_id' => Auth::user()->id]);
        $masjid = Masjid::create($request->all());
        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('images');
            $masjid->gambar = $path;
            $masjid->save(); 
        }

        return Redirect::route('masjid.index')->with('sukses', 'Product berhasil ditambahkan');;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show(Masjid $masjid)
    {
        return view('pages.masjid.detail', [
            'masjid' => $masjid
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Masjid $masjid)
    {
        return view('pages.masjid.edit', [
            'item' => $masjid
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MasjidRequest $request, Masjid $masjid)
    {

        $pathpoto = $masjid->gambar;
        if($pathpoto != null || $pathpoto != ''){
            Storage::delete($pathpoto);
        }

        $masjid->update($request->all());
        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('images');
            $masjid->gambar = $path;
            $masjid->save();
        }

        return redirect::route('masjid.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masjid $masjid)
    {
        $pathpoto = $masjid->gambar;
        if($pathpoto != null || $pathpoto != ''){
            Storage::delete($pathpoto);
        }
        $masjid->delete();

        return redirect()->route('masjid.index');
    }
}

