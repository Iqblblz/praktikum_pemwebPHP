<?php
    class mahasiswa_model extends CI_Model{
        //buat properti/variable
        public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;
        
        public function predikat (){
            //contoh penggunaan ternary oprator 
            $predikat = ($this->ipk >= 3.75 ) ? "cumlaude" : "baik";
            return $predikat;
        }
    }








?>