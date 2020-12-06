<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_uz' => 'Qoraqalpog‘iston Respublikasi',
                'name_oz' => 'Қорақалпоғистон Республикаси',
                'name_ru' => 'Республика Каракалпакстан',
            ),
            1 => 
            array (
                'id' => 2,
                'name_uz' => 'Andijon viloyati',
                'name_oz' => 'Андижон вилояти',
                'name_ru' => 'Андижанская область',
            ),
            2 => 
            array (
                'id' => 3,
                'name_uz' => 'Buxoro viloyati',
                'name_oz' => 'Бухоро вилояти',
                'name_ru' => 'Бухарская область',
            ),
            3 => 
            array (
                'id' => 4,
                'name_uz' => 'Jizzax viloyati',
                'name_oz' => 'Жиззах вилояти',
                'name_ru' => 'Джизакская область',
            ),
            4 => 
            array (
                'id' => 5,
                'name_uz' => 'Qashqadaryo viloyati',
                'name_oz' => 'Қашқадарё вилояти',
                'name_ru' => 'Кашкадарьинская область',
            ),
            5 => 
            array (
                'id' => 6,
                'name_uz' => 'Navoiy viloyati',
                'name_oz' => 'Навоий вилояти',
                'name_ru' => 'Навоийская область',
            ),
            6 => 
            array (
                'id' => 7,
                'name_uz' => 'Namangan viloyati',
                'name_oz' => 'Наманган вилояти',
                'name_ru' => 'Наманганская область',
            ),
            7 => 
            array (
                'id' => 8,
                'name_uz' => 'Samarqand viloyati',
                'name_oz' => 'Самарқанд вилояти',
                'name_ru' => 'Самаркандская область',
            ),
            8 => 
            array (
                'id' => 9,
                'name_uz' => 'Surxandaryo viloyati',
                'name_oz' => 'Сурхандарё вилояти',
                'name_ru' => 'Сурхандарьинская область',
            ),
            9 => 
            array (
                'id' => 10,
                'name_uz' => 'Sirdaryo viloyati',
                'name_oz' => 'Сирдарё вилояти',
                'name_ru' => 'Сырдарьинская область',
            ),
            10 => 
            array (
                'id' => 11,
                'name_uz' => 'Toshkent viloyati',
                'name_oz' => 'Тошкент вилояти',
                'name_ru' => 'Ташкентская область',
            ),
            11 => 
            array (
                'id' => 12,
                'name_uz' => 'Farg‘ona viloyati',
                'name_oz' => 'Фарғона вилояти',
                'name_ru' => 'Ферганская область',
            ),
            12 => 
            array (
                'id' => 13,
                'name_uz' => 'Xorazm viloyati',
                'name_oz' => 'Хоразм вилояти',
                'name_ru' => 'Хорезмская область',
            ),
            13 => 
            array (
                'id' => 14,
                'name_uz' => 'Toshkent shahri',
                'name_oz' => 'Тошкент шаҳри',
                'name_ru' => 'Город Ташкент',
            ),
        ));
        
        
    }
}