<?php

namespace App\Http\Controllers;
use App\Models\Panen;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $title="Daftar Panen";
            //Eloquent
            $panens=new Panen;
            $panens=$panens->all();

            //query builder
            // $panens=Panen::getPanen()->get();
            return view('panen',compact('title','panens'));
            
        // $panens=Panen::where('panenID',1)->first();
        // echo $panens->product->productName;
        // dd($panens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('addPanen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'requred'=>'Kolom :attribute harus lengkap',
            'date'=>'Kolom :attribute harus tanggal',
            'numeric'=>'Kolom :attribute harus angka',
        ];
        $validasi=$request->validate([
            'productName'=>'required|unique:panens|max:255',
            'nama_kelompok'=>'required',
            'perkiraanPanendate'=>'required',
            'perkiraanPanenjumlah'=>'required',
            'PanenDate'=>'required',
            'PanenJumlah'=>'required',
        ],$message);
        $validasi['user_id']=Auth::id();
        panen::create($validasi);
        return redirect('panen');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
