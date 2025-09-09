<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::insert([
            [
                'title' => 'สรุปผลงานลูกยางสาวไทย หลังจบชิงแชมป์โลก 2025 อันดับโลกพุ่ง รั้งเบอร์ 3 เอเชีย',
                'content' => 'ทีมวอลเลย์บอลหญิงไทยทำผลงานโดดเด่นในศึกชิงแชมป์โลก 2025 พร้อมขยับอันดับโลกขึ้นไปอยู่ที่ 3 ของเอเชีย...',
                'source_url' => 'https://thethaiger.com/th/news/1450283'
            ],
            [
                'title' => 'ONE Fight Night 35: Buntan vs. Hemetsberger ที่ลุมพินี 6 กันยายน 2568',
                'content' => 'ศึก ONE มวยไทยหญิงชิงแชมป์โลกระหว่างแจ๊คกี้ บุนตัน และ เฮเมตส์เบอร์เกอร์...',
                'source_url' => 'https://en.wikipedia.org/wiki/ONE_Fight_Night_35'
            ],
            [
                'title' => 'ONE Fight Night 36: Prajanchai vs. Di Bella 2 ที่ลุมพินี 4 ตุลาคม 2568',
                'content' => 'ไฟต์รีแมตช์อันดุเดือด ระหว่างพระจันทร์ฉายกับ ดิ เบลล่า...',
                'source_url' => 'https://en.wikipedia.org/wiki/ONE_Fight_Night_36'
            ],
            [
                'title' => 'King\'s Cup 2025 ฟุตบอลชิงถ้วยพระราชทานคิงส์คัพ 4–7 กันยายน 2568',
                'content' => 'การแข่งขันฟุตบอลชิงถ้วยพระราชทานคิงส์คัพ ครั้งที่ 51 จัดที่กาญจนบุรี...',
                'source_url' => 'https://en.wikipedia.org/wiki/2025_King%27s_Cup'
            ],
            [
                'title' => 'สรุปผลบอลเมื่อคืน 5 ลีกใหญ่ยุโรป ประจำวันที่ 1 ก.ย. 68',
                'content' => 'รวมผลพรีเมียร์ลีก ลาลีกา บุนเดสลีกา เซเรีย อา และลีกเอิง...',
                'source_url' => 'https://www.sanook.com/sport/archive/'
            ],
            [
                'title' => 'ตารางคะแนนพรีเมียร์ลีกอังกฤษ ฤดูกาล 2025-26 ประจำวันที่ 1 ก.ย. 68',
                'content' => 'ตารางคะแนนพรีเมียร์ลีกล่าสุดหลังผ่านเกมสัปดาห์...',
                'source_url' => 'https://www.sanook.com/sport/archive/'
            ],
            [
                'title' => 'โปรแกรมถ่ายทอดสด วอลเลย์บอลหญิง ชิงแชมป์โลก 2025 ประจำวันที่ 1 ก.ย. 68',
                'content' => 'ช่องทางและเวลาถ่ายทอดสดทีมลูกยางสาวไทย...',
                'source_url' => 'https://www.sanook.com/sport/archive/'
            ],
            [
                'title' => 'วิว กุลวุฒิ พ่าย ฉี ยู่ฉี ชวดแชมป์โลก',
                'content' => 'นักแบดมินตันไทยพลาดโอกาสคว้าแชมป์โลก หลังพ่ายให้กับมือวางจากจีน...',
                'source_url' => 'https://www.sanook.com/sport/archive/'
            ],
            [
                'title' => 'Thailand Super Series 2025 เริ่ม 23 พ.ค. – 2 พ.ย. 2568',
                'content' => 'การแข่งขันรถยนต์ทางเรียบรายการใหญ่ที่สุดในไทย...',
                'source_url' => 'https://en.wikipedia.org/wiki/2025_Thailand_Super_Series'
            ],
            [
                'title' => 'ไทยคว้า 4 ทอง 4 เงิน 7 ทองแดงใน The World Games 2025 ที่เฉิงตู',
                'content' => 'ทัพนักกีฬาไทยสร้างชื่อเสียงกวาดเหรียญรวม 15 เหรียญ...',
                'source_url' => 'https://en.wikipedia.org/wiki/Thailand_at_the_2025_World_Games'
            ],
        ]);
    }
}
