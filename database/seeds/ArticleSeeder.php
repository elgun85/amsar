<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i <3; $i++) {
            DB::table('articles')->insert([
                'category_id'=>rand(1,5),
                'title'=>'Elgün Hüseynov',
                'image'=>'Foto',
                'ad'=>'Elgün',
                'cins'=>'kisi',
                'dogum_tarixi'=>1985,
                'teleb_olunan'=>1000,
                'verilen'=>100,
                'unvani'=>'Masazır',
                'xesteliyi'=>'xəstə',
                'mualice_yeri'=>'evi',
                'ad_elaqe1'=>'elgun',
                'ad_elaqe2'=>'elgun2',
                'elaqe1'=>055111111,
                'elaqe2'=>055222222,
                'hesab'=>'kapital bank',
                'hesab_bank'=>'12345678910',
                'status_2'=>'tecili',
                'content'=>'salam burada movzular yaza bilersiz',
                'slug'=>Str::slug('Elgün Hüseynov'),
                'created_at'=>now(),
                'updated_at'=>now()



            ]);
        }
    }
}
