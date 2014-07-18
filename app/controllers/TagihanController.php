<?php
namespace App\Controllers;

use App\Controllers\AdminController;
use View;
use Input;
use App\Models\tagihan;
use App\Models\pelanggan;
use Validator;
use Session;
use Redirect;

class TagihanController extends AdminController{
    public function tagihanView() {
        $tag = tagihan::all();
        $data = ['isi_tagihan' => $tag ];
        return View::make('tagihan.view', $data);
    }
    
    public function tagihanAdd() {
        $pel = pelanggan::all();
        $data = ['isi_pelanggan' => $pel ];
        return View::make('tagihan.add', $data);
    }
    
        public function prosesAdd() {
        $rules = [
            'bulan_tahun' => 'required',
            'pelanggan_id' => 'required',
            'golongan_id' => 'required',
            'tarif' => 'required',
            'meter_awal' => 'required',
            'meter_akhir' => 'required',
            'pakai' => 'required',
            'tagihan_air' => 'required',
            'biaya_administrasi' => 'required',
            'biaya_pemeliharaan' => 'required',
            'total_tagihan' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
        /*
         * jika tidak valid redirect kembali ke halaman create
         */
        if ($validator->fails()) {
            return Redirect::to('/tagihan/add')->withErrors($validator);
        } else {
            /*
             * jika valid simpan ke database
             */
            
            $tag = new tagihan;
            $in = Input::all();
            $tag->bulan_tahun = $in['bulan_tahun'];
            $tag->pelanggan_id = $in['pelanggan_id'];
            $tag->golongan_id = $in['golongan_id'];
            $tag->tarif =$in ['tarif'];
            $tag->meter_awal = $in['meter_awal'];
            $tag->meter_akhir = $in['meter_akhir'];
            $tag->pakai = $in['pakai'];
            $tag->tagihan_air = $in['tagihan_air'];
            $tag->biaya_administrasi = $in['biaya_administrasi'];
            $tag->biaya_pemeliharaan = $in['biaya_pemeliharaan'];
            $tag->total_tagihan = $in['total_tagihan'];
            $tag->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Data Berhasil di Simpan!');
            return Redirect::to('/tagihan/view');
        }
    }

  public function tagihanEdit($id) {
        $tag = tagihan::find($id);
        $pel = $tag->pelanggan;
        $data = [
            'isi_pelanggan' => $pel,
            'isi_tagihan' => $tag,
        ];
        return View::make('tagihan.edit', $data);
  }
  
  public function prosesUpdate($id) {
        
            /*
             * jika valid simpan ke database
             */
            $in = Input::all();
            $tag = tagihan::find($id);
            $tag->bulan_tahun = $in['bulan_tahun'];
            $tag->pelanggan_id = $in['pelanggan_id'];
            $tag->golongan_id = $in['golongan_id'];
            $tag->tarif =$in ['tarif'];
            $tag->meter_awal = $in['meter_awal'];
            $tag->meter_akhir = $in['meter_akhir'];
            $tag->pakai = $in['pakai'];
            $tag->tagihan_air = $in['tagihan_air'];
            $tag->biaya_administrasi = $in['biaya_administrasi'];
            $tag->biaya_pemeliharaan = $in['biaya_pemeliharaan'];
            $tag->total_tagihan = $in['total_tagihan'];
            $tag->save();
            /*
             * redirect ke index bands
             */
            Session::flash('message', 'Data berhasil di Ubah!');
            return Redirect::to('/tagihan/view');
        }
        
    public function tagihanDelete($id) {
        $tag = tagihan::find($id);
        $tag->delete();
        Session::flash('message', 'Data berhasil Dihapus!');
        return Redirect::to('tagihan/view');
    }
}
