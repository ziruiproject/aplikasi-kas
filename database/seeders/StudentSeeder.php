<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(["name"=>" ADI PRASETYO" , "username" => "adi" , "email" =>"adi@gmail.com" , "password" => bcrypt("13844") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" AINUN ARABIA BANGUN" , "username" => "ainun" , "email" =>"ainun@gmail.com" , "password" => bcrypt("13845") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" ALFIYAH NUR AENI FAUZIAH" , "username" => "alfiyah" , "email" =>"alfiyah@gmail.com" , "password" => bcrypt("13846") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" ASTRID FAUZIAH" , "username" => "astrid" , "email" =>"astrid@gmail.com" , "password" => bcrypt("13847") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" AYU NURCAHYA" , "username" => "ayu" , "email" =>"ayu@gmail.com" , "password" => bcrypt("13848") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" CINDY AULIA" , "username" => "cindy" , "email" =>"cindy@gmail.com" , "password" => bcrypt("13849") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" DENI NUR AMELINA" , "username" => "deni" , "email" =>"deni@gmail.com" , "password" => bcrypt("13850") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" DIONISIUS VIANDI PUTRA" , "username" => "dionisius" , "email" =>"dionisius@gmail.com" , "password" => bcrypt("13851") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" EKA PUSPITA AMALIA WIBOWO PUTRI" , "username" => "eka" , "email" =>"eka@gmail.com" , "password" => bcrypt("ekabendahara") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => TRUE ]);
        Student::create(["name"=>" GISSELE AISHA" , "username" => "gissele" , "email" =>"gissele@gmail.com" , "password" => bcrypt("13853") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" GOINA NUGGETY SANTRIAN" , "username" => "goina" , "email" =>"goina@gmail.com" , "password" => bcrypt("13854") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" KARUNIA DWIYUNITA HAPSARI" , "username" => "karunia" , "email" =>"karunia@gmail.com" , "password" => bcrypt("13855") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" LANANG TSAQIF HAKIM" , "username" => "lanang" , "email" =>"lanang@gmail.com" , "password" => bcrypt("13856") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" MARSELLA PAUZIAH UTAMI" , "username" => "marsella" , "email" =>"marsella@gmail.com" , "password" => bcrypt("13857") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" MUHAMAD SURYA DHARMAWAN" , "username" => "surya" , "email" =>"surya@gmail.com" , "password" => bcrypt("13858") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" MUHAMAD WAIS AL QORNI" , "username" => "wais" , "email" =>"wais@gmail.com" , "password" => bcrypt("13859") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" MUHAMMAD FAIZ MA'RUF" , "username" => "faiz" , "email" =>"faiz@gmail.com" , "password" => bcrypt("13860") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" NAZWA SALSABILA" , "username" => "nazwa" , "email" =>"nazwa@gmail.com" , "password" => bcrypt("13861") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" NELA NURPAJRIYAH" , "username" => "nela" , "email" =>"nela@gmail.com" , "password" => bcrypt("13862") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" NISRINA ENDAH WISMAYA" , "username" => "nisrina" , "email" =>"nisrina@gmail.com" , "password" => bcrypt("13863") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" NOVA FITRIASIH" , "username" => "nova" , "email" =>"nova@gmail.com" , "password" => bcrypt("13865") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" PUTRI FADILAH NURUL SALAMAH" , "username" => "putri" , "email" =>"putri@gmail.com" , "password" => bcrypt("13866") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" RAHMA SYAFIRA UMMAH" , "username" => "rahma" , "email" =>"rahma@gmail.com" , "password" => bcrypt("13867") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" RATNA DEWI ROSYIDA" , "username" => "ratna" , "email" =>"ratna@gmail.com" , "password" => bcrypt("13868") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" RAZZAN SULISTIYO WIDODO" , "username" => "razzan" , "email" =>"razzan@gmail.com" , "password" => bcrypt("13869") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" REGA ALVINO" , "username" => "rega" , "email" =>"rega@gmail.com" , "password" => bcrypt("13870") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" RIYAN NAFFA NUSAFARA" , "username" => "riyan" , "email" =>"riyan@gmail.com" , "password" => bcrypt("13871") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" RIZKY RIYADI" , "username" => "rizky" , "email" =>"rizky@gmail.com" , "password" => bcrypt("13872") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" SASTI AYU NURAINI" , "username" => "sasti" , "email" =>"sasti@gmail.com" , "password" => bcrypt("13873") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" SUSILAWATI" , "username" => "susilawati" , "email" =>"susilawati@gmail.com" , "password" => bcrypt("13874") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" UMI KAYSA RACHMANIA" , "username" => "umi" , "email" =>"umi@gmail.com" , "password" => bcrypt("13875") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" VIRGHIKAL BIRRU UNGGUL PRATAMA" , "username" => "virghikal" , "email" =>"virghikal@gmail.com" , "password" => bcrypt("13876") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" WILLANI HANASTASYA WULAN" , "username" => "willani" , "email" =>"willani@gmail.com" , "password" => bcrypt("13877") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);
        Student::create(["name"=>" YUDHA PRAWIRA SUGIHARTO" , "username" => "yudha" , "email" =>"yudha@gmail.com" , "password" => bcrypt("yudhabendahara") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => TRUE ]);
        Student::create(["name"=>" ZALFA SAELANAJA" , "username" => "zalfa" , "email" =>"zalfa@gmail.com" , "password" => bcrypt("13879") , "kas_bill" => 20000, "wallet" => 10000 , "img" =>  "photo_profile.png" , "is_admin" => FALSE ]);



    }
}
