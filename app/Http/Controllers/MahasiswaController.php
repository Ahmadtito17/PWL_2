<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\Mahasiswa;
use App\Models\mahasiswa_matkul;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.mahasiswa');
    }

    public function data()
    {
        $data = MahasiswaModel::selectRaw('id, nim, nama, hp');

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all();
        return view('mahasiswa.create_mahasiswa')
                     ->with('url_form', url('/mahasiswa'))
                     ->with('kelas', $kelas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show_old($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.detail_mahasiswa')
            ->with('mahasiswa', $mahasiswa);
    }

    public function show($id)
    {
        $mahasiswa = MahasiswaModel::find($id);

        if ($mahasiswa) {
            return response()->json($mahasiswa);

        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = KelasModel::all();
        $mhs = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa')
                    ->with('mhs', $mhs)
                    ->with('url_form', url('/mahasiswa/'. $id))
                    ->with('kelas', $kelas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs)? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy_old($id)
    {
        MahasiswaModel::where('id', $id)->delete();
        return redirect('mahasiswa')
            ->with('Success', 'Mahasiswa Berhasil Dihapus');
    }
    
    public function destroy($id){
        $mhs = MahasiswaModel::where('id', $id)->delete();
        return response()->json([
            'status' => ($mhs),
            'message' => ($mhs)? 'Data berhasil dihapus' : 'Data gagal dihapus',
            'data' => null
        ]);
    }

    public function nilai($id)
    {
        $mahasiswa = MahasiswaModel::where('id',$id)->first();
        $nilai = mahasiswa_matkul::where('mahasiswa_id',$id)->get();
        return view('mahasiswa.nilai_mahasiswa')
                ->with('mahasiswa', $mahasiswa)
                ->with('nilai', $nilai);
    }
}
