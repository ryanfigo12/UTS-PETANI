<?php

namespace App\Http\Controllers;
use App\Models\Petani;
use Illuminate\Http\Request;
use App\Models\KelompokTani;
class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="DAFTAR PETANI";
        $petanis=new Petani;
        $petanis=$petanis->all();
        return view('petani',compact('title','petanis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Input Petani";
        $kelompoks=KelompokTani::all();
        return view('inputpetani',compact('title','kelompoks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap', 
            'numeric' => 'Kolom :attribute Harus Angka.', 
            'file'=>'Perhatikan format dan ukuran file'
        ];

        $validasi=$request->validate([ 
            'nik'=>'required|numeric|digits:16', 
            'nama'=>'required',
            'alamat'=>'', 
            'telp'=>'required',
            'foto' => 'required|mimes:png,jpg|max:1024', 
            'id_kelompok_tani'=>'required', 
            'status'=>''
        ], $messages); 
        try {
            //memberikan kombinasi time dan nama file asli untuk nama foto
            $fileName = time().$request->file('foto')->getClientOriginalName();
            //menggunakan fungsi storeAS untuk upload dan mengambil path upload
            $path = $request->file('foto')->storeAs('uploads/petanis',$fileName);
            //menyimpan path upload file pada kolom foto
            $validasi['foto']=$path;
            $response = Petani::create($validasi); return redirect('petani');
            } catch (\Exception $e) { echo $e->getMessage();
            }
            
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
        $title="Input Petani";
        $kelompoks=KelompokTani::all();
        $petani=Petani::find($id); if($petani != NULL){
        $title="Edit Data ".$petani->nama;
        return view('inputpetani',compact('title','kelompoks','petani'));
    }else{
        return view('inputpetani',compact('title','kelompoks'));
    }

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
        $validasi=$request->validate([ 
            'nik'=>'required|numeric', 
            'nama'=>'required', 
            'alamat'=>'', 
            'telp'=>'required',
            'foto' => '', 
            'id_kelompok_tani'=>'required', 
            'status'=>''
        ]);
        try {
            //mengambil kondisi hanya saat file foto diisi 
            if($request->file('foto')){
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/petanis',$fileName);
            $validasi['foto']=$path;
        }
        $response = Petani::find($id);
        $response->update($validasi); return redirect('petani');
    }   catch (\Exception $e) { 
        echo $e->getMessage();
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $petani=Petani::find($id);
            $petani->delete();
            //File::delete($petani->foto); return redirect('petani');
            } catch (\Exception $e) { echo $e->getMessage();
        }
    }
}

