<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 15,
                'region_id' => 1,
                'name_uz' => 'Amudaryo tumani',
                'name_oz' => 'Амударё тумани',
                'name_ru' => 'Амударьинский район',
            ),
            1 => 
            array (
                'id' => 16,
                'region_id' => 1,
                'name_uz' => 'Beruniy tumani',
                'name_oz' => 'Беруний тумани',
                'name_ru' => 'Берунийский район',
            ),
            2 => 
            array (
                'id' => 17,
                'region_id' => 1,
                'name_uz' => 'Kegayli tumani',
                'name_oz' => 'Кегайли тумани',
                'name_ru' => 'Кегейлийский район',
            ),
            3 => 
            array (
                'id' => 18,
                'region_id' => 1,
                'name_uz' => 'Qonliko‘l tumani',
                'name_oz' => 'Қонликўл тумани',
                'name_ru' => 'Канлыкульский район',
            ),
            4 => 
            array (
                'id' => 19,
                'region_id' => 1,
                'name_uz' => 'Qorao‘zak tumani',
                'name_oz' => 'Қораўзак тумани',
                'name_ru' => 'Караузякский район',
            ),
            5 => 
            array (
                'id' => 20,
                'region_id' => 1,
                'name_uz' => 'Qo‘ng‘irot tumani',
                'name_oz' => 'Қўнғирот тумани',
                'name_ru' => 'Кунградский район',
            ),
            6 => 
            array (
                'id' => 21,
                'region_id' => 1,
                'name_uz' => 'Mo‘ynoq tumani',
                'name_oz' => 'Мўйноқ тумани',
                'name_ru' => 'Муйнакский район',
            ),
            7 => 
            array (
                'id' => 22,
                'region_id' => 1,
                'name_uz' => 'Nukus tumani',
                'name_oz' => 'Нукус тумани',
                'name_ru' => 'Нукусский район',
            ),
            8 => 
            array (
                'id' => 23,
                'region_id' => 1,
                'name_uz' => 'Nukus shahri',
                'name_oz' => 'Нукус шаҳри',
                'name_ru' => 'город Нукус',
            ),
            9 => 
            array (
                'id' => 24,
                'region_id' => 1,
                'name_uz' => 'Taxtako‘pir tumani',
                'name_oz' => 'Тахтакўпир тумани',
                'name_ru' => 'Тахтакупырский район',
            ),
            10 => 
            array (
                'id' => 25,
                'region_id' => 1,
                'name_uz' => 'To‘rtko‘l tumani',
                'name_oz' => 'Тўрткўл тумани',
                'name_ru' => 'Турткульский район',
            ),
            11 => 
            array (
                'id' => 26,
                'region_id' => 1,
                'name_uz' => 'Xo‘jayli tumani',
                'name_oz' => 'Хўжайли тумани',
                'name_ru' => 'Ходжейлийский район',
            ),
            12 => 
            array (
                'id' => 27,
                'region_id' => 1,
                'name_uz' => 'CHimboy tumani',
                'name_oz' => 'Чимбой тумани',
                'name_ru' => 'Чимбайский район',
            ),
            13 => 
            array (
                'id' => 28,
                'region_id' => 1,
                'name_uz' => 'Shumanay tumani',
                'name_oz' => 'Шуманай тумани',
                'name_ru' => 'Шуманайский район',
            ),
            14 => 
            array (
                'id' => 29,
                'region_id' => 1,
                'name_uz' => 'Ellikqal‘a tumani',
                'name_oz' => 'Элликқалъа тумани',
                'name_ru' => 'Элликкалинский район',
            ),
            15 => 
            array (
                'id' => 30,
                'region_id' => 2,
                'name_uz' => 'Andijon shahri',
                'name_oz' => 'Андижон шаҳри',
                'name_ru' => 'город Андижан',
            ),
            16 => 
            array (
                'id' => 31,
                'region_id' => 2,
                'name_uz' => 'Andijon tumani',
                'name_oz' => 'Андижон тумани',
                'name_ru' => 'Андижанский район',
            ),
            17 => 
            array (
                'id' => 32,
                'region_id' => 2,
                'name_uz' => 'Asaka tumani',
                'name_oz' => 'Асака тумани',
                'name_ru' => 'Асакинский район',
            ),
            18 => 
            array (
                'id' => 33,
                'region_id' => 2,
                'name_uz' => 'Baliqchi tumani',
                'name_oz' => 'Балиқчи тумани',
                'name_ru' => 'Балыкчинский район',
            ),
            19 => 
            array (
                'id' => 34,
                'region_id' => 2,
                'name_uz' => 'Buloqboshi tumani',
                'name_oz' => 'Булоқбоши тумани',
                'name_ru' => 'Булакбашинский район',
            ),
            20 => 
            array (
                'id' => 35,
                'region_id' => 2,
                'name_uz' => 'Bo‘z tumani',
                'name_oz' => 'Бўз тумани',
                'name_ru' => 'Бозский район',
            ),
            21 => 
            array (
                'id' => 36,
                'region_id' => 2,
                'name_uz' => 'Jalaquduq tumani',
                'name_oz' => 'Жалақудуқ тумани',
                'name_ru' => 'Джалакудукский район',
            ),
            22 => 
            array (
                'id' => 37,
                'region_id' => 2,
                'name_uz' => 'Izbosgan tumani',
                'name_oz' => 'Избосган тумани',
                'name_ru' => 'Избасканский район',
            ),
            23 => 
            array (
                'id' => 38,
                'region_id' => 2,
                'name_uz' => 'Qorasuv shahri',
                'name_oz' => 'Қорасув шаҳри',
                'name_ru' => 'город Карасув',
            ),
            24 => 
            array (
                'id' => 39,
                'region_id' => 2,
                'name_uz' => 'Qo‘rg‘ontepa tumani',
                'name_oz' => 'Қўрғонтепа тумани',
                'name_ru' => 'Кургантепинский район',
            ),
            25 => 
            array (
                'id' => 40,
                'region_id' => 2,
                'name_uz' => 'Marhamat tumani',
                'name_oz' => 'Марҳамат тумани',
                'name_ru' => 'Мархаматский район',
            ),
            26 => 
            array (
                'id' => 41,
                'region_id' => 2,
                'name_uz' => 'Oltinko‘l tumani',
                'name_oz' => 'Олтинкўл тумани',
                'name_ru' => 'Алтынкульский район',
            ),
            27 => 
            array (
                'id' => 42,
                'region_id' => 2,
                'name_uz' => 'Paxtaobod tumani',
                'name_oz' => 'Пахтаобод тумани',
                'name_ru' => 'Пахтаабадский район',
            ),
            28 => 
            array (
                'id' => 43,
                'region_id' => 2,
                'name_uz' => 'Ulug‘nor tumani',
                'name_oz' => 'Улуғнор тумани',
                'name_ru' => 'Улугнорский район',
            ),
            29 => 
            array (
                'id' => 44,
                'region_id' => 2,
                'name_uz' => 'Xonabod tumani',
                'name_oz' => 'Хонабод тумани',
                'name_ru' => 'город Ханабад',
            ),
            30 => 
            array (
                'id' => 45,
                'region_id' => 2,
                'name_uz' => 'Xo‘jaobod tumani',
                'name_oz' => 'Хўжаобод тумани',
                'name_ru' => 'Ходжаабадский район',
            ),
            31 => 
            array (
                'id' => 46,
                'region_id' => 2,
                'name_uz' => 'Shaxrixon tumani',
                'name_oz' => 'Шахрихон тумани',
                'name_ru' => 'Шахриханский район',
            ),
            32 => 
            array (
                'id' => 47,
                'region_id' => 3,
                'name_uz' => 'Buxoro shahri',
                'name_oz' => 'Бухоро шаҳри',
                'name_ru' => 'город Бухара',
            ),
            33 => 
            array (
                'id' => 48,
                'region_id' => 3,
                'name_uz' => 'Buxoro tumani',
                'name_oz' => 'Бухоро тумани',
                'name_ru' => 'Бухарский район',
            ),
            34 => 
            array (
                'id' => 49,
                'region_id' => 3,
                'name_uz' => 'Vobkent tumani',
                'name_oz' => 'Вобкент тумани',
                'name_ru' => 'Вабкентский район',
            ),
            35 => 
            array (
                'id' => 50,
                'region_id' => 3,
                'name_uz' => 'G‘ijduvon tumani',
                'name_oz' => 'Ғиждувон тумани',
                'name_ru' => 'Гиждуванский район',
            ),
            36 => 
            array (
                'id' => 51,
                'region_id' => 3,
                'name_uz' => 'Jondor tumani',
                'name_oz' => 'Жондор тумани',
                'name_ru' => 'Жондорский район',
            ),
            37 => 
            array (
                'id' => 52,
                'region_id' => 3,
                'name_uz' => 'Kogon tumani',
                'name_oz' => 'Когон тумани',
                'name_ru' => 'Каганский район',
            ),
            38 => 
            array (
                'id' => 53,
                'region_id' => 3,
                'name_uz' => 'Kogon shahri',
                'name_oz' => 'Когон шаҳри',
                'name_ru' => 'город Каган',
            ),
            39 => 
            array (
                'id' => 54,
                'region_id' => 3,
                'name_uz' => 'Qorako‘l tumani',
                'name_oz' => 'Қоракўл тумани',
                'name_ru' => 'Каракульский район',
            ),
            40 => 
            array (
                'id' => 55,
                'region_id' => 3,
                'name_uz' => 'Qorovulbozor tumani',
                'name_oz' => 'Қоровулбозор тумани',
                'name_ru' => 'Караулбазарский район',
            ),
            41 => 
            array (
                'id' => 56,
                'region_id' => 3,
                'name_uz' => 'Olot tumani',
                'name_oz' => 'Олот тумани',
                'name_ru' => 'Алатский район',
            ),
            42 => 
            array (
                'id' => 57,
                'region_id' => 3,
                'name_uz' => 'Peshku tumani',
                'name_oz' => 'Пешку тумани',
                'name_ru' => 'Пешкунский район',
            ),
            43 => 
            array (
                'id' => 58,
                'region_id' => 3,
                'name_uz' => 'Romitan tumani',
                'name_oz' => 'Ромитан тумани',
                'name_ru' => 'Ромитанский район',
            ),
            44 => 
            array (
                'id' => 59,
                'region_id' => 3,
                'name_uz' => 'Shofirkon tumani',
                'name_oz' => 'Шофиркон тумани',
                'name_ru' => 'Шафирканский район',
            ),
            45 => 
            array (
                'id' => 60,
                'region_id' => 4,
                'name_uz' => 'Arnasoy tumani',
                'name_oz' => 'Арнасой тумани',
                'name_ru' => 'Арнасайский район',
            ),
            46 => 
            array (
                'id' => 61,
                'region_id' => 4,
                'name_uz' => 'Baxmal tumani',
                'name_oz' => 'Бахмал тумани',
                'name_ru' => 'Бахмальский район',
            ),
            47 => 
            array (
                'id' => 62,
                'region_id' => 4,
                'name_uz' => 'G‘allaorol tumani',
                'name_oz' => 'Ғаллаорол тумани',
                'name_ru' => 'Галляаральский район',
            ),
            48 => 
            array (
                'id' => 63,
                'region_id' => 4,
                'name_uz' => 'Do‘stlik tumani',
                'name_oz' => 'Дўстлик тумани',
                'name_ru' => 'Дустликский район',
            ),
            49 => 
            array (
                'id' => 64,
                'region_id' => 4,
                'name_uz' => 'Sh.Rashidov tumani',
                'name_oz' => 'Ш.Рашидов тумани',
                'name_ru' => 'Шараф-Рашидовский район',
            ),
            50 => 
            array (
                'id' => 65,
                'region_id' => 4,
                'name_uz' => 'Jizzax shahri',
                'name_oz' => 'Жиззах шаҳри',
                'name_ru' => 'город Джизак',
            ),
            51 => 
            array (
                'id' => 66,
                'region_id' => 4,
                'name_uz' => 'Zarbdor tumani',
                'name_oz' => 'Зарбдор тумани',
                'name_ru' => 'Зарбдарский район',
            ),
            52 => 
            array (
                'id' => 67,
                'region_id' => 4,
                'name_uz' => 'Zafarobod tumani',
                'name_oz' => 'Зафаробод тумани',
                'name_ru' => 'Зафарабадский район',
            ),
            53 => 
            array (
                'id' => 68,
                'region_id' => 4,
                'name_uz' => 'Zomin tumani',
                'name_oz' => 'Зомин тумани',
                'name_ru' => 'Зааминский район',
            ),
            54 => 
            array (
                'id' => 69,
                'region_id' => 4,
                'name_uz' => 'Mirzacho‘l tumani',
                'name_oz' => 'Мирзачўл тумани',
                'name_ru' => 'Мирзачульский район',
            ),
            55 => 
            array (
                'id' => 70,
                'region_id' => 4,
                'name_uz' => 'Paxtakor tumani',
                'name_oz' => 'Пахтакор тумани',
                'name_ru' => 'Пахтакорский район',
            ),
            56 => 
            array (
                'id' => 71,
                'region_id' => 4,
                'name_uz' => 'Forish tumani',
                'name_oz' => 'Фориш тумани',
                'name_ru' => 'Фаришский район',
            ),
            57 => 
            array (
                'id' => 72,
                'region_id' => 4,
                'name_uz' => 'Yangiobod tumani',
                'name_oz' => 'Янгиобод тумани',
                'name_ru' => 'Янгиабадский район',
            ),
            58 => 
            array (
                'id' => 73,
                'region_id' => 5,
                'name_uz' => 'G‘uzor tumani',
                'name_oz' => 'Ғузор тумани',
                'name_ru' => 'Гузарский район',
            ),
            59 => 
            array (
                'id' => 74,
                'region_id' => 5,
                'name_uz' => 'Dehqonobod tumani',
                'name_oz' => 'Деҳқонобод тумани',
                'name_ru' => 'Дехканабадский район',
            ),
            60 => 
            array (
                'id' => 75,
                'region_id' => 5,
                'name_uz' => 'Qamashi tumani',
                'name_oz' => 'Қамаши тумани',
                'name_ru' => 'Камашинский район',
            ),
            61 => 
            array (
                'id' => 76,
                'region_id' => 5,
                'name_uz' => 'Qarshi tumani',
                'name_oz' => 'Қарши тумани',
                'name_ru' => 'Каршинский район',
            ),
            62 => 
            array (
                'id' => 77,
                'region_id' => 5,
                'name_uz' => 'Qarshi shahri',
                'name_oz' => 'Қарши шаҳри',
                'name_ru' => 'город Карши',
            ),
            63 => 
            array (
                'id' => 78,
                'region_id' => 5,
                'name_uz' => 'Kasbi tumani',
                'name_oz' => 'Касби тумани',
                'name_ru' => 'Касбийский район',
            ),
            64 => 
            array (
                'id' => 79,
                'region_id' => 5,
                'name_uz' => 'Kitob tumani',
                'name_oz' => 'Китоб тумани',
                'name_ru' => 'Китабский район',
            ),
            65 => 
            array (
                'id' => 80,
                'region_id' => 5,
                'name_uz' => 'Koson tumani',
                'name_oz' => 'Косон тумани',
                'name_ru' => 'Касанский район',
            ),
            66 => 
            array (
                'id' => 81,
                'region_id' => 5,
                'name_uz' => 'Mirishkor tumani',
                'name_oz' => 'Миришкор тумани',
                'name_ru' => 'Миришкорский район',
            ),
            67 => 
            array (
                'id' => 82,
                'region_id' => 5,
                'name_uz' => 'Muborak tumani',
                'name_oz' => 'Муборак тумани',
                'name_ru' => 'Мубарекский район',
            ),
            68 => 
            array (
                'id' => 83,
                'region_id' => 5,
                'name_uz' => 'Nishon tumani',
                'name_oz' => 'Нишон тумани',
                'name_ru' => 'Нишанский район',
            ),
            69 => 
            array (
                'id' => 84,
                'region_id' => 5,
                'name_uz' => 'Chiroqchi tumani',
                'name_oz' => 'Чироқчи тумани',
                'name_ru' => 'Чиракчинский район',
            ),
            70 => 
            array (
                'id' => 85,
                'region_id' => 5,
                'name_uz' => 'Shahrisabz tumani',
                'name_oz' => 'Шаҳрисабз тумани',
                'name_ru' => 'Шахрисабзский район',
            ),
            71 => 
            array (
                'id' => 86,
                'region_id' => 5,
                'name_uz' => 'Yakkabog‘ tumani',
                'name_oz' => 'Яккабоғ тумани',
                'name_ru' => 'Яккабагский район',
            ),
            72 => 
            array (
                'id' => 87,
                'region_id' => 6,
                'name_uz' => 'Zarafshon shahri',
                'name_oz' => 'Зарафшон шаҳри',
                'name_ru' => 'город Зарафшан',
            ),
            73 => 
            array (
                'id' => 88,
                'region_id' => 6,
                'name_uz' => 'Karman tumani',
                'name_oz' => 'Карман тумани',
                'name_ru' => 'Карманинский район',
            ),
            74 => 
            array (
                'id' => 89,
                'region_id' => 6,
                'name_uz' => 'Qiziltepa tumani',
                'name_oz' => 'Қизилтепа тумани',
                'name_ru' => 'Кызылтепинский район',
            ),
            75 => 
            array (
                'id' => 90,
                'region_id' => 6,
                'name_uz' => 'Konimex tumani',
                'name_oz' => 'Конимех тумани',
                'name_ru' => 'Канимехский район',
            ),
            76 => 
            array (
                'id' => 91,
                'region_id' => 6,
                'name_uz' => 'Navbahor tumani',
                'name_oz' => 'Навбаҳор тумани',
                'name_ru' => 'Навбахорский район',
            ),
            77 => 
            array (
                'id' => 92,
                'region_id' => 6,
                'name_uz' => 'Navoiy shahri',
                'name_oz' => 'Навоий шаҳри',
                'name_ru' => 'город Навои',
            ),
            78 => 
            array (
                'id' => 93,
                'region_id' => 6,
                'name_uz' => 'Nurota tumani',
                'name_oz' => 'Нурота тумани',
                'name_ru' => 'Нуратинский район',
            ),
            79 => 
            array (
                'id' => 94,
                'region_id' => 6,
                'name_uz' => 'Tomdi tumani',
                'name_oz' => 'Томди тумани',
                'name_ru' => 'Тамдынский район',
            ),
            80 => 
            array (
                'id' => 95,
                'region_id' => 6,
                'name_uz' => 'Uchquduq tumani',
                'name_oz' => 'Учқудуқ тумани',
                'name_ru' => 'Учкудукский район',
            ),
            81 => 
            array (
                'id' => 96,
                'region_id' => 6,
                'name_uz' => 'Xatirchi tumani',
                'name_oz' => 'Хатирчи тумани',
                'name_ru' => 'Хатырчинский район',
            ),
            82 => 
            array (
                'id' => 97,
                'region_id' => 7,
                'name_uz' => 'Kosonsoy tumani',
                'name_oz' => 'Косонсой тумани',
                'name_ru' => 'Касансайский район',
            ),
            83 => 
            array (
                'id' => 98,
                'region_id' => 7,
                'name_uz' => 'Mingbuloq tumani',
                'name_oz' => 'Мингбулоқ тумани',
                'name_ru' => 'Мингбулакский район',
            ),
            84 => 
            array (
                'id' => 99,
                'region_id' => 7,
                'name_uz' => 'Namangan tumani',
                'name_oz' => 'Наманган тумани',
                'name_ru' => 'Наманганский район',
            ),
            85 => 
            array (
                'id' => 100,
                'region_id' => 7,
                'name_uz' => 'Namangan shahri',
                'name_oz' => 'Наманган шаҳри',
                'name_ru' => 'город Наманган',
            ),
            86 => 
            array (
                'id' => 101,
                'region_id' => 7,
                'name_uz' => 'Norin tumani',
                'name_oz' => 'Норин тумани',
                'name_ru' => 'Нарынский район',
            ),
            87 => 
            array (
                'id' => 102,
                'region_id' => 7,
                'name_uz' => 'Pop tumani',
                'name_oz' => 'Поп тумани',
                'name_ru' => 'Папский район',
            ),
            88 => 
            array (
                'id' => 103,
                'region_id' => 7,
                'name_uz' => 'To‘raqo‘rg‘on tumani',
                'name_oz' => 'Тўрақўрғон тумани',
                'name_ru' => 'Туракурганский район',
            ),
            89 => 
            array (
                'id' => 104,
                'region_id' => 7,
                'name_uz' => 'Uychi tumani',
                'name_oz' => 'Уйчи тумани',
                'name_ru' => 'Уйчинский район',
            ),
            90 => 
            array (
                'id' => 105,
                'region_id' => 7,
                'name_uz' => 'Uchqo‘rg‘on tumani',
                'name_oz' => 'Учқўрғон тумани',
                'name_ru' => 'Учкурганский район',
            ),
            91 => 
            array (
                'id' => 106,
                'region_id' => 7,
                'name_uz' => 'Chortoq tumani',
                'name_oz' => 'Чортоқ тумани',
                'name_ru' => 'Чартакский район',
            ),
            92 => 
            array (
                'id' => 107,
                'region_id' => 7,
                'name_uz' => 'Chust tumani',
                'name_oz' => 'Чуст тумани',
                'name_ru' => 'Чустский район',
            ),
            93 => 
            array (
                'id' => 108,
                'region_id' => 7,
                'name_uz' => 'Yangiqo‘rg‘on tumani',
                'name_oz' => 'Янгиқўрғон тумани',
                'name_ru' => 'Янгикурганский район',
            ),
            94 => 
            array (
                'id' => 109,
                'region_id' => 8,
                'name_uz' => 'Bulung‘ur tumani',
                'name_oz' => 'Булунғур тумани',
                'name_ru' => 'Булунгурский район',
            ),
            95 => 
            array (
                'id' => 110,
                'region_id' => 8,
                'name_uz' => 'Jomboy tumani',
                'name_oz' => 'Жомбой тумани',
                'name_ru' => 'Джамбайский район',
            ),
            96 => 
            array (
                'id' => 111,
                'region_id' => 8,
                'name_uz' => 'Ishtixon tumani',
                'name_oz' => 'Иштихон тумани',
                'name_ru' => 'Иштыханский район',
            ),
            97 => 
            array (
                'id' => 112,
                'region_id' => 8,
                'name_uz' => 'Kattaqo‘rg‘on tumani',
                'name_oz' => 'Каттақўрғон тумани',
                'name_ru' => 'Каттакурганский район',
            ),
            98 => 
            array (
                'id' => 113,
                'region_id' => 8,
                'name_uz' => 'Kattaqo‘rg‘on shahri',
                'name_oz' => 'Каттақўрғон шаҳри',
                'name_ru' => 'город Каттакурган',
            ),
            99 => 
            array (
                'id' => 114,
                'region_id' => 8,
                'name_uz' => 'Qo‘shrabot tumani',
                'name_oz' => 'Қўшработ тумани',
                'name_ru' => 'Кошрабадский район',
            ),
            100 => 
            array (
                'id' => 115,
                'region_id' => 8,
                'name_uz' => 'Narpay tumani',
                'name_oz' => 'Нарпай тумани',
                'name_ru' => 'Нарпайский район',
            ),
            101 => 
            array (
                'id' => 116,
                'region_id' => 8,
                'name_uz' => 'Nurabod tumani',
                'name_oz' => 'Нурабод тумани',
                'name_ru' => 'Нурабадский район',
            ),
            102 => 
            array (
                'id' => 117,
                'region_id' => 8,
                'name_uz' => 'Oqdaryo tumani',
                'name_oz' => 'Оқдарё тумани',
                'name_ru' => 'Акдарьинский район',
            ),
            103 => 
            array (
                'id' => 118,
                'region_id' => 8,
                'name_uz' => 'Payariq tumani',
                'name_oz' => 'Паяриқ тумани',
                'name_ru' => 'Пайарыкский район',
            ),
            104 => 
            array (
                'id' => 119,
                'region_id' => 8,
                'name_uz' => 'Pastarg‘om tumani',
                'name_oz' => 'Пастарғом тумани',
                'name_ru' => 'Пастдаргомский район',
            ),
            105 => 
            array (
                'id' => 120,
                'region_id' => 8,
                'name_uz' => 'Paxtachi tumani',
                'name_oz' => 'Пахтачи тумани',
                'name_ru' => 'Пахтачийский район',
            ),
            106 => 
            array (
                'id' => 121,
                'region_id' => 8,
                'name_uz' => 'Samarqand tumani',
                'name_oz' => 'Самарқанд тумани',
                'name_ru' => 'Самаркандский район',
            ),
            107 => 
            array (
                'id' => 122,
                'region_id' => 8,
                'name_uz' => 'Samarqand shahri',
                'name_oz' => 'Самарқанд шаҳри',
                'name_ru' => 'город Самарканд',
            ),
            108 => 
            array (
                'id' => 123,
                'region_id' => 8,
                'name_uz' => 'Toyloq tumani',
                'name_oz' => 'Тойлоқ тумани',
                'name_ru' => 'Тайлакский район',
            ),
            109 => 
            array (
                'id' => 124,
                'region_id' => 8,
                'name_uz' => 'Urgut tumani',
                'name_oz' => 'Ургут тумани',
                'name_ru' => 'Ургутский район',
            ),
            110 => 
            array (
                'id' => 125,
                'region_id' => 9,
                'name_uz' => 'Angor tumani',
                'name_oz' => 'Ангор тумани',
                'name_ru' => 'Ангорский район',
            ),
            111 => 
            array (
                'id' => 126,
                'region_id' => 9,
                'name_uz' => 'Boysun tumani',
                'name_oz' => 'Бойсун тумани',
                'name_ru' => 'Байсунский район',
            ),
            112 => 
            array (
                'id' => 127,
                'region_id' => 9,
                'name_uz' => 'Denov tumani',
                'name_oz' => 'Денов тумани',
                'name_ru' => 'Денауский район',
            ),
            113 => 
            array (
                'id' => 128,
                'region_id' => 9,
                'name_uz' => 'Jarqo‘rg‘on tumani',
                'name_oz' => 'Жарқўрғон тумани',
                'name_ru' => 'Джаркурганский район',
            ),
            114 => 
            array (
                'id' => 129,
                'region_id' => 9,
                'name_uz' => 'Qiziriq tumani',
                'name_oz' => 'Қизириқ тумани',
                'name_ru' => 'Кизирикский район',
            ),
            115 => 
            array (
                'id' => 130,
                'region_id' => 9,
                'name_uz' => 'Qo‘mqo‘rg‘on tumani',
                'name_oz' => 'Қўмқўрғон тумани',
                'name_ru' => 'Кумкурганский район',
            ),
            116 => 
            array (
                'id' => 131,
                'region_id' => 9,
                'name_uz' => 'Muzrabot tumani',
                'name_oz' => 'Музработ тумани',
                'name_ru' => 'Музрабадский район',
            ),
            117 => 
            array (
                'id' => 132,
                'region_id' => 9,
                'name_uz' => 'Oltinsoy tumani',
                'name_oz' => 'Олтинсой тумани',
                'name_ru' => 'Алтынсайский район',
            ),
            118 => 
            array (
                'id' => 133,
                'region_id' => 9,
                'name_uz' => 'Sariosiy tumani',
                'name_oz' => 'Сариосий тумани',
                'name_ru' => 'Сариасийский район',
            ),
            119 => 
            array (
                'id' => 134,
                'region_id' => 9,
                'name_uz' => 'Termiz tumani',
                'name_oz' => 'Термиз тумани',
                'name_ru' => 'Термезский район',
            ),
            120 => 
            array (
                'id' => 135,
                'region_id' => 9,
                'name_uz' => 'Termiz shahri',
                'name_oz' => 'Термиз шаҳри',
                'name_ru' => 'город Термез',
            ),
            121 => 
            array (
                'id' => 136,
                'region_id' => 9,
                'name_uz' => 'Uzun tumani',
                'name_oz' => 'Узун тумани',
                'name_ru' => 'Узунский район',
            ),
            122 => 
            array (
                'id' => 137,
                'region_id' => 9,
                'name_uz' => 'Sherobod tumani',
                'name_oz' => 'Шеробод тумани',
                'name_ru' => 'Шерабадский район',
            ),
            123 => 
            array (
                'id' => 138,
                'region_id' => 9,
                'name_uz' => 'Sho‘rchi tumani',
                'name_oz' => 'Шўрчи тумани',
                'name_ru' => 'Шурчинский район',
            ),
            124 => 
            array (
                'id' => 139,
                'region_id' => 10,
                'name_uz' => 'Boyovut tumani',
                'name_oz' => 'Боёвут тумани',
                'name_ru' => 'Баяутский район',
            ),
            125 => 
            array (
                'id' => 140,
                'region_id' => 10,
                'name_uz' => 'Guliston tumani',
                'name_oz' => 'Гулистон тумани',
                'name_ru' => 'Гулистанский район',
            ),
            126 => 
            array (
                'id' => 141,
                'region_id' => 10,
                'name_uz' => 'Guliston shahri',
                'name_oz' => 'Гулистон шаҳри',
                'name_ru' => 'город Гулистан',
            ),
            127 => 
            array (
                'id' => 142,
                'region_id' => 10,
                'name_uz' => 'Mirzaobod tumani',
                'name_oz' => 'Мирзаобод тумани',
                'name_ru' => 'Мирзаабадский район',
            ),
            128 => 
            array (
                'id' => 143,
                'region_id' => 10,
                'name_uz' => 'Oqoltin tumani',
                'name_oz' => 'Оқолтин тумани',
                'name_ru' => 'Акалтынский район',
            ),
            129 => 
            array (
                'id' => 144,
                'region_id' => 10,
                'name_uz' => 'Sayxunobod tumani',
                'name_oz' => 'Сайхунобод тумани',
                'name_ru' => 'Сайхунабадский район',
            ),
            130 => 
            array (
                'id' => 145,
                'region_id' => 10,
                'name_uz' => 'Sardoba tumani',
                'name_oz' => 'Сардоба тумани',
                'name_ru' => 'Сардобский район',
            ),
            131 => 
            array (
                'id' => 146,
                'region_id' => 10,
                'name_uz' => 'Sirdaryo tumani',
                'name_oz' => 'Сирдарё тумани',
                'name_ru' => 'Сырдарьинский район',
            ),
            132 => 
            array (
                'id' => 147,
                'region_id' => 10,
                'name_uz' => 'Xavos tumani',
                'name_oz' => 'Хавос тумани',
                'name_ru' => 'Хавастский район',
            ),
            133 => 
            array (
                'id' => 148,
                'region_id' => 10,
                'name_uz' => 'Shirin shahri',
                'name_oz' => 'Ширин шаҳри',
                'name_ru' => 'город Ширин',
            ),
            134 => 
            array (
                'id' => 149,
                'region_id' => 10,
                'name_uz' => 'Yangiyer shahri',
                'name_oz' => 'Янгиер шаҳри',
                'name_ru' => 'город Янгиер',
            ),
            135 => 
            array (
                'id' => 150,
                'region_id' => 11,
                'name_uz' => 'Angiren shahri',
                'name_oz' => 'Ангирен шаҳри',
                'name_ru' => 'город Ангрен',
            ),
            136 => 
            array (
                'id' => 151,
                'region_id' => 11,
                'name_uz' => 'Bekabod tumani',
                'name_oz' => 'Бекабод тумани',
                'name_ru' => 'Бекабадский район',
            ),
            137 => 
            array (
                'id' => 152,
                'region_id' => 11,
                'name_uz' => 'Bekabod shahri',
                'name_oz' => 'Бекабод шаҳри',
                'name_ru' => 'город Бекабад',
            ),
            138 => 
            array (
                'id' => 153,
                'region_id' => 11,
                'name_uz' => 'Bo‘ka tumani',
                'name_oz' => 'Бўка тумани',
                'name_ru' => 'Букинский район',
            ),
            139 => 
            array (
                'id' => 154,
                'region_id' => 11,
                'name_uz' => 'Bo‘stonliq tumani',
                'name_oz' => 'Бўстонлиқ тумани',
                'name_ru' => 'Бостанлыкский район',
            ),
            140 => 
            array (
                'id' => 155,
                'region_id' => 11,
                'name_uz' => 'Zangiota tumani',
                'name_oz' => 'Зангиота тумани',
                'name_ru' => 'Зангиатинский район',
            ),
            141 => 
            array (
                'id' => 156,
                'region_id' => 11,
                'name_uz' => 'Qibray tumani',
                'name_oz' => 'Қибрай тумани',
                'name_ru' => 'Кибрайский район',
            ),
            142 => 
            array (
                'id' => 157,
                'region_id' => 11,
                'name_uz' => 'Quyichirchiq tumani',
                'name_oz' => 'Қуйичирчиқ тумани',
                'name_ru' => 'Куйичирчикский район',
            ),
            143 => 
            array (
                'id' => 158,
                'region_id' => 11,
                'name_uz' => 'Oqqo‘rg‘on tumani',
                'name_oz' => 'Оққўрғон тумани',
                'name_ru' => 'Аккурганский район',
            ),
            144 => 
            array (
                'id' => 159,
                'region_id' => 11,
                'name_uz' => 'Olmaliq shahri',
                'name_oz' => 'Олмалиқ шаҳри',
                'name_ru' => 'город Алмалык',
            ),
            145 => 
            array (
                'id' => 160,
                'region_id' => 11,
                'name_uz' => 'Ohangaron tumani',
                'name_oz' => 'Оҳангарон тумани',
                'name_ru' => 'Ахангаранский район',
            ),
            146 => 
            array (
                'id' => 161,
                'region_id' => 11,
                'name_uz' => 'Parkent tumani',
                'name_oz' => 'Паркент тумани',
                'name_ru' => 'Паркентский район',
            ),
            147 => 
            array (
                'id' => 162,
                'region_id' => 11,
                'name_uz' => 'Piskent tumani',
                'name_oz' => 'Пискент тумани',
                'name_ru' => 'Пскентский район',
            ),
            148 => 
            array (
                'id' => 163,
                'region_id' => 11,
                'name_uz' => 'O‘rtachirchiq tumani',
                'name_oz' => 'Ўртачирчиқ тумани',
                'name_ru' => 'Уртачирчикский район',
            ),
            149 => 
            array (
                'id' => 164,
                'region_id' => 11,
                'name_uz' => 'Chinoz tumani',
                'name_oz' => 'Чиноз тумани',
                'name_ru' => 'Чиназский район',
            ),
            150 => 
            array (
                'id' => 165,
                'region_id' => 11,
                'name_uz' => 'Chirchiq shahri',
                'name_oz' => 'Чирчиқ шаҳри',
                'name_ru' => 'город Чирчик',
            ),
            151 => 
            array (
                'id' => 166,
                'region_id' => 11,
                'name_uz' => 'Yuqorichirchiq tumani',
                'name_oz' => 'Юқоричирчиқ тумани',
                'name_ru' => 'Юкоричирчикский район',
            ),
            152 => 
            array (
                'id' => 167,
                'region_id' => 11,
                'name_uz' => 'Yangiyo‘l tumani',
                'name_oz' => 'Янгийўл тумани',
                'name_ru' => 'Янгиюльский район',
            ),
            153 => 
            array (
                'id' => 168,
                'region_id' => 12,
                'name_uz' => 'Beshariq tumani',
                'name_oz' => 'Бешариқ тумани',
                'name_ru' => 'Бешарыкский район',
            ),
            154 => 
            array (
                'id' => 169,
                'region_id' => 12,
                'name_uz' => 'Bog‘dod tumani',
                'name_oz' => 'Боғдод тумани',
                'name_ru' => 'Багдадский район',
            ),
            155 => 
            array (
                'id' => 170,
                'region_id' => 12,
                'name_uz' => 'Buvayda tumani',
                'name_oz' => 'Бувайда тумани',
                'name_ru' => 'Бувайдинский район',
            ),
            156 => 
            array (
                'id' => 171,
                'region_id' => 12,
                'name_uz' => 'Dang‘ara tumani',
                'name_oz' => 'Данғара тумани',
                'name_ru' => 'Дангаринский район',
            ),
            157 => 
            array (
                'id' => 172,
                'region_id' => 12,
                'name_uz' => 'Yozyovon tumani',
                'name_oz' => 'Ёзёвон тумани',
                'name_ru' => 'Язъяванский район',
            ),
            158 => 
            array (
                'id' => 173,
                'region_id' => 12,
                'name_uz' => 'Quva tumani',
                'name_oz' => 'Қува тумани',
                'name_ru' => 'Кувинский район',
            ),
            159 => 
            array (
                'id' => 174,
                'region_id' => 12,
                'name_uz' => 'Quvasoy shahri',
                'name_oz' => 'Қувасой шаҳри',
                'name_ru' => 'город Кувасай',
            ),
            160 => 
            array (
                'id' => 175,
                'region_id' => 12,
                'name_uz' => 'Qo‘qon shahri',
                'name_oz' => 'Қўқон шаҳри',
                'name_ru' => 'город Коканд',
            ),
            161 => 
            array (
                'id' => 176,
                'region_id' => 12,
                'name_uz' => 'Qo‘shtepa tumani',
                'name_oz' => 'Қўштепа тумани',
                'name_ru' => 'Куштепинский район',
            ),
            162 => 
            array (
                'id' => 177,
                'region_id' => 12,
                'name_uz' => 'Marg‘ilon shahri',
                'name_oz' => 'Марғилон шаҳри',
                'name_ru' => 'город Маргилан',
            ),
            163 => 
            array (
                'id' => 178,
                'region_id' => 12,
                'name_uz' => 'Oltiariq tumani',
                'name_oz' => 'Олтиариқ тумани',
                'name_ru' => 'Алтыарыкский район',
            ),
            164 => 
            array (
                'id' => 179,
                'region_id' => 12,
                'name_uz' => 'Rishton tumani',
                'name_oz' => 'Риштон тумани',
                'name_ru' => 'Риштанский район',
            ),
            165 => 
            array (
                'id' => 180,
                'region_id' => 12,
                'name_uz' => 'So‘x tumani',
                'name_oz' => 'Сўх тумани',
                'name_ru' => 'Сохский район',
            ),
            166 => 
            array (
                'id' => 181,
                'region_id' => 12,
                'name_uz' => 'Toshloq tumani',
                'name_oz' => 'Тошлоқ тумани',
                'name_ru' => 'Ташлакский район',
            ),
            167 => 
            array (
                'id' => 182,
                'region_id' => 12,
                'name_uz' => 'Uchko‘prik tumani',
                'name_oz' => 'Учкўприк тумани',
                'name_ru' => 'Учкуприкский район',
            ),
            168 => 
            array (
                'id' => 183,
                'region_id' => 12,
                'name_uz' => 'O‘zbekiston tumani',
                'name_oz' => 'Ўзбекистон тумани',
                'name_ru' => 'Узбекистанский район',
            ),
            169 => 
            array (
                'id' => 184,
                'region_id' => 12,
                'name_uz' => 'Farg‘ona tumani',
                'name_oz' => 'Фарғона тумани',
                'name_ru' => 'Ферганский район',
            ),
            170 => 
            array (
                'id' => 185,
                'region_id' => 12,
                'name_uz' => 'Farg‘ona shahri',
                'name_oz' => 'Фарғона шаҳри',
                'name_ru' => 'город Фергана',
            ),
            171 => 
            array (
                'id' => 186,
                'region_id' => 12,
                'name_uz' => 'Furqat tumani',
                'name_oz' => 'Фурқат тумани',
                'name_ru' => 'Фуркатский район',
            ),
            172 => 
            array (
                'id' => 187,
                'region_id' => 13,
                'name_uz' => 'Bog‘ot tumani',
                'name_oz' => 'Боғот тумани',
                'name_ru' => 'Багатский район',
            ),
            173 => 
            array (
                'id' => 188,
                'region_id' => 13,
                'name_uz' => 'Gurlan tumani',
                'name_oz' => 'Гурлан тумани',
                'name_ru' => 'Гурленский район',
            ),
            174 => 
            array (
                'id' => 189,
                'region_id' => 13,
                'name_uz' => 'Qo‘shko‘pir tumani',
                'name_oz' => 'Қўшкўпир тумани',
                'name_ru' => 'Кошкупырский район',
            ),
            175 => 
            array (
                'id' => 190,
                'region_id' => 13,
                'name_uz' => 'Urganch tumani',
                'name_oz' => 'Урганч тумани',
                'name_ru' => 'Ургенчский район',
            ),
            176 => 
            array (
                'id' => 191,
                'region_id' => 13,
                'name_uz' => 'Urganch shahri',
                'name_oz' => 'Урганч шаҳри',
                'name_ru' => 'город Ургенч',
            ),
            177 => 
            array (
                'id' => 192,
                'region_id' => 13,
                'name_uz' => 'Xiva tumani',
                'name_oz' => 'Хива тумани',
                'name_ru' => 'Хивинский район',
            ),
            178 => 
            array (
                'id' => 193,
                'region_id' => 13,
                'name_uz' => 'Xazarasp tumani',
                'name_oz' => 'Хазарасп тумани',
                'name_ru' => 'Хазараспский район',
            ),
            179 => 
            array (
                'id' => 194,
                'region_id' => 13,
                'name_uz' => 'Xonqa tumani',
                'name_oz' => 'Хонқа тумани',
                'name_ru' => 'Ханкинский район',
            ),
            180 => 
            array (
                'id' => 195,
                'region_id' => 13,
                'name_uz' => 'Shavot tumani',
                'name_oz' => 'Шавот тумани',
                'name_ru' => 'Шаватский район',
            ),
            181 => 
            array (
                'id' => 196,
                'region_id' => 13,
                'name_uz' => 'Yangiariq tumani',
                'name_oz' => 'Янгиариқ тумани',
                'name_ru' => 'Янгиарыкский район',
            ),
            182 => 
            array (
                'id' => 197,
                'region_id' => 13,
                'name_uz' => 'Yangibozor tumani',
                'name_oz' => 'Янгибозор тумани',
                'name_ru' => 'Янгибазарский район',
            ),
            183 => 
            array (
                'id' => 198,
                'region_id' => 14,
                'name_uz' => 'Bektimer tumani',
                'name_oz' => 'Бектимер тумани',
                'name_ru' => 'Бектемирский район',
            ),
            184 => 
            array (
                'id' => 199,
                'region_id' => 14,
                'name_uz' => 'M.Ulug‘bek tumani',
                'name_oz' => 'М.Улуғбек тумани',
                'name_ru' => 'Мирзо-Улугбекский район',
            ),
            185 => 
            array (
                'id' => 200,
                'region_id' => 14,
                'name_uz' => 'Mirobod tumani',
                'name_oz' => 'Миробод тумани',
                'name_ru' => 'Мирабадский район',
            ),
            186 => 
            array (
                'id' => 201,
                'region_id' => 14,
                'name_uz' => 'Olmazor tumani',
                'name_oz' => 'Олмазор тумани',
                'name_ru' => 'Алмазарский район',
            ),
            187 => 
            array (
                'id' => 202,
                'region_id' => 14,
                'name_uz' => 'Sirg\'ali tumani',
                'name_oz' => 'Сиргали тумани',
                'name_ru' => 'Сергелийский район',
            ),
            188 => 
            array (
                'id' => 203,
                'region_id' => 14,
                'name_uz' => 'Uchtepa tumani',
                'name_oz' => 'Учтепа тумани',
                'name_ru' => 'Учтепинский район',
            ),
            189 => 
            array (
                'id' => 204,
                'region_id' => 14,
                'name_uz' => 'Yashnobod tumani',
                'name_oz' => 'Яшнобод тумани',
                'name_ru' => 'Яшнободский район',
            ),
            190 => 
            array (
                'id' => 205,
                'region_id' => 14,
                'name_uz' => 'Chilonzor tumani',
                'name_oz' => 'Чилонзор тумани',
                'name_ru' => 'Чиланзарский район',
            ),
            191 => 
            array (
                'id' => 206,
                'region_id' => 14,
                'name_uz' => 'Shayxontohur tumani',
                'name_oz' => 'Шайхонтоҳур тумани',
                'name_ru' => 'Шайхантахурский район',
            ),
            192 => 
            array (
                'id' => 207,
                'region_id' => 14,
                'name_uz' => 'Yunusobod tumani',
                'name_oz' => 'Юнусобод тумани',
                'name_ru' => 'Юнусабадский район',
            ),
            193 => 
            array (
                'id' => 208,
                'region_id' => 14,
                'name_uz' => 'Yakkasaroy tumani',
                'name_oz' => 'Яккасарой тумани',
                'name_ru' => 'Яккасарайский район',
            ),
            194 => 
            array (
                'id' => 209,
                'region_id' => 1,
                'name_uz' => 'Taxiatosh shahri',
                'name_oz' => 'Тахиатош шаҳри',
                'name_ru' => 'Тахиаташский район',
            ),
            195 => 
            array (
                'id' => 210,
                'region_id' => 2,
                'name_uz' => 'Asaka shahri',
                'name_oz' => 'Асака шаҳри',
                'name_ru' => 'Асакинский район',
            ),
            196 => 
            array (
                'id' => 211,
                'region_id' => 9,
                'name_uz' => 'Bandixon tumani',
                'name_oz' => 'Бандихон тумани',
                'name_ru' => 'Бандиханский район',
            ),
            197 => 
            array (
                'id' => 212,
                'region_id' => 11,
                'name_uz' => 'Ohangaron shahri',
                'name_oz' => 'Оҳангарон шаҳри',
                'name_ru' => 'город Ахангаранский',
            ),
            198 => 
            array (
                'id' => 213,
                'region_id' => 11,
                'name_uz' => 'Yangiyo‘l shahri',
                'name_oz' => 'Янгийўл шаҳри',
                'name_ru' => 'город Янгиюль',
            ),
            199 => 
            array (
                'id' => 215,
                'region_id' => 11,
                'name_uz' => 'Toshkent tumani',
                'name_oz' => 'Тошкент тумани',
                'name_ru' => 'Ташкентский район',
            ),
            200 => 
            array (
                'id' => 216,
                'region_id' => 13,
                'name_uz' => 'Xiva shahri',
                'name_oz' => 'Хива шаҳри

Хива шаҳри

Хива шаҳри',
                'name_ru' => 'город Хива',
            ),
            201 => 
            array (
                'id' => 217,
                'region_id' => 13,
                'name_uz' => 'Do\'stlik shahri',
                'name_oz' => 'Дўстлик шаҳри
Дўстлик шаҳри',
                'name_ru' => 'город Дўстлик
Дўстлик',
            ),
        ));
        
        
    }
}