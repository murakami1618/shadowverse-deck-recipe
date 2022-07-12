<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cards')->delete();
        
        \DB::table('cards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_name' => 'フェアリープリンセス・アリア',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-001.png',
                'card_class' => 'エルフ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            1 => 
            array (
                'id' => 2,
                'card_name' => 'ティターニアの妖精郷',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-002.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            2 => 
            array (
                'id' => 3,
                'card_name' => 'ローズガーデンキーパー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-003.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            3 => 
            array (
                'id' => 4,
                'card_name' => 'ローズガーデンキーパー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-004.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            4 => 
            array (
                'id' => 5,
                'card_name' => 'ワルツフェアリー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-005.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            5 => 
            array (
                'id' => 6,
                'card_name' => 'フェアリーキャスター',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-006.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            6 => 
            array (
                'id' => 7,
                'card_name' => 'メタルエルフメイジ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-007.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            7 => 
            array (
                'id' => 8,
                'card_name' => '大狼',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-008.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            8 => 
            array (
                'id' => 9,
                'card_name' => 'トレント',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-009.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            9 => 
            array (
                'id' => 10,
                'card_name' => 'トレント',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-010.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            10 => 
            array (
                'id' => 11,
                'card_name' => 'ウォーターフェアリー',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-011.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            11 => 
            array (
                'id' => 12,
                'card_name' => 'ウォーターフェアリー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-012.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            12 => 
            array (
                'id' => 13,
                'card_name' => '放浪するエルフ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-013.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            13 => 
            array (
                'id' => 14,
                'card_name' => 'フェアリーサークル',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-014.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            14 => 
            array (
                'id' => 15,
                'card_name' => '森の聖域',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-015.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            15 => 
            array (
                'id' => 16,
                'card_name' => '森荒らしへの報い',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-016.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            16 => 
            array (
                'id' => 17,
                'card_name' => 'ゴブリン',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-017.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            17 => 
            array (
                'id' => 18,
                'card_name' => 'ゴブリン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-018.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            18 => 
            array (
                'id' => 19,
                'card_name' => 'エンジェルスナイプ',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-019.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            19 => 
            array (
                'id' => 20,
                'card_name' => 'エンジェルバレッジ',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD01/SD01-020.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            20 => 
            array (
                'id' => 21,
                'card_name' => 'ツバキ',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-001.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            21 => 
            array (
                'id' => 22,
                'card_name' => 'ヴァンガード・レイサム',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-002.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            22 => 
            array (
                'id' => 23,
                'card_name' => 'フローラルフェンサー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-003.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            23 => 
            array (
                'id' => 24,
                'card_name' => 'フローラルフェンサー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-004.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            24 => 
            array (
                'id' => 25,
                'card_name' => 'アサシン',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-005.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            25 => 
            array (
                'id' => 26,
                'card_name' => 'ホワイトジェネラル',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-006.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            26 => 
            array (
                'id' => 27,
                'card_name' => 'ニンジャエッグ',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-007.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            27 => 
            array (
                'id' => 28,
                'card_name' => '歴戦のランサー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-008.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            28 => 
            array (
                'id' => 29,
                'card_name' => 'フェンサー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-009.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            29 => 
            array (
                'id' => 30,
                'card_name' => 'オースレスナイト',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-010.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            30 => 
            array (
                'id' => 31,
                'card_name' => 'オースレスナイト',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-011.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            31 => 
            array (
                'id' => 32,
                'card_name' => 'クイックブレーダー',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-012.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            32 => 
            array (
                'id' => 33,
                'card_name' => 'クイックブレーダー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-013.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            33 => 
            array (
                'id' => 34,
                'card_name' => '武装強化',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-014.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            34 => 
            array (
                'id' => 35,
                'card_name' => '猛襲',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-015.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            35 => 
            array (
                'id' => 36,
                'card_name' => '疾風怒濤',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-016.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            37 => 
            array (
                'id' => 38,
                'card_name' => 'ファイター',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-019.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            38 => 
            array (
                'id' => 39,
                'card_name' => '天剣の乙女',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD02/SD02-020.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            39 => 
            array (
                'id' => 40,
                'card_name' => 'ミスリルゴーレム',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-001.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            40 => 
            array (
                'id' => 41,
                'card_name' => 'ルーンブレードサモナー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-002.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            41 => 
            array (
                'id' => 42,
                'card_name' => 'デモンフレイムメイジ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-003.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            42 => 
            array (
                'id' => 43,
                'card_name' => 'デモンフレイムメイジ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-004.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            43 => 
            array (
                'id' => 44,
                'card_name' => '知恵の光',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-005.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            44 => 
            array (
                'id' => 45,
                'card_name' => 'ファイアーチェイン',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-006.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            45 => 
            array (
                'id' => 46,
                'card_name' => 'ライトニングシューター',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-007.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            46 => 
            array (
                'id' => 47,
                'card_name' => 'ペンギンウィザード',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-008.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            47 => 
            array (
                'id' => 48,
                'card_name' => 'ペンギンウィザード',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-009.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            48 => 
            array (
                'id' => 49,
                'card_name' => 'ルーキーマジシャン・サミー',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-010.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            49 => 
            array (
                'id' => 50,
                'card_name' => 'ルーキーマジシャン・サミー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-011.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            50 => 
            array (
                'id' => 51,
                'card_name' => 'ウィンドブラスト',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-012.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            51 => 
            array (
                'id' => 52,
                'card_name' => '魔力の蓄積',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-013.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            52 => 
            array (
                'id' => 53,
                'card_name' => '炎の握撃',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-014.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            53 => 
            array (
                'id' => 54,
                'card_name' => 'マジックミサイル',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-015.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            54 => 
            array (
                'id' => 55,
                'card_name' => 'ゴーレムの錬成',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-016.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            55 => 
            array (
                'id' => 56,
                'card_name' => 'ヒーリングエンジェル',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-017.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            56 => 
            array (
                'id' => 57,
                'card_name' => 'ヒーリングエンジェル',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD03/SD03-018.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            57 => 
            array (
                'id' => 58,
                'card_name' => 'ファフニール',
                'cost' => '8',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-001.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            58 => 
            array (
                'id' => 59,
                'card_name' => '竜の託宣',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-002.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            59 => 
            array (
                'id' => 60,
                'card_name' => 'ドラゴンウォーリア',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-003.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            60 => 
            array (
                'id' => 61,
                'card_name' => 'ドラゴンウォーリア',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-004.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            61 => 
            array (
                'id' => 62,
                'card_name' => 'ドラゴニュートプリンセス',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-005.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            62 => 
            array (
                'id' => 63,
                'card_name' => 'ドラゴンガード',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-006.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            63 => 
            array (
                'id' => 64,
                'card_name' => 'ファイアーリザード',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-007.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            64 => 
            array (
                'id' => 65,
                'card_name' => 'ドレッドドラゴン',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-008.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            65 => 
            array (
                'id' => 66,
                'card_name' => 'ルフ鳥',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-009.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            66 => 
            array (
                'id' => 67,
                'card_name' => 'ルフ鳥',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-010.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            67 => 
            array (
                'id' => 68,
                'card_name' => 'グリントドラゴン',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-011.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            68 => 
            array (
                'id' => 69,
                'card_name' => 'ドラゴンライダー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-012.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            69 => 
            array (
                'id' => 70,
                'card_name' => 'ドラゴンライダー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-013.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            70 => 
            array (
                'id' => 71,
                'card_name' => '海剣竜',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-014.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            71 => 
            array (
                'id' => 72,
                'card_name' => 'ブレイジングブレス',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-015.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            72 => 
            array (
                'id' => 73,
                'card_name' => '竜の翼',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-016.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            73 => 
            array (
                'id' => 74,
                'card_name' => 'ゴリアテ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-017.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            74 => 
            array (
                'id' => 75,
                'card_name' => 'ゴリアテ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD04/SD04-018.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            75 => 
            array (
                'id' => 76,
                'card_name' => 'クイーンヴァンパイア',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-001.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            76 => 
            array (
                'id' => 77,
                'card_name' => 'アルカード',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-002.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            77 => 
            array (
                'id' => 78,
                'card_name' => '悪戯なネクロマンサー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-003.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            78 => 
            array (
                'id' => 79,
                'card_name' => '悪戯なネクロマンサー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-004.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            79 => 
            array (
                'id' => 80,
                'card_name' => 'ミッドナイトヴァンパイア',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-005.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            80 => 
            array (
                'id' => 81,
                'card_name' => '夜の群れ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-006.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            81 => 
            array (
                'id' => 82,
                'card_name' => 'スペクター',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-007.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            82 => 
            array (
                'id' => 83,
                'card_name' => 'スパルトイサージェント',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-008.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            83 => 
            array (
                'id' => 84,
                'card_name' => 'アンデッドキング',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-009.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            84 => 
            array (
                'id' => 85,
                'card_name' => 'レッサーマミー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-010.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            85 => 
            array (
                'id' => 86,
                'card_name' => 'レッサーマミー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-011.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            86 => 
            array (
                'id' => 87,
                'card_name' => 'リリム',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-012.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            87 => 
            array (
                'id' => 88,
                'card_name' => 'リリム',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-013.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            88 => 
            array (
                'id' => 89,
                'card_name' => '鋭利な一裂き',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-014.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            89 => 
            array (
                'id' => 90,
                'card_name' => '消えぬ怨恨',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-015.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            90 => 
            array (
                'id' => 91,
                'card_name' => '眷属の召喚',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-016.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            92 => 
            array (
                'id' => 93,
                'card_name' => '悪戯なネクロマンサー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-004.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            93 => 
            array (
                'id' => 94,
                'card_name' => 'レッサーマミー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-011.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            94 => 
            array (
                'id' => 95,
                'card_name' => 'リリム',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD05/SD05-013.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            96 => 
            array (
                'id' => 97,
                'card_name' => 'スカルフェイン',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-001.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            97 => 
            array (
                'id' => 98,
                'card_name' => '夢想の白兎',
                'cost' => '0',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-002.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            98 => 
            array (
                'id' => 99,
                'card_name' => '鉄槌の僧侶',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-003.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            99 => 
            array (
                'id' => 100,
                'card_name' => '鉄槌の僧侶',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-004.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            100 => 
            array (
                'id' => 101,
                'card_name' => '破邪の光',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-005.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            101 => 
            array (
                'id' => 102,
                'card_name' => '二対の炎',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-006.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'アミュレット',
            ),
            102 => 
            array (
                'id' => 103,
                'card_name' => '残忍な修道女',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-007.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            103 => 
            array (
                'id' => 104,
                'card_name' => 'スネークプリースト',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-008.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            104 => 
            array (
                'id' => 105,
                'card_name' => 'アーデントシスター',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-009.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            105 => 
            array (
                'id' => 106,
                'card_name' => 'アーデントシスター',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-010.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            106 => 
            array (
                'id' => 107,
                'card_name' => 'ガーディアンシスター',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-011.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            107 => 
            array (
                'id' => 108,
                'card_name' => 'ガーディアンシスター',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-012.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            108 => 
            array (
                'id' => 109,
                'card_name' => '気高き教理',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-013.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            109 => 
            array (
                'id' => 110,
                'card_name' => '死の宣告',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-014.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            110 => 
            array (
                'id' => 111,
                'card_name' => '白翼への祈り',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-015.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            111 => 
            array (
                'id' => 112,
                'card_name' => '聖獣への誓い',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-016.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            113 => 
            array (
                'id' => 114,
                'card_name' => '鉄槌の僧侶',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-004.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            114 => 
            array (
                'id' => 115,
                'card_name' => 'アーデントシスター',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-010.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            115 => 
            array (
                'id' => 116,
                'card_name' => 'ガーディアンシスター',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/SD06/SD06-012.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            117 => 
            array (
                'id' => 118,
                'card_name' => 'ローズクイーン',
                'cost' => '8',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_001.png',
                'card_class' => 'エルフ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            118 => 
            array (
                'id' => 119,
                'card_name' => 'エンシェントエルフ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_002.png',
                'card_class' => 'エルフ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            119 => 
            array (
                'id' => 120,
                'card_name' => 'エンシェントエルフ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_003.png',
                'card_class' => 'エルフ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            120 => 
            array (
                'id' => 121,
                'card_name' => 'リノセウス',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_004.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            121 => 
            array (
                'id' => 122,
                'card_name' => 'リノセウス',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_005.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            122 => 
            array (
                'id' => 123,
                'card_name' => 'ロビンフッド',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_006.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            123 => 
            array (
                'id' => 124,
                'card_name' => '白銀の矢',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_007.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            124 => 
            array (
                'id' => 125,
                'card_name' => '根源への回帰',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_008.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            125 => 
            array (
                'id' => 126,
                'card_name' => 'エルフプリンセスメイジ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_009.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            126 => 
            array (
                'id' => 127,
                'card_name' => 'エルフプリンセスメイジ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_010.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            127 => 
            array (
                'id' => 128,
                'card_name' => 'ブレスフェアリーダンサー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_011.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            128 => 
            array (
                'id' => 129,
                'card_name' => 'ベビーエルフ・メイ',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_012.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            129 => 
            array (
                'id' => 130,
                'card_name' => 'フェアリービースト',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_013.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            130 => 
            array (
                'id' => 131,
                'card_name' => 'ノーブルフェアリー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_014.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            131 => 
            array (
                'id' => 132,
                'card_name' => '自然の導き',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_015.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            132 => 
            array (
                'id' => 133,
                'card_name' => '収穫祭',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_016.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'アミュレット',
            ),
            133 => 
            array (
                'id' => 134,
                'card_name' => 'アーチャー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_018.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            134 => 
            array (
                'id' => 135,
                'card_name' => 'アーチャー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_019.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            135 => 
            array (
                'id' => 136,
                'card_name' => 'フェアリーウィスパラー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_020.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            136 => 
            array (
                'id' => 137,
                'card_name' => 'マナエルク',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_022.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            137 => 
            array (
                'id' => 138,
                'card_name' => '精霊の呪い',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_024.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            138 => 
            array (
                'id' => 139,
                'card_name' => '海底都市王・乙姫',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_026.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            139 => 
            array (
                'id' => 140,
                'card_name' => '海底都市王・乙姫',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_027.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            140 => 
            array (
                'id' => 141,
                'card_name' => 'ロイヤルセイバー・オーレリア',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_028.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            141 => 
            array (
                'id' => 142,
                'card_name' => '闇を纏う暗殺者',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_029.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            142 => 
            array (
                'id' => 143,
                'card_name' => '闇を纏う暗殺者',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_030.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            143 => 
            array (
                'id' => 144,
                'card_name' => 'フロントガードジェネラル',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_031.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            144 => 
            array (
                'id' => 145,
                'card_name' => 'アルビダの号令',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_032.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            145 => 
            array (
                'id' => 146,
                'card_name' => '王家の御旗',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_033.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            146 => 
            array (
                'id' => 147,
                'card_name' => 'メイドリーダー',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_034.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            147 => 
            array (
                'id' => 148,
                'card_name' => 'メイドリーダー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_035.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            148 => 
            array (
                'id' => 149,
                'card_name' => '宝杖の司令官',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_036.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            149 => 
            array (
                'id' => 150,
                'card_name' => 'セージコマンダー',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_037.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            150 => 
            array (
                'id' => 151,
                'card_name' => '剣豪',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_038.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            151 => 
            array (
                'id' => 152,
                'card_name' => 'わがままプリンセス',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_039.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            152 => 
            array (
                'id' => 153,
                'card_name' => 'ニンジャマスター',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_040.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            153 => 
            array (
                'id' => 154,
                'card_name' => '騎士王の威光',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_041.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'アミュレット',
            ),
            154 => 
            array (
                'id' => 155,
                'card_name' => '不屈の兵士',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_043.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            155 => 
            array (
                'id' => 156,
                'card_name' => '不屈の兵士',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_044.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            156 => 
            array (
                'id' => 157,
                'card_name' => 'ルミナスナイト',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_045.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            157 => 
            array (
                'id' => 158,
                'card_name' => 'ネイビールテナント',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_047.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            158 => 
            array (
                'id' => 159,
                'card_name' => 'ノーヴィストルーパー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_048.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            159 => 
            array (
                'id' => 160,
                'card_name' => 'アークサモナー・エラスムス',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_051.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            160 => 
            array (
                'id' => 161,
                'card_name' => 'マーリン',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_052.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            161 => 
            array (
                'id' => 162,
                'card_name' => 'マーリン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_053.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            162 => 
            array (
                'id' => 163,
                'card_name' => 'エンシェントアルケミスト',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_054.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            163 => 
            array (
                'id' => 164,
                'card_name' => 'エンシェントアルケミスト',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_055.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            164 => 
            array (
                'id' => 165,
                'card_name' => '神秘の獲得',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_056.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            165 => 
            array (
                'id' => 166,
                'card_name' => '次元の超越',
                'cost' => '12',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_057.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            166 => 
            array (
                'id' => 167,
                'card_name' => 'ノノの秘密研究室',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_058.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            167 => 
            array (
                'id' => 168,
                'card_name' => 'スペクトラルウィザード',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_059.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            168 => 
            array (
                'id' => 169,
                'card_name' => 'スペクトラルウィザード',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_060.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            169 => 
            array (
                'id' => 170,
                'card_name' => 'フレイムデストロイヤー',
                'cost' => '9',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_061.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            170 => 
            array (
                'id' => 171,
                'card_name' => 'ドラゴンメイジ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_062.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            171 => 
            array (
                'id' => 172,
                'card_name' => 'ゴーレムプロテクション',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_063.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            172 => 
            array (
                'id' => 173,
                'card_name' => 'アルケミックロア',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_064.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            173 => 
            array (
                'id' => 174,
                'card_name' => '運命の導き',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_065.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            174 => 
            array (
                'id' => 175,
                'card_name' => '錬金術の代償',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_066.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'アミュレット',
            ),
            175 => 
            array (
                'id' => 176,
                'card_name' => 'ルーンガーディアン',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_067.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            176 => 
            array (
                'id' => 177,
                'card_name' => 'クラフトウォーロック',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_068.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            177 => 
            array (
                'id' => 178,
                'card_name' => 'クラフトウォーロック',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_069.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            178 => 
            array (
                'id' => 179,
                'card_name' => '錬金工房',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_074.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            179 => 
            array (
                'id' => 180,
                'card_name' => '雄大なる教え',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_075.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            180 => 
            array (
                'id' => 181,
                'card_name' => 'ダークドラグーン・フォルテ',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_076.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            181 => 
            array (
                'id' => 182,
                'card_name' => 'ダークドラグーン・フォルテ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_077.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            182 => 
            array (
                'id' => 183,
                'card_name' => 'ジルニトラ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_078.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            183 => 
            array (
                'id' => 184,
                'card_name' => 'ドラゴンナイト・アイラ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_079.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            184 => 
            array (
                'id' => 185,
                'card_name' => 'ジェネシスドラゴン',
                'cost' => '9',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_080.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            185 => 
            array (
                'id' => 186,
                'card_name' => '変化する魔術師',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_081.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            186 => 
            array (
                'id' => 187,
                'card_name' => '変化する魔術師',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_082.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            187 => 
            array (
                'id' => 188,
                'card_name' => '鳳凰の庭園',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_083.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            188 => 
            array (
                'id' => 189,
                'card_name' => '騎竜兵',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_084.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            189 => 
            array (
                'id' => 190,
                'card_name' => 'ドラゴニュートスカラー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_085.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            190 => 
            array (
                'id' => 191,
                'card_name' => '神龍',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_086.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            191 => 
            array (
                'id' => 192,
                'card_name' => '神龍',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_087.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            192 => 
            array (
                'id' => 193,
                'card_name' => 'プリズンドラゴン',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_088.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            193 => 
            array (
                'id' => 194,
                'card_name' => '灼熱の嵐',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_089.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            194 => 
            array (
                'id' => 195,
                'card_name' => '竜の怒り',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_090.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            195 => 
            array (
                'id' => 196,
                'card_name' => '竜化の塔',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_091.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'アミュレット',
            ),
            196 => 
            array (
                'id' => 197,
                'card_name' => 'アイボリードラゴン',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_092.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            197 => 
            array (
                'id' => 198,
                'card_name' => 'アイボリードラゴン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_093.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            198 => 
            array (
                'id' => 199,
                'card_name' => 'エースドラグーン',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_095.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            199 => 
            array (
                'id' => 200,
                'card_name' => 'ミストドラゴン',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_096.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            200 => 
            array (
                'id' => 201,
                'card_name' => '竜の伝令',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_100.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            201 => 
            array (
                'id' => 202,
                'card_name' => 'ケルベロス',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_101.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            202 => 
            array (
                'id' => 203,
                'card_name' => 'ケルベロス',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_102.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            203 => 
            array (
                'id' => 204,
                'card_name' => '骸の王',
                'cost' => '9',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_103.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            204 => 
            array (
                'id' => 205,
                'card_name' => 'メドゥーサ',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_104.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            205 => 
            array (
                'id' => 206,
                'card_name' => '裁きの悪魔',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_105.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            206 => 
            array (
                'id' => 207,
                'card_name' => '裁きの悪魔',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_106.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            207 => 
            array (
                'id' => 208,
                'card_name' => 'デュエリスト・モルディカイ',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_107.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            208 => 
            array (
                'id' => 209,
                'card_name' => '漆黒の契約',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_108.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            209 => 
            array (
                'id' => 210,
                'card_name' => '地獄の解放者',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_109.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            210 => 
            array (
                'id' => 211,
                'card_name' => '狂気の処刑人',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_110.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            211 => 
            array (
                'id' => 212,
                'card_name' => '狂気の処刑人',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_111.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            212 => 
            array (
                'id' => 213,
                'card_name' => 'ダークサモナー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_112.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            213 => 
            array (
                'id' => 214,
                'card_name' => 'ダークジェネラル',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_113.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            214 => 
            array (
                'id' => 215,
                'card_name' => 'ファントムハウル',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_114.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            215 => 
            array (
                'id' => 216,
                'card_name' => '死の祝福',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_115.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            216 => 
            array (
                'id' => 217,
                'card_name' => 'ソウルコンバージョン',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_116.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            217 => 
            array (
                'id' => 218,
                'card_name' => 'スケルトンファイター',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_117.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            218 => 
            array (
                'id' => 219,
                'card_name' => '蠢く死霊',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_118.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            219 => 
            array (
                'id' => 220,
                'card_name' => 'ラビットネクロマンサー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_121.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            220 => 
            array (
                'id' => 221,
                'card_name' => 'ワードローブレイダー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_122.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            221 => 
            array (
                'id' => 222,
                'card_name' => 'ワードローブレイダー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_123.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            222 => 
            array (
                'id' => 223,
                'card_name' => 'ムーンアルミラージ',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_126.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            223 => 
            array (
                'id' => 224,
                'card_name' => 'ジャンヌダルク',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_127.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            224 => 
            array (
                'id' => 225,
                'card_name' => 'ジャンヌダルク',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_128.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            225 => 
            array (
                'id' => 226,
                'card_name' => 'アークビショップ・レリア',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_129.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            226 => 
            array (
                'id' => 227,
                'card_name' => 'アークビショップ・レリア',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_130.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            227 => 
            array (
                'id' => 228,
                'card_name' => 'テミスの審判',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_131.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            228 => 
            array (
                'id' => 229,
                'card_name' => '祈りの集約',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_132.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            229 => 
            array (
                'id' => 230,
                'card_name' => '聖なる願い',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_133.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            230 => 
            array (
                'id' => 231,
                'card_name' => '教会の護り手',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_134.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            231 => 
            array (
                'id' => 232,
                'card_name' => 'プリズムプリースト',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_135.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            232 => 
            array (
                'id' => 233,
                'card_name' => 'プリズムプリースト',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_136.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            233 => 
            array (
                'id' => 234,
                'card_name' => 'クレリックランサー',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_137.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            234 => 
            array (
                'id' => 235,
                'card_name' => 'シュラインナイトメイデン',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_138.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            235 => 
            array (
                'id' => 236,
                'card_name' => '漆黒の法典',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_139.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            236 => 
            array (
                'id' => 237,
                'card_name' => 'ダークオファリング',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_140.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            237 => 
            array (
                'id' => 238,
                'card_name' => '神域の守護者',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_141.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'アミュレット',
            ),
            238 => 
            array (
                'id' => 239,
                'card_name' => '見習いシスター',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_143.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            239 => 
            array (
                'id' => 240,
                'card_name' => 'マイニュ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_144.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            240 => 
            array (
                'id' => 241,
                'card_name' => 'マイニュ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_145.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            241 => 
            array (
                'id' => 242,
                'card_name' => '大修道女',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_147.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            242 => 
            array (
                'id' => 243,
                'card_name' => '守護の陽光',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_149.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            243 => 
            array (
                'id' => 244,
                'card_name' => 'ガブリエル',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_151.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            244 => 
            array (
                'id' => 245,
                'card_name' => 'ルシフェル',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_152.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            245 => 
            array (
                'id' => 246,
                'card_name' => 'ルシフェル',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_153.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            246 => 
            array (
                'id' => 247,
                'card_name' => 'フラム＝グラス',
                'cost' => '10',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_154.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            247 => 
            array (
                'id' => 248,
                'card_name' => 'ウルズ',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_155.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            248 => 
            array (
                'id' => 249,
                'card_name' => 'ウルズ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_156.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            249 => 
            array (
                'id' => 250,
                'card_name' => '風神',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_157.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            250 => 
            array (
                'id' => 251,
                'card_name' => 'ギルガメッシュ',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_158.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            251 => 
            array (
                'id' => 252,
                'card_name' => 'ベルエンジェル',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_159.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            252 => 
            array (
                'id' => 253,
                'card_name' => 'ベルエンジェル',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_160.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            253 => 
            array (
                'id' => 254,
                'card_name' => '新たなる運命',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_161.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            254 => 
            array (
                'id' => 255,
                'card_name' => '冥府への道',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_162.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            255 => 
            array (
                'id' => 256,
                'card_name' => 'リザードマン',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_163.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            256 => 
            array (
                'id' => 257,
                'card_name' => 'ゴブリンマウントデーモン',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_164.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            257 => 
            array (
                'id' => 258,
                'card_name' => 'ゴブリンマウントデーモン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_165.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            258 => 
            array (
                'id' => 259,
                'card_name' => 'ツインプリズナー・フラム',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_166.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            259 => 
            array (
                'id' => 260,
                'card_name' => 'ツインプリズナー・グラス',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_167.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            260 => 
            array (
                'id' => 261,
                'card_name' => 'デモンストライク',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_168.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            261 => 
            array (
                'id' => 262,
                'card_name' => 'エクスキューション',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_169.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            262 => 
            array (
                'id' => 263,
                'card_name' => '光の道筋',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_170.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            266 => 
            array (
                'id' => 267,
                'card_name' => 'スカイスピリット',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_101.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            267 => 
            array (
                'id' => 268,
                'card_name' => 'ソウルコレクター',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_102.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            268 => 
            array (
                'id' => 269,
                'card_name' => 'スレッジエクソシスト',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_104.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            269 => 
            array (
                'id' => 270,
                'card_name' => 'エメラルドメイデン',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_105.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            270 => 
            array (
                'id' => 271,
                'card_name' => 'ダークエンジェル・オリヴィエ',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_106.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            271 => 
            array (
                'id' => 272,
                'card_name' => 'バハムート',
                'cost' => '9',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_107.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            272 => 
            array (
                'id' => 273,
                'card_name' => '忌むべき悪魔の像',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_109.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            273 => 
            array (
                'id' => 274,
                'card_name' => 'アークエンジェル・レイナ',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_110.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            274 => 
            array (
                'id' => 275,
                'card_name' => '烈火の魔弾',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_112.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            275 => 
            array (
                'id' => 276,
                'card_name' => 'ユニコーンの踊り手・ユニコ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_113.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            276 => 
            array (
                'id' => 277,
                'card_name' => '覇食帝・カイザ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_115.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            277 => 
            array (
                'id' => 278,
                'card_name' => '氷獄の呼び声',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_116.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            278 => 
            array (
                'id' => 279,
                'card_name' => 'ハンサ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_117.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            279 => 
            array (
                'id' => 280,
                'card_name' => 'セクトール',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_118.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            280 => 
            array (
                'id' => 281,
                'card_name' => '死の舞踏',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_120.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            281 => 
            array (
                'id' => 282,
                'card_name' => 'クリスタリアプリンセス・ティア',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_001.png',
                'card_class' => 'エルフ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            282 => 
            array (
                'id' => 283,
                'card_name' => '古き森の白狼',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_003.png',
                'card_class' => 'エルフ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            283 => 
            array (
                'id' => 284,
                'card_name' => 'エルフの少女・リザ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_004.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            284 => 
            array (
                'id' => 285,
                'card_name' => 'エルフナイト・シンシア',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_005.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            285 => 
            array (
                'id' => 286,
                'card_name' => 'グランドアーチャー・セルウィン',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_006.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            286 => 
            array (
                'id' => 287,
                'card_name' => 'クリスタリア・リリィ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_008.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            287 => 
            array (
                'id' => 288,
                'card_name' => 'エルフキング・ヴァルト',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_010.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            288 => 
            array (
                'id' => 289,
                'card_name' => 'エルフの弓術',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_011.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            289 => 
            array (
                'id' => 290,
                'card_name' => 'パフュームドワーフ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_012.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            290 => 
            array (
                'id' => 291,
                'card_name' => '癒しのエルフ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_013.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            291 => 
            array (
                'id' => 292,
                'card_name' => 'フォレストギガース',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_014.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            292 => 
            array (
                'id' => 293,
                'card_name' => 'エルフバード',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_016.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            293 => 
            array (
                'id' => 294,
                'card_name' => 'ローズディアー',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_017.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            294 => 
            array (
                'id' => 295,
                'card_name' => 'レヴィオンセイバー・アルベール',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_018.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            295 => 
            array (
                'id' => 296,
                'card_name' => 'アレキサンダー',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_020.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            296 => 
            array (
                'id' => 297,
                'card_name' => '白銀の騎士・エミリア',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_021.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            297 => 
            array (
                'id' => 298,
                'card_name' => 'レオニダス',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_022.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            298 => 
            array (
                'id' => 299,
                'card_name' => 'ホワイトパラディン',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_024.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            299 => 
            array (
                'id' => 300,
                'card_name' => 'レヴィオンヴァンガード・ジェノ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_025.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            300 => 
            array (
                'id' => 301,
                'card_name' => 'レヴィオンデューク・ユリウス',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_027.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            301 => 
            array (
                'id' => 302,
                'card_name' => '渾身の一振り',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_028.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            302 => 
            array (
                'id' => 303,
                'card_name' => 'スウィフトペネトレーター',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_029.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            303 => 
            array (
                'id' => 304,
                'card_name' => 'サムライ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_030.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            304 => 
            array (
                'id' => 305,
                'card_name' => 'アドバンスブレーダー',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_031.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            305 => 
            array (
                'id' => 306,
                'card_name' => 'フレイムソルジャー',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_033.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            306 => 
            array (
                'id' => 307,
                'card_name' => 'ガンナーメイド・セリエ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_034.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            307 => 
            array (
                'id' => 308,
                'card_name' => '次元の魔女・ドロシー',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_035.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            308 => 
            array (
                'id' => 309,
                'card_name' => '太陽の巫女・パメラ',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_037.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            309 => 
            array (
                'id' => 310,
                'card_name' => 'プリンセスマナリア・アン',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_038.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            310 => 
            array (
                'id' => 311,
                'card_name' => 'マナリアドラコ・グレア',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_040.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            311 => 
            array (
                'id' => 312,
                'card_name' => '白霜の風',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_041.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'スペル',
            ),
            312 => 
            array (
                'id' => 313,
                'card_name' => 'デュアルウィッチ・レミラミ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_042.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            313 => 
            array (
                'id' => 314,
                'card_name' => 'シャドウウィッチ',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_044.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            314 => 
            array (
                'id' => 315,
                'card_name' => '連続実験',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_045.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            315 => 
            array (
                'id' => 316,
                'card_name' => 'マナリアウィザード・クレイグ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_046.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            316 => 
            array (
                'id' => 317,
                'card_name' => 'グランドガーゴイル',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_048.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            317 => 
            array (
                'id' => 318,
                'card_name' => '魔女の雷撃',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_049.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            318 => 
            array (
                'id' => 319,
                'card_name' => 'マジカルストラテジー',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_050.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            319 => 
            array (
                'id' => 320,
                'card_name' => '炎熱の術式',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_051.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'アミュレット',
            ),
            320 => 
            array (
                'id' => 321,
                'card_name' => 'インペリアルドラグーン',
                'cost' => '8',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_052.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            321 => 
            array (
                'id' => 322,
                'card_name' => '竜呼びの笛',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_054.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'LG',
                'card_type' => 'アミュレット',
            ),
            322 => 
            array (
                'id' => 323,
                'card_name' => 'ネプチューン',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_055.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            323 => 
            array (
                'id' => 324,
                'card_name' => '竜の闘気',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_057.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            324 => 
            array (
                'id' => 325,
                'card_name' => '連なる咆哮',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_058.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            325 => 
            array (
                'id' => 326,
                'card_name' => 'ジークフリート',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_059.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            326 => 
            array (
                'id' => 327,
                'card_name' => '変異の巨竜',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_061.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            327 => 
            array (
                'id' => 328,
                'card_name' => '竜巫女の儀式',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_062.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            328 => 
            array (
                'id' => 329,
                'card_name' => '荒牙の竜少女',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_063.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            329 => 
            array (
                'id' => 330,
                'card_name' => 'ムシュフシュ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_064.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            330 => 
            array (
                'id' => 331,
                'card_name' => 'ドラゴンテイマー',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_065.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            331 => 
            array (
                'id' => 332,
                'card_name' => 'ツインヘッドドラゴン',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_067.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            332 => 
            array (
                'id' => 333,
                'card_name' => 'ドラゴニックアーマー',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_068.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'スペル',
            ),
            333 => 
            array (
                'id' => 334,
                'card_name' => '吸血姫・ヴァンピィ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_069.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            334 => 
            array (
                'id' => 335,
                'card_name' => 'ラプラスの魔 ラプラス・ダークネス',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_070.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            335 => 
            array (
                'id' => 336,
                'card_name' => 'ソウルディーラー',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_071.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            336 => 
            array (
                'id' => 337,
                'card_name' => '冥守の戦士・カムラ',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_073.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            337 => 
            array (
                'id' => 338,
                'card_name' => 'アザゼル',
                'cost' => '7',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_074.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            338 => 
            array (
                'id' => 339,
                'card_name' => '吸血鬼の古城',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_076.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            339 => 
            array (
                'id' => 340,
                'card_name' => 'ラプラトン星',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_077.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            340 => 
            array (
                'id' => 341,
                'card_name' => '吸血貴・ヴァイト',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_078.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            341 => 
            array (
                'id' => 342,
                'card_name' => 'トリックデュラハン',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_080.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            342 => 
            array (
                'id' => 343,
                'card_name' => '貴き血牙',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_081.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            343 => 
            array (
                'id' => 344,
                'card_name' => 'Yes My Dark',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_082.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'スペル',
            ),
            344 => 
            array (
                'id' => 345,
                'card_name' => 'ソウルミニデビル',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_083.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            345 => 
            array (
                'id' => 346,
                'card_name' => 'ジュエルデビル・モリアナ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_084.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            346 => 
            array (
                'id' => 347,
                'card_name' => '享楽の悪魔',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_085.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            347 => 
            array (
                'id' => 348,
                'card_name' => 'ボーンキマイラ',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_087.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            348 => 
            array (
                'id' => 349,
                'card_name' => 'ネクロカーニバル',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_088.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            349 => 
            array (
                'id' => 350,
                'card_name' => 'ヘヴンリーイージス',
                'cost' => '8',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_089.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー',
            ),
            350 => 
            array (
                'id' => 351,
                'card_name' => '封じられし熾天使',
                'cost' => '6',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_091.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'LG',
                'card_type' => 'アミュレット',
            ),
            351 => 
            array (
                'id' => 352,
                'card_name' => 'カグヤ',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_092.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー',
            ),
            352 => 
            array (
                'id' => 353,
                'card_name' => '神魔裁判所',
                'cost' => '5',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_094.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            353 => 
            array (
                'id' => 354,
                'card_name' => 'エイラの祈祷',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_095.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'アミュレット',
            ),
            354 => 
            array (
                'id' => 355,
                'card_name' => 'レディアンスエンジェル',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_096.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            355 => 
            array (
                'id' => 356,
                'card_name' => 'サファイアプリースト',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_098.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー',
            ),
            356 => 
            array (
                'id' => 357,
                'card_name' => '獣姫の呼び声',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_099.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'アミュレット',
            ),
            357 => 
            array (
                'id' => 358,
                'card_name' => 'フロッグクレリック',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_100.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー',
            ),
            358 => 
            array (
                'id' => 359,
                'card_name' => 'クリスタリアプリンセス・ティア',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_002.png',
                'card_class' => 'エルフ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            359 => 
            array (
                'id' => 360,
                'card_name' => 'グランドアーチャー・セルウィン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_007.png',
                'card_class' => 'エルフ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            360 => 
            array (
                'id' => 361,
                'card_name' => 'クリスタリア・リリィ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_009.png',
                'card_class' => 'エルフ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            361 => 
            array (
                'id' => 362,
                'card_name' => 'フォレストギガース',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_015.png',
                'card_class' => 'エルフ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            362 => 
            array (
                'id' => 363,
                'card_name' => 'レヴィオンセイバー・アルベール',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_019.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            363 => 
            array (
                'id' => 364,
                'card_name' => 'レオニダス',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_023.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            364 => 
            array (
                'id' => 365,
                'card_name' => 'レヴィオンヴァンガード・ジェノ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_026.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            365 => 
            array (
                'id' => 366,
                'card_name' => 'アドバンスブレーダー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_032.png',
                'card_class' => 'ロイヤル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            366 => 
            array (
                'id' => 367,
                'card_name' => '次元の魔女・ドロシー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_036.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            367 => 
            array (
                'id' => 368,
                'card_name' => 'プリンセスマナリア・アン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_039.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            368 => 
            array (
                'id' => 369,
                'card_name' => 'デュアルウィッチ・レミラミ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_043.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            369 => 
            array (
                'id' => 370,
                'card_name' => 'マナリアウィザード・クレイグ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_047.png',
                'card_class' => 'ウィッチ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            370 => 
            array (
                'id' => 371,
                'card_name' => 'インペリアルドラグーン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_053.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            371 => 
            array (
                'id' => 372,
                'card_name' => 'ネプチューン',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_056.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            372 => 
            array (
                'id' => 373,
                'card_name' => 'ジークフリート',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_060.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            373 => 
            array (
                'id' => 374,
                'card_name' => 'ドラゴンテイマー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_066.png',
                'card_class' => 'ドラゴン',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            374 => 
            array (
                'id' => 375,
                'card_name' => 'ソウルディーラー',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_072.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            375 => 
            array (
                'id' => 376,
                'card_name' => 'アザゼル',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_075.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            376 => 
            array (
                'id' => 377,
                'card_name' => '吸血貴・ヴァイト',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_079.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            377 => 
            array (
                'id' => 378,
                'card_name' => '享楽の悪魔',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_086.png',
                'card_class' => 'ナイトメア',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            378 => 
            array (
                'id' => 379,
                'card_name' => 'ヘヴンリーイージス',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_090.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            379 => 
            array (
                'id' => 380,
                'card_name' => 'カグヤ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_093.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            380 => 
            array (
                'id' => 381,
                'card_name' => 'レディアンスエンジェル',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_097.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            381 => 
            array (
                'id' => 382,
                'card_name' => 'ソウルコレクター',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_103.png',
                'card_class' => 'ビショップ',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            382 => 
            array (
                'id' => 383,
                'card_name' => 'バハムート',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_108.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'LG',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            383 => 
            array (
                'id' => 384,
                'card_name' => 'アークエンジェル・レイナ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_111.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'GR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            384 => 
            array (
                'id' => 385,
                'card_name' => 'ユニコーンの踊り手・ユニコ',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_114.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'SR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            385 => 
            array (
                'id' => 386,
                'card_name' => 'セクトール',
                'cost' => '-',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_119.png',
                'card_class' => 'ニュートラル',
                'card_rea' => 'BR',
                'card_type' => 'フォロワー・エボルヴ',
            ),
            386 => 
            array (
                'id' => 387,
                'card_name' => '薔薇の一撃',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t01.png',
                'card_class' => 'エルフ',
                'card_rea' => '-',
                'card_type' => 'スペル・トークン',
            ),
            387 => 
            array (
                'id' => 388,
                'card_name' => 'フェアリーウィスプ',
                'cost' => '0',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t02.png',
                'card_class' => 'エルフ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            388 => 
            array (
                'id' => 389,
                'card_name' => 'フェアリー',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t03.png',
                'card_class' => 'エルフ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            389 => 
            array (
                'id' => 390,
                'card_name' => '乙姫お守り隊',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t04.png',
                'card_class' => 'ロイヤル',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            390 => 
            array (
                'id' => 391,
                'card_name' => 'ナイト',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t05.png',
                'card_class' => 'ロイヤル',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            391 => 
            array (
                'id' => 392,
                'card_name' => 'ヴァイキング',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t06.png',
                'card_class' => 'ロイヤル',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            392 => 
            array (
                'id' => 393,
                'card_name' => 'スティールナイト',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t07.png',
                'card_class' => 'ロイヤル',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            393 => 
            array (
                'id' => 394,
                'card_name' => '攻撃型ゴーレム',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t08.png',
                'card_class' => 'ウィッチ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            394 => 
            array (
                'id' => 395,
                'card_name' => '防御型ゴーレム',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t09.png',
                'card_class' => 'ウィッチ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            395 => 
            array (
                'id' => 396,
                'card_name' => '大地の魔片',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t10.png',
                'card_class' => 'ウィッチ',
                'card_rea' => '-',
                'card_type' => 'アミュレット・トークン',
            ),
            396 => 
            array (
                'id' => 397,
                'card_name' => 'ドラゴン',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t11.png',
                'card_class' => 'ドラゴン',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            397 => 
            array (
                'id' => 398,
                'card_name' => 'ミミ',
                'cost' => '0',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t12.png',
                'card_class' => 'ナイトメア',
                'card_rea' => '-',
                'card_type' => 'スペル・トークン',
            ),
            398 => 
            array (
                'id' => 399,
                'card_name' => 'ココ',
                'cost' => '0',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t13.png',
                'card_class' => 'ナイトメア',
                'card_rea' => '-',
                'card_type' => 'スペル・トークン',
            ),
            399 => 
            array (
                'id' => 400,
                'card_name' => 'ゴースト',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t14.png',
                'card_class' => 'ナイトメア',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            400 => 
            array (
                'id' => 401,
                'card_name' => 'フォレストバット',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t15.png',
                'card_class' => 'ナイトメア',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            401 => 
            array (
                'id' => 402,
                'card_name' => 'ホーリーファルコン',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t16.png',
                'card_class' => 'ビショップ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            402 => 
            array (
                'id' => 403,
                'card_name' => 'ホーリータイガー',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP01/bp01_t17.png',
                'card_class' => 'ビショップ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            403 => 
            array (
                'id' => 404,
                'card_name' => 'クリスタリア・イヴ',
                'cost' => '4',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t01.png',
                'card_class' => 'エルフ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            404 => 
            array (
                'id' => 405,
                'card_name' => 'シールドガーディアン',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t02.png',
                'card_class' => 'ロイヤル',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            405 => 
            array (
                'id' => 406,
                'card_name' => 'レオニダスの遺志',
                'cost' => '8',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t03.png',
                'card_class' => 'ロイヤル',
                'card_rea' => '-',
                'card_type' => 'アミュレット・トークン',
            ),
            406 => 
            array (
                'id' => 407,
                'card_name' => 'マジカルポーン',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t04.png',
                'card_class' => 'ウィッチ',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            407 => 
            array (
                'id' => 408,
                'card_name' => 'オルカ',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t05.png',
                'card_class' => 'ドラゴン',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            408 => 
            array (
                'id' => 409,
                'card_name' => 'ヘルフレイムドラゴン',
                'cost' => '2',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t06.png',
                'card_class' => 'ドラゴン',
                'card_rea' => '-',
                'card_type' => 'フォロワー・トークン',
            ),
            409 => 
            array (
                'id' => 410,
                'card_name' => 'ドラゴウェポン',
                'cost' => '1',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t07.png',
                'card_class' => 'ドラゴン',
                'card_rea' => '-',
                'card_type' => 'アミュレット・トークン',
            ),
            410 => 
            array (
                'id' => 411,
                'card_name' => 'うたかたの月',
                'cost' => '3',
                'card_img_url' => 'https://shadowverse-evolve.com/wordpress/wp-content/images/cardlist/BP02/bp02_t08.png',
                'card_class' => 'ビショップ',
                'card_rea' => '-',
                'card_type' => 'アミュレット・トークン',
            ),
        ));
        
        
    }
}