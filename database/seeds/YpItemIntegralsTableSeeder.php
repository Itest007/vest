<?php

use Illuminate\Database\Seeder;

class YpItemIntegralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('yp_item_integrals')->delete();
        
        \DB::table('yp_item_integrals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '油条',
                'item_code' => 'b_1_1',
                'type' => 1,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '炸酱面',
                'item_code' => 'b_1_2',
                'type' => 1,
                'is_special' => 0,
                'integral' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '煎鸡蛋',
                'item_code' => 'b_1_3',
                'type' => 1,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '小米粥',
                'item_code' => 'b_1_4',
                'type' => 1,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '腌萝卜',
                'item_code' => 'b_1_5',
                'type' => 1,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '蒸南瓜',
                'item_code' => 'b_1_6',
                'type' => 1,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '吊烧鳗鱼',
                'item_code' => 'w_1_1',
                'type' => 2,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '油焖笋',
                'item_code' => 'w_1_2',
                'type' => 2,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '梅菜扣肉',
                'item_code' => 'w_1_3',
                'type' => 2,
                'is_special' => 0,
                'integral' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '茄子豆角',
                'item_code' => 'w_1_4',
                'type' => 2,
                'is_special' => 0,
                'integral' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '农家小炒肉',
                'item_code' => 'w_1_5',
                'type' => 2,
                'is_special' => 0,
                'integral' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '手撕包菜',
                'item_code' => 'w_1_6',
                'type' => 2,
                'is_special' => 0,
                'integral' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '红油花生米',
                'item_code' => 'w_1_7',
                'type' => 2,
                'is_special' => 0,
                'integral' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '苦瓜炖鸡汤',
                'item_code' => 'w_1_8',
                'type' => 2,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '白米饭',
                'item_code' => 'w_1_9',
                'type' => 2,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '口水鸡',
                'item_code' => 'd_1_1',
                'type' => 3,
                'is_special' => 0,
                'integral' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '香菇蒸鸡',
                'item_code' => 'd_1_2',
                'type' => 3,
                'is_special' => 0,
                'integral' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '四季豆炒肉',
                'item_code' => 'd_1_3',
                'type' => 3,
                'is_special' => 0,
                'integral' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '可乐鸡柳',
                'item_code' => 'd_1_4',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '西红柿炒蛋',
                'item_code' => 'd_1_5',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '莲藕粉丝汤',
                'item_code' => 'd_1_6',
                'type' => 3,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '白米饭',
                'item_code' => 'd_1_7',
                'type' => 3,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '虾饺',
                'item_code' => 's_1_1',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '香芋玉米露',
                'item_code' => 's_1_2',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '烩面',
                'item_code' => 's_1_3',
                'type' => 4,
                'is_special' => 0,
                'integral' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '红豆莲子汤',
                'item_code' => 's_1_4',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '酸菜肉丝包',
                'item_code' => 'b_2_1',
                'type' => 1,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '西红柿鸡蛋面',
                'item_code' => 'b_2_2',
                'type' => 1,
                'is_special' => 0,
                'integral' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '咸鸭蛋',
                'item_code' => 'b_2_3',
                'type' => 1,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '黑米粥',
                'item_code' => 'b_2_4',
                'type' => 1,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => '学生咸菜',
                'item_code' => 'b_2_5',
                'type' => 1,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => '蒸红薯',
                'item_code' => 'b_2_6',
                'type' => 1,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => '盐焗鸡',
                'item_code' => 'w_2_1',
                'type' => 2,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => '凉拌牛肉',
                'item_code' => 'w_2_2',
                'type' => 2,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '红烧鸡块',
                'item_code' => 'w_2_3',
                'type' => 2,
                'is_special' => 0,
                'integral' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => '肉沫茄子',
                'item_code' => 'w_2_4',
                'type' => 2,
                'is_special' => 0,
                'integral' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => '青椒肉丝',
                'item_code' => 'w_2_5',
                'type' => 2,
                'is_special' => 0,
                'integral' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => '清炒大白菜',
                'item_code' => 'w_2_6',
                'type' => 2,
                'is_special' => 0,
                'integral' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => '凉拌土豆丝',
                'item_code' => 'w_2_7',
                'type' => 2,
                'is_special' => 0,
                'integral' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '海带排骨汤',
                'item_code' => 'w_2_8',
                'type' => 2,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => '白米饭',
                'item_code' => 'w_2_9',
                'type' => 2,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => '拍黄瓜',
                'item_code' => 'd_2_1',
                'type' => 3,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => '剁椒石斑鱼',
                'item_code' => 'd_2_2',
                'type' => 3,
                'is_special' => 0,
                'integral' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => '腐竹炒肉丝',
                'item_code' => 'd_2_3',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => '蒜蓉芥菜',
                'item_code' => 'd_2_4',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => '清炒西蓝花',
                'item_code' => 'd_2_5',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => '玉米排骨汤',
                'item_code' => 'd_2_6',
                'type' => 3,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => '白米饭',
                'item_code' => 'd_2_7',
                'type' => 3,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => '蛋挞',
                'item_code' => 's_2_1',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => '牛肉灌汤包',
                'item_code' => 's_2_2',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => '酸汤面',
                'item_code' => 's_2_3',
                'type' => 4,
                'is_special' => 0,
                'integral' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => '蒸玉米',
                'item_code' => 's_2_4',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => '香煎葱油饼',
                'item_code' => 'b_3_1',
                'type' => 1,
                'is_special' => 0,
                'integral' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => '上汤乌冬面',
                'item_code' => 'b_3_2',
                'type' => 1,
                'is_special' => 0,
                'integral' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => '茶叶蛋',
                'item_code' => 'b_3_3',
                'type' => 1,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => '白粥',
                'item_code' => 'b_3_4',
                'type' => 1,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => '凉拌黄瓜',
                'item_code' => 'b_3_5',
                'type' => 1,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => '蒸芋头',
                'item_code' => 'b_3_6',
                'type' => 1,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => '凉拌海蜇',
                'item_code' => 'w_3_1',
                'type' => 2,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => '广式烧鸭',
                'item_code' => 'w_3_2',
                'type' => 2,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => '红烧肉',
                'item_code' => 'w_3_3',
                'type' => 2,
                'is_special' => 0,
                'integral' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => '骨肉相连',
                'item_code' => 'w_3_4',
                'type' => 2,
                'is_special' => 0,
                'integral' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => '糖醋茄子',
                'item_code' => 'w_3_5',
                'type' => 2,
                'is_special' => 0,
                'integral' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => '油淋菠菜',
                'item_code' => 'w_3_6',
                'type' => 2,
                'is_special' => 0,
                'integral' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => '凉拌鸡胗',
                'item_code' => 'w_3_7',
                'type' => 2,
                'is_special' => 0,
                'integral' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => '花生猪脚汤',
                'item_code' => 'w_3_8',
                'type' => 2,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => '白米饭',
                'item_code' => 'w_3_9',
                'type' => 2,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => '红烧猪耳',
                'item_code' => 'd_3_1',
                'type' => 3,
                'is_special' => 0,
                'integral' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => '回锅肉',
                'item_code' => 'd_3_2',
                'type' => 3,
                'is_special' => 0,
                'integral' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => '干煸花菜',
                'item_code' => 'd_3_3',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => '干锅土豆片',
                'item_code' => 'd_3_4',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => '白芍山药',
                'item_code' => 'd_3_5',
                'type' => 3,
                'is_special' => 0,
                'integral' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => '冬瓜排骨汤',
                'item_code' => 'd_3_6',
                'type' => 3,
                'is_special' => 0,
                'integral' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => '白米饭',
                'item_code' => 'd_3_7',
                'type' => 3,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => '葱油饼',
                'item_code' => 's_3_1',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => '干炒牛河',
                'item_code' => 's_3_2',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => '海鲜粥',
                'item_code' => 's_3_3',
                'type' => 4,
                'is_special' => 0,
                'integral' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => '豆浆',
                'item_code' => 's_3_4',
                'type' => 4,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => '香蕉',
                'item_code' => 'l_1',
                'type' => 5,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => '起司面包',
                'item_code' => 'l_2',
                'type' => 5,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => '乐事薯片',
                'item_code' => 'l_3',
                'type' => 5,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => '苹果',
                'item_code' => 'l_4',
                'type' => 5,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => '可乐',
                'item_code' => 'y_1',
                'type' => 6,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => '雪碧',
                'item_code' => 'y_2',
                'type' => 6,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => '王老吉',
                'item_code' => 'y_3',
                'type' => 6,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => '冰红茶',
                'item_code' => 'y_4',
                'type' => 6,
                'is_special' => 0,
                'integral' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}