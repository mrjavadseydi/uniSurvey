<?php

namespace Database\Seeders;

use App\Models\Pardis;
use App\Models\University;
use Illuminate\Database\Seeder;

class PardisAndUniversitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mohandesi = Pardis::create([
            'pardiscod' => 111,
            'title' => 'پردیس مهندسی'
        ]);
        University::create([
            'pardis_id' => $mohandesi->id,
            'title' => 'دانشکده مهندسی',
            'unicod' => 13
        ]);
        University::create([
            'pardis_id' => $mohandesi->id,
            'title' => 'دانشکده مهندسی برق و کامپیوتر',
            'unicod' => 26
        ]);
        $shokat = Pardis::create([
            'pardiscod' => 112,
            'title' =>"پردیس شوکت آباد"
        ]);
        University::create([
            'pardis_id' => $shokat->id,
            'title' => 'دانشکده ادبیات و علوم انسانی',
            'unicod' => 12
        ]);
        $amirabad = Pardis::create([
            'pardiscod' => 113,
            'title' =>"پردیس امیرآباد"
        ]);
        University::create([
            'pardis_id' => $amirabad->id,
            'title' => 'دانشکده کشاورزی ',
            'unicod' => 14
        ]);
        University::create([
            'pardis_id' => $amirabad->id,
            'title' => 'دانشکده منابع طبیعی و محیط زیست',
            'unicod' => 28
        ]);
        $olom = Pardis::create([
            'pardiscod' => 115,
            'title' =>"پردیس علوم پایه"
        ]);
        University::create([
            'pardis_id' => $olom->id,
            'title' => 'دانشکده علوم',
            'unicod' => 11
        ]);
        University::create([
            'pardis_id' => $olom->id,
            'title' => 'دانشکده علوم ریاضی و آمار',
            'unicod' => 24
        ]);
        $raftar = Pardis::create([
            'pardiscod' => 116,
            'title' =>"پردیس علوم رفتاری"
        ]);
        University::create([
            'pardis_id' => $raftar->id,
            'title' => 'دانشکده علوم تربیتی و روانشناسی',
            'unicod' => 19
        ]);
        University::create([
            'pardis_id' => $raftar->id,
            'title' => 'دانشکده علوم ورزشی',
            'unicod' => 17
        ]);
        $shohada = Pardis::create([
            'pardiscod' => 117,
            'title' =>"پردیس شهدا"
        ]);
        University::create([
            'pardis_id' => $shohada->id,
            'title' => 'دانشکده هنر',
            'unicod' => 15
        ]);
        $aghmari =  Pardis::create([
            'pardiscod' => 118,
            'title' =>"دانشکده های اقماری"
        ]);
        University::create([
            'pardis_id' => $aghmari->id,
            'title' => 'دانشکده فنی فردوس',
            'unicod' => 20
        ]);
        University::create([
            'pardis_id' => $aghmari->id,
            'title' => 'دانشکده کشاورزی سرایان',
            'unicod' => 18
        ]);
        University::create([
            'pardis_id' => $aghmari->id,
            'title' => 'دانشکده کشاورزی سربیشه',
            'unicod' => 21
        ]);
        University::create([
            'pardis_id' => $aghmari->id,
            'title' => 'دانشکده معدن نهبندان',
            'unicod' => 25
        ]);
    }
}
