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
    echo Teacher::getAge("18TH1");
    $st = new Student;
    $st->KhoaHoc('DuyKhanh','18TH1','Công nghệ web');

?>