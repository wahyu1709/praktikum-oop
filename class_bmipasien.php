<?php

    class BmiPasien{
        public $nama;
        public $umur;
        public $jns_klm;
        public $berat;
        public $tinggi;

        function __construct()
        {
            $this->nama = isset($_POST['nama'])?$_POST['nama'] : null;
            $this->umur = isset($_POST['umur'])?$_POST['umur'] : null;
            $this->jns_klm = isset($_POST['jenis_kelamin'])?$_POST['jenis_kelamin'] : null;
            $this->berat = isset($_POST['berat'])?$_POST['berat'] :null;
            $this->tinggi = isset($_POST['tinggi'])?$_POST['tinggi'] : null;
        }

        function hasilBMI(){
            echo "nama". $this->nama.'<br>';
            echo 'umur'. $this->umur.'<br>';
            echo 'jenis kelamin'. $this->jns_klm.'<br>';
            echo 'berat'. $this->berat.'<br>';
            echo 'tinggi'. $this->tinggi.'<br>';
        }

        function statusBMI($bmi){
            if( $bmi >= 30){
                return "Kegemukan (Obesitas)";
            }
            elseif($bmi >= 25.0){
                return "Kelebihan Berat Badan";
            }
            elseif($bmi >= 18.5){
                return "Normal (ideal)";
            }
            else{
                return "Kekurangan Berat Badan";
            }
        }

        
    }


$list4 = new bmiPasien();
?>
