<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class PostsController extends Controller
{
        public function index(){
            // $admins = admin::all();
            $admins = admin::all();

            $view_data = [
                'admins' => $admins
            ];
            // $admins = [
            //     admin::all(); 
            // ]

            return View('list ', $view_data);
            // return View::make('list ', compact('admins'));
    
            // return response()->json([
            //     'message' => 'Data Berhasil Diambil',
            //     'code' => 200,
            //     'data' => $admins
            // ]);
        }
    
        public function show($id){
            $admins = admin::find($id);
            $view_data = [
                'admins' => $admins
            ];
            return view('editdata', $view_data);
        }
 
    public function store(Request $request){
        $data = $request->validate([
            'nip' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'golongan' => 'required|numeric',
            'password' => 'required',
        ]);

        $admin= new admin;
        $admin->nip = $request->nip;
        $admin->nama = $request->nama;
        $admin->alamat = $request->alamat;
        $admin->golongan = $request->golongan;
        $admin->password = $request->password;
        if($admin->save())
        {
            return redirect('admins/input/')->with('status','Data berhasil diinput');
        }else
        {
            return redirect('admins/input/')->with('status','Data gagal diinput');
        }   
    }
    public function input(){
        return view('tambahkaryawan');
    }
    public function edit(){
        // $admins = admin::all();
        $admins = admin::all();

        $view_data = [
            'admins' => $admins
        ];
        // $admins = [
        //     admin::all(); 
        // ]

        return View('editkaryawan ', $view_data);
        // return View::make('list ', compact('admins'));

        // return response()->json([
        //     'message' => 'Data Berhasil Diambil',
        //     'code' => 200,
        //     'data' => $admins
        // ]);
    }
  public function delete($id){
    $admins = admin::find($id);
    $admins->delete();
    return redirect('admins/edit/')->with('status','data berhasil dihapus');
    
}
public function new(Request $request, $id){
    $admins = admin::find($id);
    $admins->update($request->all());
    return redirect('admins/edit/')->with('status','data berhasil diperbarui');

  }
    }


