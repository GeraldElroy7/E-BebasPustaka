<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use Mail;
use App\Models\Mahasiswa;
use App\Models\Admin;
use App\Models\Ajuan;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
  public function index()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = Mahasiswa::all();
      
      return view ('admin.index', compact(['admin', 'mahasiswa']));
  }    

  public function validasi()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = Mahasiswa::all();
      
      return view ('admin.validasi', compact(['admin', 'mahasiswa']));
  } 

  public function caraterima()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = Mahasiswa::all();
      
      return view ('admin.caraterima', compact(['admin', 'mahasiswa']));
  } 

  public function tanggungan()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = Mahasiswa::all();
      
      return view ('admin.tanggungan', compact(['admin', 'mahasiswa']));
  } 

  public function suratbebas()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = Mahasiswa::all();
      
      return view ('admin.suratbebas', compact(['admin', 'mahasiswa']));
  } 

  public function detail($id)
  {
      $mahasiswa = Mahasiswa::find($id);

      return response()->json($mahasiswa);
  }
}
