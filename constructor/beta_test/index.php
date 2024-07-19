<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar constructor</title>
</head>
<body>
    <h1> Belajar constructor</h1>

    <?php
        class user {
            //properti global
            public $id , $name , $age , $addres;
            
            //melakukan konstruksi
            public function __construct( $id = null , $name = null , $age = null , $addres = null)
            {
                $this->id=$id;
                $this->name=$name;
                $this->age=$age;
                $this->addres=$addres;
            }
        }

        class students{
            public $id , $nama , $nilai_pbo , $nilai_web , $nilai_pkk;

            public function __construct($datastudents = []) { 
                $this->id            = $datastudents['id'] ?? null;
                $this->nama          = $datastudents['nama'] ?? null;
                $this->nilai_pbo     = $datastudents['nilai_pbo'] ?? null;
                $this->nilai_web     = $datastudents['nilai_web'] ?? null;
                $this->nilai_pkk     = $datastudents['nilai_pkk'] ?? null;
            }
        
        }

        $datastudents = [
            [
                'id' =>1 ,
                'nama' => 'Asep',
                'nilai_pbo' =>69 , 
                'nilai_web' =>100, 
                'nilai_pkk' =>69
            ],
            [
                'id' =>2 ,
                'nama' => 'asfdasf',
                'nilai_pbo' =>10 , 
                'nilai_web' =>75, 
                'nilai_pkk' =>100
            ],
            [
                'id' =>3 ,
                'nama' => 'kai',
                'nilai_pbo' =>57 , 
                'nilai_web' =>69, 
                'nilai_pkk' =>69
            ],
            [
                'id' =>4 ,
                'nama' => 'Cenat',
                'nilai_pbo' =>69 , 
                'nilai_web' =>69, 
                'nilai_pkk' =>69
            ],
            [
                'id' =>5 ,
                'nama' => 'Dwi',
                'nilai_pbo' =>80 , 
                'nilai_web' =>69, 
                'nilai_pkk' =>69
            ]
        ];

        $students = new students();
        $liststudents = [];
        
        foreach ($datastudents as $students){
           $datastudents = new students($students);
           $liststudents [] = $datastudents;
        }
?>
    <h2> Jumlah data students <?php echo count($liststudents)?> </h2>

        <?php 
        foreach ($liststudents as $students) {
            $idstudents = $students->id;
            echo "
            <hr>
            <p> ID : $students->id </p>
            
            <p> NAMA : $students->nama </p>
          
            <p> NILAI_PBO : $students->nilai_pbo </p>
          
            <p> NILAI_WEB : $students->nilai_web </p>
         
            <p> NILAI_PKK : $students->nilai_pkk </p>
            ";
        }
        ?>
    
</body>
</html>
