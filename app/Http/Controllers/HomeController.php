<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanModel;
use App\Models\TransaksiModel;
use App\Models\PegawaiModel;
use App\Models\BantuanModel;
use App\Models\BentukModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->GuruModel = new GuruModel;
        $this->middleware('auth');
        $this->LaporanModel = new LaporanModel();
        $this->TransaksiModel = new TransaksiModel();
        $this->PegawaiModel = new PegawaiModel();
        $this->BantuanModel = new BantuanModel();
        $this->BentukModel = new BentukModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
        // $data = [
        //     'guru' => $this->GuruModel->allData(),
        // ];
        
        if (auth()->user()->level == 1) {
            return view('v_admin');
        }
        if (auth()->user()->level == 2) {
            
            return view('p_home');

        }
        if (auth()->user()->level == 3) {
            $data = [
                'bentuk' => $this->BentukModel->allData(),
                'bantuan' => $this->BantuanModel->allData(),
            ];
            return view('admin', $data);
        }
        if (auth()->user()->level == 4) {
            $data = [
                'bentuk' => $this->BentukModel->allData(),
                'bantuan' => $this->BantuanModel->allData(),
            ];
            return view('m_home',$data);
        }
        
    }
    
    public function masyarakatView(){
        return view('masyarakat');
    }

    public function laporanAdmin(){
        $data =[ 
                     'laporan' => $this->LaporanModel->allData(),
             ];
        return view('laporanAdmin',$data);
    }
    public function adminLaporan(){
        $data =[ 
                     'laporan' => $this->LaporanModel->allData(),
             ];
        return view('a_laporanAdmin',$data);
    }

    public function laporanPenerima($nip){
        $data =[ 
                     'laporan' => $this->LaporanModel->allDataPenerima($nip),
             ];
        return view('p_laporanAdmin',$data);
    }
    public function laporanMasyarakat(){
        $data =[ 
                     'laporan' => $this->LaporanModel->allData(),
             ];
        return view('m_laporan',$data);
    }

    public function detailLaporanPenerima($id_laporan){
        $data = [
                'laporan' => $this->LaporanModel->detailData($id_laporan),
            ];
        return view('p_detailLaporanPenerima', $data);
    }

    public function updateLaporan($id_laporan){
        $data = [
            'status' => Request()->status
        ];

        $this->LaporanModel->editData($id_laporan,$data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Update');
    }

    public function deleteLaporan($id_laporan){
        $this->LaporanModel->deleteData($id_laporan);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Delete');
    }

    public function transaksiPetugas(){
        $data =[ 
                     'transaksi' => $this->TransaksiModel->allData(),
             ];
        return view('transaksi',$data);
    }
    public function transaksiPenerima(){
        $data =[ 
                     'transaksi' => $this->TransaksiModel->allData(),
             ];
        return view('p_transaksi',$data);
    }

    public function transaksiMasyarakat(){
        $data =[ 
                     'transaksi' => $this->TransaksiModel->allData(),
             ];
        return view('m_transaksi',$data);
    }

    public function transaksiAdmin(){
        $data =[ 
                     'transaksi' => $this->TransaksiModel->allData(),
             ];
        return view('a_transaksi',$data);
    }

    public function transaksiAdd(){
        return view('addTransaksi');
    }
    public function insertTransaksi(){
        Request()->validate([
            'nama_penerima' => 'required|max:255',
            'alamat_penerima' => 'required',
            'nip_penerima' => 'required',
            'jenis_bantuan' => 'required',
        ],[
            'nama_penerima.required' => 'NAMA PENERIMA WAJIB DI ISI!!!',
        ],[
            'alamat_penerima.required' => 'ALAMAT PENERIMA WAJIB DI ISI!!!',
        ],[
            'nip_penerima.required' => 'NIP PENERIMA WAJIB DI ISI!!!',
        ],
        [
            'jenis_bantuan.required' => 'JENIS BANTUAN WAJIB DI ISI!!!',
        ]);

        $data = [
            'nama_penerima' => Request()->nama_penerima,
            'alamat_penerima' => Request()->alamat_penerima,
            'nip_penerima' => Request()->nip_penerima,
            'jenis_bantuan' => Request()->jenis_bantuan
        ];

        $datas = [
            'penerima' => Request()->nama_penerima,
            'keterangan_laporan' => Request()->alamat_penerima,
            'nip' => Request()->nip_penerima,
            'nama_bantuan' => Request()->jenis_bantuan,
            'nama_pengirim' => Request()->nama_pengirim
        ];

        $this->TransaksiModel->addData($data);
        $this->LaporanModel->addData($datas);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Simpan');
    }

    public function deleteTransaksi($id_transaksi){
        $this->TransaksiModel->deleteData($id_transaksi);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Delete');
    }

    public function detailTransaksi($id_transaksi){
        
        
        $data = [
                'transaksi' => $this->TransaksiModel->detailData($id_transaksi),
            ];
            return view('detailTransaksi',$data);
    }
    public function detailTransaksiAdmin($id_transaksi){
        
        
        $data = [
                'transaksi' => $this->TransaksiModel->detailData($id_transaksi),
            ];
            return view('a_detailTransaksi',$data);
    }
    public function detailTransaksiPenerima($id_transaksi){
        
        
        $data = [
                'transaksi' => $this->TransaksiModel->detailData($id_transaksi),
            ];
            return view('p_detailTransaksi',$data);
    }

    public function pegawaiPetugas(){
        $data =[ 
                     'users' => $this->PegawaiModel->allData(),
             ];
        return view('pegawai',$data);
    }

    public function pegawaiAdmin(){
        $data =[ 
                     'users' => $this->PegawaiModel->allData(),
             ];
        return view('a_pegawai',$data);
    }

    public function pegawaiPenerima(){
        $data =[ 
                     'users' => $this->PegawaiModel->allData(),
             ];
        return view('p_pegawai',$data);
    }

    public function detailPegawai($id){
        
        
        $data = [
                'users' => $this->PegawaiModel->detailData($id),
            ];
            return view('detailPegawai',$data);
    }
    public function deletePegawai($id){
        $this->PegawaiModel->deleteData($id);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Delete');
    }
    public function pegawaiAdd(){
        return view('a_addPegawai');
    }

    public function insertPegawai(){
        // Request()->validate([
        //     'lokasi' => 'required|max:255',
        //     'jlh_penerima' => 'required',
        // ],[
        //     'lokasi.required' => 'Lokasi Kecamatan WAJIB DI ISI!!!',
        // ],[
        //     'jlh_penerima.required' => 'JUMLAH PENERIMA WAJIB DI ISI!!!',
        // ]);

        $data = [
            'name' => Request()->name,
            'alamat' => Request()->alamat,
            'jabatan' => Request()->jabatan,
            'nip' => Request()->nip,
            'level' => Request()->level,
            'email' => Request()->email,
            'password' => Hash::make(Request()->password)
        ];

        $this->PegawaiModel->addData($data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Simpan');
    }


    public function deleteBantuan($id_bantuan){
        $this->BantuanModel->deleteData($id_bantuan);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Delete');
    }

    public function bantuanAdd(){
        return view('addBantuan');
    }
    public function insertBantuan(){
        Request()->validate([
            'lokasi' => 'required|max:255',
            'jlh_penerima' => 'required',
        ],[
            'lokasi.required' => 'Lokasi Kecamatan WAJIB DI ISI!!!',
        ],[
            'jlh_penerima.required' => 'JUMLAH PENERIMA WAJIB DI ISI!!!',
        ]);

        $data = [
            'lokasi' => Request()->lokasi,
            'jlh_penerima' => Request()->jlh_penerima
        ];

        $this->BantuanModel->addData($data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Simpan');
    }

    public function editBantuan($id_bantuan){
        $data = [
                'bantuan' => $this->BantuanModel->detailData($id_bantuan),
            ];
        return view('a_editbantuan', $data);
    }

    public function updateBantuan($id_peng){
        Request()->validate([
            'lokasi' => 'required|max:255',
            'jlh_penerima' => 'required',
        ],[
            'lokasi.required' => 'Lokasi Kecamatan WAJIB DI ISI!!!',
        ],[
            'jlh_penerima.required' => 'JUMLAH PENERIMA WAJIB DI ISI!!!',
        ]);


        $data = [
            'lokasi' => Request()->lokasi,
            'jlh_penerima' => Request()->jlh_penerima
        ];

        $this->BantuanModel->editData($id_peng,$data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Update');
    }



    public function bentukAdd(){
        return view('addBentuk');
    }
    public function insertBentuk(){
        Request()->validate([
            'jenis_bb' => 'required|max:255',
            'kapasitas' => 'required',
        ],[
            'jenis_bb.required' => 'Jenis Bantuan WAJIB DI ISI!!!',
        ],[
            'kapasitas.required' => 'Kapasitas WAJIB DI ISI!!!',
        ]);

        $data = [
            'jenis_bb' => Request()->jenis_bb,
            'kapasitas' => Request()->kapasitas
        ];

        $this->BentukModel->addData($data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Simpan');
    }

    public function deleteBentuk($id_bb){
        $this->BentukModel->deleteData($id_bb);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Delete');
    }

    public function editBentuk($id_bantuan){
        $data = [
                'bentuk' => $this->BentukModel->detailData($id_bantuan),
            ];
        return view('a_editbentuk', $data);
    }

    public function updateBentuk($id_bentuk){
        Request()->validate([
            'jenis_bb' => 'required|max:255',
            'kapasitas' => 'required',
        ],[
            'jenis_bb.required' => 'Jenis Bantuan WAJIB DI ISI!!!',
        ],[
            'kapasitas.required' => 'Kapasitas WAJIB DI ISI!!!',
        ]);

        $data = [
            'jenis_bb' => Request()->jenis_bb,
            'kapasitas' => Request()->kapasitas
        ];

        $this->BentukModel->editData($id_bentuk,$data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Simpan');
    }
}
