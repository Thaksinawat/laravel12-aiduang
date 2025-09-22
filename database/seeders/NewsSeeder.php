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
                'source_url' => 'https://thethaiger.com/th/news/1450293/',
                'image' =>'https://thethaiger.com/th/wp-content/uploads/2025/09/Summary-of-the-performance-of-the-Thai-womens-volleyball-team-after-the-2025-World-Championship.-World-rankings-rise-to-No.-3-in-Asia.jpg',
            ],
            [
                'title' => 'ONE Fight Night 35: Buntan vs. Hemetsberger ที่ลุมพินี 6 กันยายน 2568',
                'content' => 'ศึก ONE มวยไทยหญิงชิงแชมป์โลกระหว่างแจ๊คกี้ บุนตัน และ เฮเมตส์เบอร์เกอร์...',
                'source_url' => 'https://www.onefc.com/th/news/one-fight-night-35-buntan-vs-hemetsberger-results-and-highlights-for-every-match/',
                'image' =>'https://cdn.onefc.com/wp-content/uploads/sites/5/2025/09/JackieBuntan-StellaHemetsberger-Split-1200X800.jpg',
            ],
            [
                'title' => 'ONE Fight Night 36: Prajanchai vs. Di Bella 2 ที่ลุมพินี 4 ตุลาคม 2568',
                'content' => 'ไฟต์รีแมตช์อันดุเดือด ระหว่างพระจันทร์ฉายกับ ดิ เบลล่า...',
                'source_url' => 'https://www.onefc.com/th/news/prajanchai-vs-jonathan-di-bella-for-strawweight-kickboxing-world-title-unification-at-one-fight-night-36/',
                'image' =>'https://cdn.onefc.com/wp-content/uploads/sites/5/2024/06/OL68-Prajanchai-vs-Jonathan-Di-Bella-22-1536x1024.jpg',
            ],
            [
                'title' => 'King\'s Cup 2025 ฟุตบอลชิงถ้วยพระราชทานคิงส์คัพ 4–7 กันยายน 2568',
                'content' => 'การแข่งขันฟุตบอลชิงถ้วยพระราชทานคิงส์คัพ ครั้งที่ 51 จัดที่กาญจนบุรี...',
                'source_url' => 'https://www.thairath.co.th/sport/thaifootball/changsuek/2880891',
                'image' =>'https://static.thairath.co.th/media/dFQROr7oWzulq5Fa6ri4ABhefXrDdN8ws1ty1YDiA4GsFLtKWbZKS5UsPCc6EGYs2Fn.jpg',
            ],
            [
                'title' => 'สรุปผลบอลเมื่อคืน 5 ลีกใหญ่ยุโรป ประจำวันที่ 1 ก.ย. 68',
                'content' => 'รวมผลพรีเมียร์ลีก ลาลีกา บุนเดสลีกา เซเรีย อา และลีกเอิง...',
                'source_url' => 'https://www.sanook.com/sport/1615111/',
                'image' =>'https://s.isanook.com/sp/0/ud/323/1615111/zobov.jpg?ip/crop/w1200h700/q80/webp',
            ],
            [
                'title' => 'ตารางคะแนนพรีเมียร์ลีกอังกฤษ ฤดูกาล 2025-26 ประจำวันที่ 1 ก.ย. 68',
                'content' => 'ตารางคะแนนพรีเมียร์ลีกล่าสุดหลังผ่านเกมสัปดาห์...',
                'source_url' => 'https://www.sanook.com/sport/1615769/',
                'image' =>'https://s.isanook.com/sp/0/ud/323/1615769/gunnne.jpg?ip/crop/w1200h700/q80/webp',
            ],
            [
                'title' => 'โปรแกรมถ่ายทอดสด วอลเลย์บอลหญิง ชิงแชมป์โลก 2025 ประจำวันที่ 1 ก.ย. 68',
                'content' => 'ช่องทางและเวลาถ่ายทอดสดทีมลูกยางสาวไทย...',
                'source_url' => 'https://www.sanook.com/sport/1615118/',
                'image' =>'https://s.isanook.com/sp/0/ud/323/1615118/vbnncut.jpg?ip/crop/w1200h700/q80/webp',
            ],
            [
                'title' => 'วิว กุลวุฒิ พ่าย ฉี ยู่ฉี ชวดแชมป์โลก',
                'content' => 'นักแบดมินตันไทยพลาดโอกาสคว้าแชมป์โลก หลังพ่ายให้กับมือวางจากจีน...',
                'source_url' => 'https://www.sanook.com/sport/1615109/',
                'image' =>'https://s.isanook.com/sp/0/ud/323/1615109/cccvv.jpg?ip/crop/w1200h700/q80/webp',
            ],
            [
                'title' => 'Thailand Super Series 2025 เริ่ม 23 พ.ค.- 2 พ.ย. 2568',
                'content' => 'การแข่งขันรถยนต์ทางเรียบรายการใหญ่ที่สุดในไทย...',
                'source_url' => 'https://www.thailandfestival.org/events/60c8178b-7a69-41f3-8b1e-f21f9494371b',
                'image' =>'https://storage.googleapis.com/download/storage/v1/b/thaifest-prod-thumbnail/o/media%2Fc6609167-28e6-44d9-b778-a965be024b0e.jpg?generation=1744875462386225&alt=media',
            ],
            [
                'title' => 'โกลเด้น บอล ชู ยามาล คว้ารางวัล! เด็มเบเล่ ไม่ติดท็อปไฟว์',
                'content' => 'ทัพนักกีฬาไทยสร้างชื่อเสียงกวาดเหรียญรวม 15 เหรียญ...',
                'source_url' => 'https://www.siamsport.co.th/football-international/laliga/90718/?tbref=hp',
                'image' =>'https://www.siamsport.co.th/static/90718/856x452.webp',
            ],
        ]);
    }
}
