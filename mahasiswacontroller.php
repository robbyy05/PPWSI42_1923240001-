<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use Illuminate/support\facades\DB;

class mahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::insert('insert into mahasiswa(npm, nama_mahasiswa, tempat_lahir, tanggal_lahir,
        alamat, created_at) values (?, ?, ?, ?, ?, ?)',['1923240001','robby', 'palembang','2000-07-08','jl. kimas rindo', now()]);
        dump($result);
    }

    public function update()
    {
        $result = DB::insert('update mahasiswas set nama_mahasiswa = "ali", updated_at= now() where npm = ?', ['1923240001']);
        dump($result);
    }
    public function delete()
    {
        $result = DB::delete('delete from mahasiswa where npm = ?',['1923240001']);
        dump($result);
    }

    public function select()
    {
        $kampus = "universitas data palembang";
        $result = DB::select('select * from mahasiswa');
        // dump($result)
        return view('mahasiswa.index', ['allmahasiswa' => $result, 'kampus', => $kampus]);
    }
}
    public function isertqb()
    {
        $result = DB::table('mahasiswa')->insert(
            [
                'npm' => '1923240001'
                'nama_mahasiswa' => 'umur',
                'tempat_lahir' => 'jakarta',
                'tanggal_lahir' => '2000-07-08',
                'alamat' => 'jl. kimas rindo',
                'created-at' => now()
            ]
        );
        dump($result);
    }

    public function updateqb()
    {
        $result = DB::table('mahasiswa')->insert(
            ->where('npm', '19232440001')
            ->update(
            [
               'nama_mahasiswa'=> 'usman',
               'updated_at' => now()
            ]
        );
        dump($result);
    }
    
    public function deleteqb()
    {
        $result = DB::table('mahasiswas')
            ->where('npm', '1923240001')
            ->delete();
        dump($result);
    }

    public function selectqb()
    {
        $kampus = "universitas multi data palembang"
        $result = DB::table('mahasiswa')
        //dump($result)
        return view('mahasiswa.index', ['allmahasiswa' => $result, 'kampus' => $kampus]);
    }


    public function insertElq()
    {
        $mahasiswa = new Mahasiswa; // instalasi class mahasiswa
        $mahasiswa->npm = '1923240001'; // isi property
        $mahasiswa->nama_mahasiswa = 'zainab';
        $mahasiswa->tempat_lahir = 'bandung';
        $mahasiswa->tanggal_lahir = '2002-01-01';
        $mahasiswa->alamat = 'jl. Bambang Utoyo';
        $mahasiswa->save(); // menyimpan data ke tabel mahasiswas
        dump($mahasiswa); // melihat isi $mahasiswa
    }

    public function updateElq()
    {
        $mahasiswa = mahasiswa::where('npm', '1923240001')->frist(); // cari data tabel mahasiswa berdarkan npm
        $mahasiswa->nama_mahasiswa = 'khadijah';
        $mahasiswa->save(); // menyimpan data ke tabel mahasiswas
        dump($mahasiswa);// melihat isi $mahasiswa
    }

    public function deleteElq()
    {
        $mahasiswa = mahasiswa::where('npm','1923240001')->first()//cari data tabel mahasiswa berdarkan npm
        $mahasiswa->delete();// hapus data npm 1923240001
        dump($mahasiswa); // melihat isi $mahasiswa
    }

    public function selectElq()
    {
        $kampus = "universitas multi data palembang";
        $mahasiswa = mahasiswa::all();
        // dump($allmahasiswa);
        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswa, 'kampus'=>$kampus]);
        
    }
}
