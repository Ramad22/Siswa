<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
   
    public function index(Request $request){

        if($request->has('search')){
            $data = Employee::where('nama','LIKE','%' .$request->search.'%')->paginate(3);
        }
        else{
            $data = Employee::paginate(3);  
        }
        // $data = Employee::paginate(3);
        return view('datasiswa',['data' => $data]);
    }

    public function tambahsiswa(){
        return view('tambahdata');
    }
    public function Super(){
        return view('Super');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        $data = Employee::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('fotosiswa/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('siswa')->with('p','Berhasil Gan');
    }
    public function tampilkandata($id){
        $data = Employee::find($id);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request,$id){
        $data = Employee::find($id);
        $data->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('fotosiswa/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('siswa')->with('p','Berhasil di Edit Gan');
    }

    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('p','Terhapus Gan');

    }

    public function Login(){
        return view('Login');
    }
    public function Regis(){
        return view('Regis');
    }

   
    
    
    
}
