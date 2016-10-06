<?php

use Illuminate\Database\Seeder;

class BalancesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('balances')->delete();
        
        \DB::connection('pgsql')->table('balances')->insert(array (
            0 => 
            array (
                'id' => 266,
                'value' => -1,
                'currency_id' => 1,
                'user_id' => 93,
                'created_at' => '2016-10-06 09:56:58',
                'updated_at' => '2016-10-06 09:56:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 265,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 93,
                'created_at' => '2016-10-06 09:56:58',
                'updated_at' => '2016-10-06 09:56:58',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 264,
                'value' => 10,
                'currency_id' => 2,
                'user_id' => 2,
                'created_at' => '2016-10-06 09:53:23',
                'updated_at' => '2016-10-06 09:53:23',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 261,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 260,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 259,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 258,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 257,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 256,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 255,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 254,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 253,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 252,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 251,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 250,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 249,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 248,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 247,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 246,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 245,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 244,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 243,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 242,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 241,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 240,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 239,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 238,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 237,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 236,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 235,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 234,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 233,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 232,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 231,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 230,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 229,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 228,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 227,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 226,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 225,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 224,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 223,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 222,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 221,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 220,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 219,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 218,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 217,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 216,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 215,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 214,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 213,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 212,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 211,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 210,
                'value' => 1,
                'currency_id' => 1,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2016-10-06 09:58:16',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 156,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 155,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 154,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 153,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 152,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 151,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 150,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 149,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 148,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 147,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 146,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 145,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 144,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 143,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 142,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 141,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 140,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 139,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 138,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 137,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 136,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 135,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 134,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 133,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 132,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 131,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 130,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 129,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 128,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 127,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 126,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 125,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 124,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 123,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 122,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 121,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 120,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 119,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 118,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 117,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 116,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 115,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 114,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 113,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 112,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 111,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 109,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 108,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 107,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 106,
                'value' => 5,
                'currency_id' => 3,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 105,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 104,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 103,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 102,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 101,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 100,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 99,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 98,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 97,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 96,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 95,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 94,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 93,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 92,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 91,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 90,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 89,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 88,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 87,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 86,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 85,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 84,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 83,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 82,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 81,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 80,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 79,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 78,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 77,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 76,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 75,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 74,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 73,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 72,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 71,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 70,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 69,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 68,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 67,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 66,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 65,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 64,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 63,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 62,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 61,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 60,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 58,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 57,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 56,
                'value' => 100,
                'currency_id' => 4,
                'user_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 55,
                'value' => 0,
                'currency_id' => 4,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2016-10-06 09:58:16',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2,
                'value' => 45,
                'currency_id' => 4,
                'user_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1,
                'value' => 13,
                'currency_id' => 3,
                'user_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
