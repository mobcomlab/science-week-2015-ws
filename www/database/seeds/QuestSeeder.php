<?php

use Illuminate\Database\Seeder;

class QuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quest')->delete();
        DB::table('quest')->insert([



            //          Scanner QR type=>2
            //            Beacon type =>3
            //Question type=>1

            [
                'id' => '1',
                'type' => '3',
                'text'=>'ค้นหาตำแหน่งป้าย MISC',
                'answer'=>'f7826da6-4fa2-4e98-8024-bc5b71e0893e,50138,38135,eVoA,1.0',
                'other'=>'1. เมื่อเข้ามาในงานสัปดาห์วิทย์ฯที่ตึกคณิตศาสตร์เเล้ว,2. ให้คุณหาป้าย MISC ที่มีรูปมินเนียนติดอยู่ได้ชัดเจนที่สุด,3. เมื่อคุณเริ่มเข้าใกล้จุดที่เหมาะสมระยะทางจะน้อยลง,4. เมื่อระยะทางน้อยลง จุดสีแดงจะเปลี่ยนเป็นสีเขียว,5. ทำให้จุดสีแดงเปลี่ยนเป็นสีเขียวทั้ง3จุด เพื่อผ่านเควสนี้',
                'title'=>'ค้นหาป้าย',
                'icon'=>'beacon',
                'color'=>'#42A5F5',
                'status'=>'0',
            ],
            [
                'id' => '2',
                'type' => '1',
                'text'=>'เกมในห้อง SC2-112 "เกมสามเหลี่ยมในเพชร" คำตอบมีสามเหลี่ยมกี่รูป...:เกมในห้อง SC2-112 "เกมการขึ้นรูปกล่อง" คำตอบเป็นกล่องรูปใดได้บ้าง...:เกมในห้อง SC2-112 "เกมวัดน้ำหนัก" จะต้องใช้หมวกกี่ใบเพื่อให้สมดุล...',
                'answer'=>'มีสามเหลี่ยม 35 รูป:รูป A  B  C  D:22ใบ',
                'other'=>'มีสามเหลี่ยม 10 รูป,มีสามเหลี่ยม 29 รูป,มีสามเหลี่ยม 14 รูป:รูป B  E  D  C,รูป A  D  E C,รูป B  D  C  E:64 ใบ, 54 ใบ ,16ใบ',
                'title'=>'คณิตคิดสนุก ชั้น1',
                'icon'=>'math',
                'color'=>'#FFEB3B',
                'status'=>'0',

            ],
            [
                'id' => '3',
                'type' => '2',
                'text'=>'เกมต่อจิกซอ / เกมจับฉลากต่อคำ ',
                'answer'=>'http://mobcomlab.com/get/sciweek?qr=1',
                'other'=>'1. เล่นเกมนี้ที่ห้อง SC2-214,2. เล่นเกมตามเควสที่กำหนดให้ผ่านทั้ง 2 เกมส์,3. เมื่อเล่นผ่านเเล้วสามารถไปสแกนQR-code เเทนการปั๊มแสตมป์ได้',
                'title'=>'คณิตคิดสนุก ชั้น2',
                'icon'=>'math',
                'color'=>'#26A69A',
                'status'=>'0',
            ],

            [
                'id' => '4',
                'type' => '1',
                'text'=>'พระบิดาแห่งวิทยาศาสตร์ไทยคือรัชกาลใด:ตราสัญลักษณ์คณะวิทยาศาสตร์ มหาลัยนเรศวร ประกอบไปด้วยอะไรบ้าง:งานสัปดาห์วิทยาศาสตร์ที่ คณะวิทยาศาสตร์ มหาวิทยาลัยนเรศวรจัดขึ้นเป็นครั้งที่เท่าไหร่',
                'answer'=>'รัชกาลที่ 2:รูปช้าง กับ อะตอม:ครั้งที่ 26',
                'other'=>'รัชกาลที่ 3,รัชกาลที่ 6,รัชกาลที่9:รูปช้าง กับ สายรุ้ง,รูปช้าง กับ พระจันทร์ครึ่งเสี้ยว,รูปช้าง กับ สายฟ้า:ครั้งที่ 25,ครั้งที่ 24, ครั้งที่ 27',
                'title'=>'คำถาม',
                'icon'=>'quest',
                'color'=>'#FFEB3B',
                'status'=>'0',
            ],
            [
                'id' => '5',
                'type' => '2',
                'text'=>'หา QR-code ของแอพฯที่ตึกเคมี',
                'answer'=>'http://mobcomlab.com/get/sciweek?qr=2',
                'other'=>'1. ให้คุณหา QR-code ที่อยู่ในป้ายของแอพพลิเคชั่นนี้ ที่ตึกเคมีของคณะวิทยาศาสตร์,2. สแกน QR-code เพื่อผ่านเควสนี้ ,3. คุณสามารถสแกน QR-code ใดก็ได้ที่เป็นของแอพลิเคชั่นนี้ที่ตึกเคมี ',
                'title'=>'เช็คอินที่ตึกเคมี',
                'icon'=>'qr',
                'color'=>'#26A69A',
                'status'=>'0',
            ],
            [

                'id' => '6',
                'type' => '3',
                'text'=>'หาจุดที่ปล่อยสัญญาณในห้อง SC2-215',
                'answer'=>'f7826da6-4fa2-4e98-8024-bc5b71e0893e,9632,40131,L3ln,0.5',
                'other'=>'1. เข้ามาที่ห้อง SC2-215 ตึกคณิตศาสตร์ของคณะวิทยาศาสตร์ ,2. หาจุดที่ปล่อยสัญญาณในห้อง SC2-215,3.เมื่อระยะทางลดลงหมายความว่า คุณได้เข้าใกล้มากขึ้น และวงกลมสีแดงจะเปลี่ยนเป็นสีเขียว,4. ทำให้วงกลมสีแดงเปลี่ยนสีเขียวทั้ง3วง เพื่อที่จะผ่านเควสนี้',
                'title'=>'Mobile Computing Lab',
                'icon'=>'mobcom',
                'color'=>'#42A5F5',
                'status'=>'0',
            ],
            [
                'id' => '7',
                'type' => '1',
                'text'=>'แอพพลิเคชั่นที่ห้อง Mobile Computing Lab นำมาจัดแสดงเป็นการแนะนำการท่องเที่ยวในจังหวัดใด:Mobile Computing Lab เป็นกลุ่มวิจัยที่อยู่ในการดูแลของภาควิชาใดในคณะวิทยาศาสตร์ มหาวิทยาลัยนเรศวร:แอพพลิเคชั่น Sukhothai Adventure สามารถใช้ได้ระบบปฏิบัติการใด',
                'answer'=>'สุโขทัย:ภาควิชาวิทยาการคอมพิวเตอร์ และเทคโนโลยีสารสนเทศ:Android และ iOS',
                'other'=>'พิษณุโลก,กำแพงเพชร,เชียงใหม่:ภาควิชาคณิตศาสตร์,ภาควิชาเคมี,ภาควิชาฟิสิกส์:Android,iOs,Windows',
                'title'=>'คำถาม',
                'icon'=>'mobcom',
                'color'=>'#FFEB3B',
                'status'=>'0',
            ],
            [
                'id' => '8',
                'type' => '2',
                'text'=>'Garden of statistics',
                'answer'=>'http://mobcomlab.com/get/sciweek?qr=3',
                'other'=>'1. เล่นเกมนี้ที่ห้อง SC2-208 ตึกคณิตศาสตร์คณะวิทยาศาสตร์ ,2. เกมนี้จะเป็นเกมเกี่ยวกับการแยกขยะ และการคำนวณตัวเลข180IQ,3. เล่นเกมให้ผ่านตามเควสเพื่อสแกน QR-code เเทนการปั๊มแสตมป์',
                'title'=>'สถิติพาเพลิน',
                'icon'=>'math',
                'color'=>'#26A69A',
                'status'=>'0',
            ],
            [
                'id' => '9',
                'type' => '2',
                'text'=>'หา QR-code ของแอพฯที่ตึกฟิสิกส์',
                'answer'=>'http://mobcomlab.com/get/sciweek?qr=4',
                'other'=>'1. ให้คุณหา QR-code ที่อยู่ในป้ายของแอพพลิเคชั่นนี้ ที่ตึกฟิสิกส์ของคณะวิทยาศาสตร์,2. สแกน QR-code เพื่อผ่านเควสนี้ ,3. คุณสามารถสแกน QR-code ใดก็ได้ที่เป็นของแอพลิเคชั่นนี้ที่ตึกฟิสิกส์',
                'title'=>'เช็คอินที่ตึกฟิสิกส์',
                'icon'=>'qr',
                'color'=>'#26A69A',
                'status'=>'0',
            ],
            [
                'id' => '10',
                'type' => '3',
                'text'=>'หาผลงานที่มีเทคโนโลยีมาเกี่ยวข้อง',
                'answer'=>'f7826da6-4fa2-4e98-8024-bc5b71e0893e,42641,2445,ywYG,0.5',
                'other'=>'1. เล่นเกมที่ห้อง SC2-109 ตึกคณิตศาสตร์คณะวิทยาศาสตร์,2. หาผลที่คณิตศาสตร์ที่มีเทคโนโลยีมาเกี่ยวข้อง,3. เมื่อคุณยิ่งเข้าใกล้จุดปล่อยสัญญาณระยะทางจะลดลง และวงกลมสีแดงจะเปลี่ยนเป็นสีเขียว,4. ทำให้วงกลมสีแดงเปลี่ยนเป็นสีเขียวทั้ง3วง เพื่อผ่านเควสนี้',
                'title'=>'นิทรรศการภาคคณิตฯ',
                'icon'=>'math',
                'color'=>'#42A5F5',
                'status'=>'0',
            ],
            [
                'id' => '11',
                'type' => '2',
                'text'=>'หา QR-code ของแอพฯที่ตึกชีววิทยา',
                'answer'=>'http://mobcomlab.com/get/sciweek?qr=5',
                'other'=>'1. ให้คุณหา QR-code ที่อยู่ในป้ายของแอพพลิเคชั่นนี้ ที่ตึกชีววิทยาของคณะวิทยาศาสตร์,2. สแกน QR-code เพื่อผ่านเควสนี้ ,3. คุณสามารถสแกน QR-code ใดก็ได้ที่เป็นของแอพลิเคชั่นนี้ทชีววิทยา',
                'title'=>'เช็คอินที่ตึกชีววิทยา',
                'icon'=>'qr',
                'color'=>'#26A69A',
                'status'=>'0',
            ],
            [
                'id' => '12',
                'type' => '3',
                'text'=>'หาทางออกจากเขาวงกต',
                'answer'=>'f7826da6-4fa2-4e98-8024-bc5b71e0893e,23629,52813,1Rfd,1.0',
                'other'=>'1. เล่นเกมที่ห้อง SC2-207 ตึกคณิตศาสตร์คณะวิทยาศาสตร์,2. หาทางออกของเขาวงกตให้เจอ เพราะจุดปล่อยสัญญาณอยู่ที่ทางออก,3. เมื่อคุณยิ่งเข้าใกล้จุดปล่อยสัญญาณระยะทางจะลดลง และวงกลมสีแดงจะเปลี่ยนเป็นสีเขียว,4. ทำให้วงกลมสีแดงเปลี่ยนเป็นสีเขียวทั้ง3วง เพื่อผ่านเควสนี้',
                'title'=>'เขาวงกต',
                'icon'=>'maze',
                'color'=>'#42A5F5',
                'status'=>'0',
            ],

        ]);
    }
}

/*          [
                'id' => '',
                'type' => '',
                'text'=>'',
                'answer'=>'',
                'other'=>'',
                'title'=>'',
                'icon'=>'xxxxxx',
                'color'=>'xxxxxxxx',
                'status'=>'0',
            ],
*/