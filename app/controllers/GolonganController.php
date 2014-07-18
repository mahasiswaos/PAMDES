<?php

namespace App\Controllers;

use App\Controllers\AdminController;
use App\Models\golongan;
use View;
use Input;

use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Crypt;



class GolonganController extends AdminController {
    public function golonganView() {
        $input = golongan::all();
        $data = [
            'isi' => $input,
        ];
        return View::make('golongan.view', $data);
    }
    /**
     * 
     * @return View
     */
    public function GolonganAdd() {
        return View::make('golongan.add');
    }

    /**
     * 
     * @return Redirect
     */
    public function prosesAdd() {
        $rules = [
            'nama' => 'required',
            'tarif' => 'required',
            'biaya_administrasi' => 'required',
            'biaya_pemeliharaan' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/golongan/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            
            $gol = new golongan;
            $in = Input::all();
            $gol->nama = $in['nama'];
            $gol->tarif =$in ['tarif'];
            $gol->biaya_administrasi = $in['biaya_administrasi'];
            $gol->biaya_pemeliharaan = $in['biaya_pemeliharaan'];
            $gol->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Successfully created band!');
            return Redirect::to('/golongan/view');
        }
    }

    
    public function golonganEdit($id) {
        $gol = golongan::find($id);
        $data = [
            'isi' => $gol,
        ];
        return View::make('golongan.edit', $data);
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
            'tarif' => 'required',
            'biaya_administrasi' => 'required',
            'biaya_pemeliharaan' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        // jika tidak valid redirect ke halaman edit
        if ($validator->fails()) {
            return Redirect::to("/golongan/edit/" . $id)
                            ->withErrors($validator);
        } else {           
            // jika valid disimpan
            $in = Input::all();
            $gol = golongan::find ($id);
            $gol->nama = $in['nama'];
            $gol->tarif = $in['tarif'];
            $gol->biaya_administrasi = $in['biaya_administrasi'];
            $gol->biaya_pemeliharaan = $in['biaya_pemeliharaan'];
            $gol ->save();
            // redirect ke halaman band index
            Session::flash('message', 'Successfully updated Users!');
            return Redirect::to('/golongan/view');
        }
    }

    
    public function golonganDelete($id) {
        $gol = golongan::find($id);
        $gol->delete();
        Session::flash('message', 'Successfully deleted the Users!');
        return Redirect::to('/golongan/view');
    }

}
