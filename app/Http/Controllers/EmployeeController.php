<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\MagicConst\Function_;

class EmployeeController extends Controller
{
    public Function index(){
        $data = Employee::all();
        return view('datapelanggan', compact('data'));
    }

    public Function tambahpelanggan(){
        return view('tambahdata');
    }

    public Function insertdata(Request $request){
        // dd($request->all());
        Employee::create($request->all());
        return redirect()->route('pelanggan')->with('success','Data berhasil ditambahkan');
    }

    public Function tampilkandata($id){
        $data = Employee::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pelanggan')->with('success','Data berhasil diupdate');
    }

    public function delete(Request $request, $id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pelanggan')->with('success','Data berhasil dihapus');
    }
    
}
