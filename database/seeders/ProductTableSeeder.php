<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(request $request)
    {
        
        DB::table('product')->insert([
            'name' => 'سكيمي1',
            'description' => 'ساعة رياضية رجال رقمي سيليكون - 1251',
            'price' => 295,
            'image' => 'https://m.media-amazon.com/images/I/51hjpocFS1L._AC_UL480_FMwebp_QL65_.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('product')->insert([
            'name' => 'سكيمي2',
            'description' => 'ساعة سكيمي 1025 اسود مضادة للماء للرجال رقمية',
            'price' => 283,
            'image' => 'https://m.media-amazon.com/images/I/61dkY3K65jL._AC_UL480_FMwebp_QL65_.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('product')->insert([
            'name' => 'سكيمي3',
            'description' => 'ساعة كاجوال رقمي للرجال ضد الماء باضاءة لعرض الوقت والتاريخ و اليوم',
            'price' => 95,
            'image' => 'https://m.media-amazon.com/images/I/81tCsYmeGbS._AC_UL480_FMwebp_QL65_.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('product')->insert([
            'name' => 'سكيمي4',
            'description' => 'ساعة يد رياضيه رقمي ضد الماء ارقام كبيره منبه وساعة ايقاف اضائه خلفيه مع سوار مطاطي لون اسود موديل 1258 للرجال و للنساء',
            'price' => 249,
            'image' => 'https://m.media-amazon.com/images/I/4151ztbhv6L._AC_UL480_FMwebp_QL65_.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('product')->insert([
            'name' => 'سكيمي5',
            'description' => 'ساعة كاسيو W-216H-2B للرجال - رقمية، ساعة كاجوال',
            'price' => 503,
            'image' => 'https://m.media-amazon.com/images/I/61McCvpqSJL._AC_UL480_FMwebp_QL65_.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('product')->insert([
            'name' => 'سكيمي6',
            'description' => 'ساعة رقمية بسوار ستانلس ستيل للنساء من كاسيو Youth Vintage - ذهبي',
            'price' => 819,
            'image' => 'https://m.media-amazon.com/images/I/61Zkw4V1I5L._AC_UL480_FMwebp_QL65_.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }
}
