<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class SampahController extends Controller
{
    public function index(Request $request)
    {   
        $search = $request->search;
        $data = (new BaseApi)->index('/api/sampahs', ['search_sampahs' => $search]);
        // dd($data);
        $sampahs = $data->json();
        return view('sampah.index')->with(['sampahs'=> $sampahs['data']]);
    }
    public function create()
    {
        return view ('sampah.create');
    }

    public function delete($id)
    {
        $proses = (new BaseApi)->delete('/api/sampahs/delete/'.$id);

        if ($proses->failed()) {
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/')->with('success', 'Berhasil hapus data sementara dari API');
        }
    }


    public function store (Request $request)
    {
        $total_karung_sampah = $request['total_karung_sampah'];
            if ($total_karung_sampah > 3) {
                $kriteria = "collapse";
            }else {
                $kriteria = "standar";
            }
            $sampahs=[
                'kepala_keluarga' => $request->kepala_keluarga,
                'no_rumah' => $request->no_rumah,
                'rt_rw' => $request->rt_rw,
                'total_karung_sampah' => $request->total_karung_sampah,
                'kriteria' => $kriteria,
                'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
            ];

            $proses = (new BaseApi)->store('/api/sampahs/store',$sampahs);
            if($proses->failed()) {
                $errors=$proses->json('data');
                // dd($)
                return redirect()->back()->with(['errors' => $errors]);
            }else {

                return redirect('/')->with('toast_success','Berhasil Menambahkan Data Baru');
            }
        }

        public function update (Request $request, $id)
    {
        $payload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' =>$request->no_rumah,
            'rt_rw'=>$request->rt_rw,
            'total_karung_sampah' =>$request->total_karung_sampah,
            'tanggal_pengangkutan' =>$request->tanggal_pengangkutan,
        ];

        $response = (new BaseApi)->update('/api/sampahs/update/'. $id, $payload);
        if ($response->failed()) {
            // dd($proses)
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }
        return redirect('/'); 
       
    }

    public function edit ($id) 
    {
        $data = (new BaseApi)->edit('/api/sampahs/'.$id);
        if($data->failed()){
            dd($data);
        $errors = $data->json('data');
        return redirect()->back()->with(['errors' => $errors]);
        }else {
            $sampahs = $data->json('data');
            return view('sampah.edit')->with(['sampahs' => $sampahs]);
        }
    }

    public function onlyTrash()
    {
        $proses = (new BaseApi)->trash('/sampahs/show/trash');
        if ($proses->failed()){
            $errors = $proses->json('data');
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            $ApoteksTrash =
            $proses->json('data');
            return view('trash')->with(['ApoteksTrash' => $ApoteksTrash]);
        }
    }
    
}