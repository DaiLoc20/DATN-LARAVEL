<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Hình ảnh của User và Admin
        Image::create(['UserID'=>1,'path'=>'/storage/img/Admin/AD-01.jpg']);
        Image::create(['UserID'=>2,'path'=>'/storage/img/Admin/AD-02.jpg']);
        Image::create(['UserID'=>3,'path'=>'/storage/img/Admin/AD-03.jpg']);
        Image::create(['UserID'=>4,'path'=>'/storage/img/Admin/AD-04.jpg']);
        Image::create(['UserID'=>5,'path'=>'/storage/img/Admin/AD-05.jpg']);
        Image::create(['UserID'=>6,'path'=>'/storage/img/Admin/AD-06.jpg']);
        Image::create(['UserID'=>7,'path'=>'/storage/img/Admin/AD-07.jpg']);
        Image::create(['UserID'=>8,'path'=>'/storage/img/User/US-01.jpg']);
        Image::create(['UserID'=>9,'path'=>'/storage/img/User/US-02.jpg']);
        //Hình ảnh của User và Admin

        //Hình ảnh của Loại Sản Phẩm
        Image::create(['CategoryID'=>1,'path'=>'/storage/img/Category/CATEGORY-PC.jpg']);
        Image::create(['CategoryID'=>2,'path'=>'/storage/img/Category/CATEGORY-LAPTOP.jpg']);
        Image::create(['CategoryID'=>3,'path'=>'/storage/img/Category/CATEGORY-MHMT.jpg']);
        Image::create(['CategoryID'=>4,'path'=>'/storage/img/Category/CATEGORY-HDD.jpg']);
        Image::create(['CategoryID'=>8,'path'=>'/storage/img/Category/CATEGORY-LK.jpg']);
        Image::create(['CategoryID'=>16,'path'=>'/storage/img/Category/CATEGORY-PK.jpg']);
        //Hình ảnh của Loại Sản Phẩm

        //Hình ảnh của Hãng
        Image::create(['BrandID'=>1,'path'=>'/storage/img/Brand/BRAND-ASUS.jpg']);
        Image::create(['BrandID'=>2,'path'=>'/storage/img/Brand/BRAND-ACER.jpg']);
        Image::create(['BrandID'=>3,'path'=>'/storage/img/Brand/BRAND-DELL.jpg']);
        Image::create(['BrandID'=>4,'path'=>'/storage/img/Brand/BRAND-HP.jpg']);
        Image::create(['BrandID'=>5,'path'=>'/storage/img/Brand/BRAND-MSI.jpg']);
        Image::create(['BrandID'=>6,'path'=>'/storage/img/Brand/BRAND-LENOVO.jpg']);
        Image::create(['BrandID'=>7,'path'=>'/storage/img/Brand/BRAND-GIGABYTE.jpg']);
        Image::create(['BrandID'=>8,'path'=>'/storage/img/Brand/BRAND-SAMSUNG.jpg']);
        Image::create(['BrandID'=>9,'path'=>'/storage/img/Brand/BRAND-AOC.jpg']);
        Image::create(['BrandID'=>10,'path'=>'/storage/img/Brand/BRAND-VSP.jpg']);
        //Hình ảnh của Hãng

        //Hình ảnh của Sản Phẩm
        $imgProductPC01 =[
            '/storage/img/Product/PC/PC_4K_GAMING_i5_RTX_4070_02.jpg',
            '/storage/img/Product/PC/PC_4K_GAMING_i5_RTX_4070_01.jpg',
            '/storage/img/Product/PC/PC_4K_GAMING_i5_RTX_4070_03.jpg',
            '/storage/img/Product/PC/PC_4K_GAMING_i5_RTX_4070_04.jpg',
            '/storage/img/Product/PC/PC_4K_GAMING_i5_RTX_4070_05.jpg'
        ];
        foreach ($imgProductPC01 as $path) {
            Image::create([
                'ProductID' => 1,
                'path' => $path
            ]);
        }

        $imgProductPC02 =[
            '/storage/img/Product/PC/PC_AMD_SUPER_GAMING_Ryzen_7_RTX_4060_02.jpg',
            '/storage/img/Product/PC/PC_AMD_SUPER_GAMING_Ryzen_7_RTX_4060_01.jpg',
            '/storage/img/Product/PC/PC_AMD_SUPER_GAMING_Ryzen_7_RTX_4060_03.jpg',
            '/storage/img/Product/PC/PC_AMD_SUPER_GAMING_Ryzen_7_RTX_4060_04.jpg',
            '/storage/img/Product/PC/PC_AMD_SUPER_GAMING_Ryzen_7_RTX_4060_05.jpg',
        ];
        foreach ($imgProductPC02 as $path) {
            Image::create([
                'ProductID' => 2,
                'path' => $path
            ]);
        }

        $imgProductPC03 =[
            '/storage/img/Product/PC/STAR_CHICKEN_PLUS_White_i3_01.jpg',
            '/storage/img/Product/PC/STAR_CHICKEN_PLUS_White_i3_02.jpg',
            '/storage/img/Product/PC/STAR_CHICKEN_PLUS_White_i3_03.jpg',
            '/storage/img/Product/PC/STAR_CHICKEN_PLUS_White_i3_04.jpg',
        ];
        foreach ($imgProductPC03 as $path) {
            Image::create([
                'ProductID' =>3,
                'path' => $path
            ]);
        }

        $imgProductPC04 =[
            '/storage/img/Product/PC/PC_Gaming_STAR_CHICKEN_SUPER_LUCE_i3_01.jpg',
            '/storage/img/Product/PC/PC_Gaming_STAR_CHICKEN_SUPER_LUCE_i3_02.jpg',
            '/storage/img/Product/PC/PC_Gaming_STAR_CHICKEN_SUPER_LUCE_i3_03.jpg',
            '/storage/img/Product/PC/PC_Gaming_STAR_CHICKEN_SUPER_LUCE_i3_04.jpg',
            '/storage/img/Product/PC/PC_Gaming_STAR_CHICKEN_SUPER_LUCE_i3_05.jpg',
        ];
        foreach ($imgProductPC04 as $path) {
            Image::create([
                'ProductID' => 4,
                'path' => $path
            ]);
        }

        $imgProductPC05 =[
            '/storage/img/Product/PC/PC_ASUS_GAMING_PERFORMANCE_i5_01.jpg',
            '/storage/img/Product/PC/PC_ASUS_GAMING_PERFORMANCE_i5_02.jpg',
            '/storage/img/Product/PC/PC_ASUS_GAMING_PERFORMANCE_i5_03.jpg',
            '/storage/img/Product/PC/PC_ASUS_GAMING_PERFORMANCE_i5_04.jpg',
            '/storage/img/Product/PC/PC_ASUS_GAMING_PERFORMANCE_i5_05.jpg',
        ];
        foreach ($imgProductPC05 as $path) {
            Image::create([
                'ProductID' => 5,
                'path' => $path
            ]);
        }

        $imgProductPC06 =[
            '/storage/img/Product/PC/PC_ULTIMATE_GAMING_4K_i5_RTX_4060_Ti_05.jpg',
            '/storage/img/Product/PC/PC_ULTIMATE_GAMING_4K_i5_RTX_4060_Ti_01.jpg',
            '/storage/img/Product/PC/PC_ULTIMATE_GAMING_4K_i5_RTX_4060_Ti_02.jpg',
            '/storage/img/Product/PC/PC_ULTIMATE_GAMING_4K_i5_RTX_4060_Ti_03.jpg',
            '/storage/img/Product/PC/PC_ULTIMATE_GAMING_4K_i5_RTX_4060_Ti_04.jpg',
        ];
        foreach ($imgProductPC06 as $path) {
            Image::create([
                'ProductID' => 6,
                'path' => $path
            ]);
        }

        $imgProductPC07 =[
            '/storage/img/Product/PC/PC_CHƠI_GAME_HIỆU_SUẤT_CAO_i5_12400F_RTX_3060_05.jpg',
            '/storage/img/Product/PC/PC_CHƠI_GAME_HIỆU_SUẤT_CAO_i5_12400F_RTX_3060_01.jpg',
            '/storage/img/Product/PC/PC_CHƠI_GAME_HIỆU_SUẤT_CAO_i5_12400F_RTX_3060_02.jpg',
            '/storage/img/Product/PC/PC_CHƠI_GAME_HIỆU_SUẤT_CAO_i5_12400F_RTX_3060_03.jpg',
            '/storage/img/Product/PC/PC_CHƠI_GAME_HIỆU_SUẤT_CAO_i5_12400F_RTX_3060_04.jpg',
        ];
        foreach ($imgProductPC07 as $path) {
            Image::create([
                'ProductID' => 7,
                'path' => $path
            ]);
        }

        $imgProductPC08 =[
            '/storage/img/Product/PC/PC_Gaming_STAR_AHRI_Ryzen_5_01.jpg',
        ];
        foreach ($imgProductPC08 as $path) {
            Image::create([
                'ProductID' => 8,
                'path' => $path
            ]);
        }

        $imgProductPC09 =[
            '/storage/img/Product/PC/PC_Gaming_STAR_CHICKEN_MINI_i3_12100F_01.jpg',
        ];
        foreach ($imgProductPC09 as $path) {
            Image::create([
                'ProductID' => 9,
                'path' => $path
            ]);
        }

        //LapTop
        $imgProductLapTop01 =[
            '/storage/img/Product/LapTop/Laptop_Acer_Aspire_5_A514_54_5127_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Acer_Aspire_5_A514_54_5127_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Acer_Aspire_5_A514_54_5127_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Acer_Aspire_5_A514_54_5127_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Acer_Aspire_5_A514_54_5127_05.jpg',
        ];
        foreach ($imgProductLapTop01 as $path) {
            Image::create([
                'ProductID' => 54,
                'path' => $path
            ]);
        }

        $imgProductLapTop02 =[
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_05.jpg',
        ];
        foreach ($imgProductLapTop02 as $path) {
            Image::create([
                'ProductID' => 55,
                'path' => $path
            ]);
        }

        $imgProductLapTop03 =[
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_TUF_Gaming_F15_FX506HF_05.jpg',
        ];
        foreach ($imgProductLapTop03 as $path) {
            Image::create([
                'ProductID' => 56,
                'path' => $path
            ]);
        }

        $imgProductLapTop04 =[
            '/storage/img/Product/LapTop/Laptop_Asus_Vivobook_15_OLED_A1505VA_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_Vivobook_15_OLED_A1505VA_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_Vivobook_15_OLED_A1505VA_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_Vivobook_15_OLED_A1505VA_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Asus_Vivobook_15_OLED_A1505VA_05.jpg',
        ];
        foreach ($imgProductLapTop04 as $path) {
            Image::create([
                'ProductID' => 57,
                'path' => $path
            ]);
        }

        $imgProductLapTop05 =[
            '/storage/img/Product/LapTop/Laptop_ASUS_Zenbook_DUOUX8406MA_PZ142W_02.jpg',
            '/storage/img/Product/LapTop/Laptop_ASUS_Zenbook_DUOUX8406MA_PZ142W_01.jpg',
            '/storage/img/Product/LapTop/Laptop_ASUS_Zenbook_DUOUX8406MA_PZ142W_03.jpg',
            '/storage/img/Product/LapTop/Laptop_ASUS_Zenbook_DUOUX8406MA_PZ142W_04.jpg',
            '/storage/img/Product/LapTop/Laptop_ASUS_Zenbook_DUOUX8406MA_PZ142W_05.jpg',
        ];
        foreach ($imgProductLapTop05 as $path) {
            Image::create([
                'ProductID' => 58,
                'path' => $path
            ]);
        }

        $imgProductLapTop06 =[
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_7430_T7430_i7U165W11SLU_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_7430_T7430_i7U165W11SLU_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_7430_T7430_i7U165W11SLU_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_7430_T7430_i7U165W11SLU_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_7430_T7430_i7U165W11SLU_05.jpg',
        ];
        foreach ($imgProductLapTop06 as $path) {
            Image::create([
                'ProductID' => 59,
                'path' => $path
            ]);
        }

        $imgProductLapTop07 =[
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_Plus_7430_2808S_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_Plus_7430_2808S_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_Plus_7430_2808S_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_Plus_7430_2808S_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_14_Plus_7430_2808S_05.jpg',
        ];
        foreach ($imgProductLapTop07 as $path) {
            Image::create([
                'ProductID' => 60,
                'path' => $path
            ]);
        }

        $imgProductLapTop08 =[
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_16_5630_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_16_5630_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_16_5630_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_16_5630_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Dell_Inspiron_16_5630_05.jpg',
        ];
        foreach ($imgProductLapTop08 as $path) {
            Image::create([
                'ProductID' => 61,
                'path' => $path
            ]);
        }

        $imgProductLapTop09 =[
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Aspire_7_A715_76G_59MW_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Aspire_7_A715_76G_59MW_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Aspire_7_A715_76G_59MW_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Aspire_7_A715_76G_59MW_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Aspire_7_A715_76G_59MW_05.jpg',
        ];
        foreach ($imgProductLapTop09 as $path) {
            Image::create([
                'ProductID' => 62,
                'path' => $path
            ]);
        }


        $imgProductLapTop10 =[
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Nitro_5_AN515_57_54MV_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Nitro_5_AN515_57_54MV_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Nitro_5_AN515_57_54MV_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Nitro_5_AN515_57_54MV_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Acer_Nitro_5_AN515_57_54MV_05.jpg',
        ];
        foreach ($imgProductLapTop10 as $path) {
            Image::create([
                'ProductID' => 63,
                'path' => $path
            ]);
        }

        $imgProductLapTop11 =[
            '/storage/img/Product/LapTop/Laptop_Gaming_ASUS_ROG_Strix_G16_G614JU_N3135W_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_ASUS_ROG_Strix_G16_G614JU_N3135W_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_ASUS_ROG_Strix_G16_G614JU_N3135W_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_ASUS_ROG_Strix_G16_G614JU_N3135W_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_ASUS_ROG_Strix_G16_G614JU_N3135W_05.jpg',
        ];
        foreach ($imgProductLapTop11 as $path) {
            Image::create([
                'ProductID' => 64,
                'path' => $path
            ]);
        }

        $imgProductLapTop12 =[
            '/storage/img/Product/LapTop/Laptop_Gaming_Lenovo_Legion_5_Y7000P_4070_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Lenovo_Legion_5_Y7000P_4070_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Lenovo_Legion_5_Y7000P_4070_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Lenovo_Legion_5_Y7000P_4070_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_Lenovo_Legion_5_Y7000P_4070_05.jpg',
        ];
        foreach ($imgProductLapTop12 as $path) {
            Image::create([
                'ProductID' => 65,
                'path' => $path
            ]);
        }

        $imgProductLapTop13 =[
            '/storage/img/Product/LapTop/Laptop_Gaming_MSI_Katana_15_B13VGK_1211VN_01.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_MSI_Katana_15_B13VGK_1211VN_02.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_MSI_Katana_15_B13VGK_1211VN_03.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_MSI_Katana_15_B13VGK_1211VN_04.jpg',
            '/storage/img/Product/LapTop/Laptop_Gaming_MSI_Katana_15_B13VGK_1211VN_05.jpg',
        ];
        foreach ($imgProductLapTop13 as $path) {
            Image::create([
                'ProductID' => 66,
                'path' => $path
            ]);
        }
        //Hình ảnh của Sản Phẩm

    }

}
