<?php
    class Teacher{
        public $course;
        protected $ten;
        protected $lop;
        protected $monhoc;
        public static function getAge($lop){
            echo "OK";
        } 
        public function KhoaHoc($ten,$lop,$monhoc){
            echo "<pre>";
            echo $this->ten = $ten,
                $this->lop = $lop,
                $this->monhoc = $monhoc;
            echo "</pre>";
        }
        
    }
    class Student extends Teacher{
    }
    // Abstact class
    abstract class Data{
        public function CongHieu(){

        }
        abstract public function DuyKhanh();
    }
    class Dt extends Data{
        public function DuyKhanh(){
            echo "Đây là function kế thừa từ abstact class";
        }
    }
    // Interface
    interface Model{
        public function Setname();
        const Connguoi = "OK";
    }
    class MD implements Model{
        public function Setname(){
            echo "Đây là class kế thừa từ interface";
        }
    }
    echo Teacher::getAge("18TH1");
    $st = new Student;
    $st->KhoaHoc('DuyKhanh','18TH1','Công nghệ web');
    $itf = new MD;
   echo $ift->Setname();

?>