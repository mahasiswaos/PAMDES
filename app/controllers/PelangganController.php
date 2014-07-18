<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use App\Models\pelanggan;
use View;
use Input;
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Crypt;
use App\Models\golongan;
use Illuminate\Support\Facades\Paginator;


class PelangganController extends AdminController {
   public function pelangganView() {
       // $pel = pelanggan::all();
       $pelanggan = pelanggan::all();
        $data = [
            'isi_pelanggan' => $pelanggan,
        ];
        return View::make('pelanggan.view', $data);
    }
    public function pelangganAdd() {
      
        $gol = golongan::all();
        $data =['isi_golongan'=>$gol];
        return View::make('pelanggan.add', $data);
        
    }
    /**
     * 
     * @return Redirect
     */
    public function prosesAdd() {
        $rules = [
            
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'golongan_id' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/pelanggan/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            
            $pel = new pelanggan ;
            $in = Input::all();
            
            $pel->nama =$in ['nama'];
            $pel->alamat = $in['alamat'];
            $pel->no_hp = $in['no_hp'];
            $pel->golongan_id = $in['golongan_id'];
            $pel->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('/pelanggan/view');
        }
    }

    
    public function pelangganEdit($id) {
        $pel = pelanggan::find($id);
        $data = [
            'isi' => $pel,
        ];
        return View::make('pelanggan.edit', $data);
    }

    /**
     * 
     * @param type $id
     * @return Redirect
     */
    public function prosesUpdate($id) {
        // validation
        $rules = array(
            
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'golongan_id' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        // jika tidak valid redirect ke halaman edit
        if ($validator->fails()) {
            return Redirect::to("/pelanggan/edit/" . $id)
                            ->withErrors($validator);
        } else {
            // jika valid disimpan
            $in = Input::all();
            $pel = pelanggan::find($id);
            
            $pel ->nama = $in['nama'];
            $pel ->alamat = $in['alamat'];
            $pel ->no_hp = $in['no_hp'];
            $pel ->golongan_id = $in['golongan_id'];
            $pel ->save();
            // redirect ke halaman band index
            Session::flash('message', 'Successfully updated Users!');
            return Redirect::to('/pelanggan/view');
        }
    }

    
    public function pelangganDelete($id) {
        $pel = Pelanggan::find($id);
        $pel->delete();
        Session::flash('message', 'Successfully deleted the Users!');
        return Redirect::to('/pelanggan/view');
    }

}


