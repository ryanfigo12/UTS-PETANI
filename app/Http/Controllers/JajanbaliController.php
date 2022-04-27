<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JajanbaliModel;


class JajanbaliController extends Controller
{
    public function __construct()
    {
        $this->JajanbaliModel = new JajanbaliModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'jajanbali' => $this->JajanbaliModel->allData(),
        ];
        return view('jajanbali', $data);
    }

    public function detail($id_jajanbali)
    {
        if (!$this->JajanbaliModel->detailData($id_jajanbali)) {
            abort(404);
        }
        $data = [
            'jajanbali' => $this->JajanbaliModel->detailData(($id_jajanbali)),
        ];
        return view('detailjajanbali', $data);
    }

    public function add()
    {
        return view('addjajanbali');
    }

    public function insert()
    {
        Request()->validate([
            'nama_jajanbali' => 'required|unique:jajanbali,nama_jajanbali|min:1|max:11',
            'harga' => 'required',
            'jumlah' => 'required',
            'foto_jajanbali' => 'required'
        ],[
            'nama_jajanbali.required' => 'wajib di isi',
            'nama_jajanbali.unique' => 'nama jajanbali sudah ada',
            'nama_jajanbali.min' => 'Min 1 Karakter',
            'nama_jajanbali.max' => 'Max 11 Karakter',
            'harga.required' => 'wajib di isi',
            'jumlah.required' => 'wajib di isi',
            'foto_jajanbali.required' => 'wajib di isi',
        ]);
        $file = Request()->foto_jajanbali;
        $fileName = Request()->nama_jajanbali . '.' . $file->extension();
        $file->move(public_path('foto_jajanbali'), $fileName);

        $data = [
            'nama_jajanbali' => Request()->nama_jajanbali,
            'harga' => Request()->harga,
            'jumlah' => Request()->jumlah,
            'foto_jajanbali' => $fileName,
        ];

        $this->JajanbaliModel->addData($data);
        return redirect()->route('jajanbali')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function edit($id_jajanbali)
    {
        if (!$this->JajanbaliModel->detailData($id_jajanbali)) {
            abort(404);
        }
        $data = [
            'jajanbali' => $this->JajanbaliModel->detailData(($id_jajanbali)),
        ];
        return view('editjajanbali', $data);
    }
    public function update($id_jajanbali)
    {
        Request()->validate([
            'nama_jajanbali' => 'required|unique:jajanbali,nama_jajanbali|min:1|max:11',
            'harga' => 'required',
            'jumlah' => 'required',
            'foto_jajanbali' => 'required'
        ],[
            'nama_jajanbali.required' => 'wajib di isi',
            'nama_jajanbali.unique' => 'nama jajanbali sudah ada',
            'nama_jajanbali.min' => 'Min 1 Karakter',
            'nama_jajanbali.max' => 'Max 11 Karakter',
            'harga.required' => 'wajib di isi',
            'jumlah.required' => 'wajib di isi',
            'foto_jajanbali.required' => 'wajib di isi',
        ]);
        $file = Request()->foto_jajanbali;
        $fileName = Request()->nama_jajanbali . '.' . $file->extension();
        $file->move(public_path('foto_jajanbali'), $fileName);

        $data = [
            'nama_jajanbali' => Request()->nama_jajanbali,
            'harga' => Request()->harga,
            'jumlah' => Request()->jumlah,
            'foto_jajanbali' => $fileName,
        ];

        $this->JajanbaliModel->editData($id_jajanbali, $data);
        return redirect()->route('jajanbali')->with('pesan','Data Berhasil Di Tambahkan');
    }
    public function delete($id_jajanbali)
    {
        $this->JajanbaliModel->deleteData($id_jajanbali);
        return redirect()->route('jajanbali')->with('pesan','Data Berhasil Di Hapus');
    }

}