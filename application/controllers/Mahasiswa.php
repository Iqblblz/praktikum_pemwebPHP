<?php
    class Mahasiswa extends CI_Controller{
        //membuat method index
        public function index(){
            $this->load->model('mahasiswa_model', 'mhs1');
        
        //buat object model 1 dan nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim='0110121276';
        $this->mhs1->nama='iqbal';
        $this->mhs1->gender='laki-laki';
        $this->mhs1->ipk=3.90;


            $this->load->model('mahasiswa_model', 'mhs2');
        //buat object model 2 dan nilainya
        $this->mhs2->id=2;
        $this->mhs2->nim='02222222';
        $this->mhs2->nama='luna';
        $this->mhs2->gender='perempuan';
        $this->mhs2->ipk=3.68;

        //simpan object yang kita buat kedalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        //simpan data untuk dikirim kedalam view, dimana datanya di ambil dari object yang kita simpan ke dalam array
        $data['list-mhs'] = $list_mhs;
        //render data dan kirim data kedalam view 
        $this->load->view('mahasiswa/index', $data);


        }
    }
        //method dosen
    class dosen extends CI_Controller{
        public function dosen(){
            $this->load->model('Dosen_model', 'dsn1');

        $this->dsn1->nidn='0221221';
        $this->dsn1->pendidikan='S2';

        $this->load->model('Dosen_model', 'dsn2');

        $this->dsn2->nidn='0223223';
        $this->dsn2->pendidikan='S2';

        $this->load->model('Dosen_model', 'dsn3');

        $this->dsn3->nidn='0225224';
        $this->dsn3->pendidikan='S2';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list-dsn'] = $list_dsn;

        $this->load->view('dosen/index', $data);
        }
    }
    
    class matkul extends CI_Controller{
        public function matkul(){
            $this->load->model('Matakuliah_model', 'matkul1');
        
        $this->matkul1->nama='pemograman web';
        $this->matkul1->sks=3;
        $this->matkul1->kode='002';

        $this->load->model('Matakuliah_model', 'matkul2');
        
        $this->matkul2->nama='basis_data';
        $this->matkul2->sks=4;
        $this->matkul2->kode='004';

        $list_matkul = [$this->matkul1, $this->matkul2];
        $data['list_matkul'] = $list_matkul;

        $this->load->view('matkul/index', $data);
        }
    }


?>