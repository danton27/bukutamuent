<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelsMaster;
use test\Mockery\ReturnTypeObjectTypeHint;

class Master extends Controller
{
    public function index(){
 //       $clients = DB::table('clientbook')->get();
//        DB::table('clientbook')->insert([
//            ['nama'=> 'fauzi',
//                'nrp'=> '4210181005',
//                'nohp'=> '085546756534',
//                'email'=>'rizael.ichigo28@gmail.com',
//                'keterangan'=>'tidak bisa akses elearning',
//                'petugas'=> 'titis']
//        ]);
//        ModelsMaster::create([
//            'nama'=> 'Muhammad Rizal Fauzi Wahyu Putra',
//            'nrp'=> '4210181032',
//            'nohp'=> '087768756757',
//            'email'=> 'rizael.ichigo28@gmail.com',
//            'keterangan'=> 'tidak bisa akses email cas dan elearning',
//            'petugas'=> 'maulid'
//        ]);
//        $model = ModelsMaster::find(9)->update([
//            'nama' => 'Balqis Fadhilah Ariani',
//            'nrp' => '4210181011',
//            'nohp' => '087768879655',
//            'email' => 'balqis@gt.student.pens.ac.id',
//            'keterangan' => 'sensekuuu',
//            'petugas' => 'fauzi'
//        ]);
//        if(!$model){
//            abort(404);
//       }
        $clients = ModelsMaster::latest()->paginate(5);
        return view('admin/pages/table_dynamic',['clients'=>$clients]);
    }
    public function show($id){
        $clients = ModelsMaster::find($id);
        if(!$clients)
            abort(404);
        return view('admin/pages/detail_table',['clients'=> $clients]);
    }
    public function  create(){
        return view('admin/pages/createform');
    }
    public function store(Request $request){
            ModelsMaster::create([
                'nama' => $request->namalengkap,
                'nrp' => $request->nrp,
                'nohp' => $request->nomerhp,
                'email' => $request->emailclient,
                'keterangan' => $request->keterangan,
                'petugas' => $request->petugas,
                'proses' => $request->proses
            ]);
        return redirect('/');
    }
    public function search(Request $request){
        $clients = \App\Models\ModelsMaster::search($request)->paginate(10);
        if(!$clients)
            abort(404);
        return view('admin/pages/table_dynamic_search', ['clients' => $clients]);
    }
    public function edit($id){
        $model = ModelsMaster::find($id);
        if(!$model)
            abort(404);
        return view('admin/pages/formupdate',['model'=> $model]);
    }
    public function update(Request $request, $id){
        ModelsMaster::find($id)->update([
            'nama' => $request->namalengkap,
            'nrp' => $request->nrp,
            'nohp' => $request->nomerhp,
            'email' => $request->emailclient,
            'keterangan' => $request->keterangan,
            'petugas' => $request->petugas,
            'proses' => $request->proses
        ]);
        return redirect('form/'. $id);
    }
    public function deleted($id){
        ModelsMaster::find($id)->delete();
        return redirect('/');
    }
}
