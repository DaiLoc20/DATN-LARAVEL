<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Product::create([
            'name' => 'PC Gaming STAR CHICKEN MINI i3 12100F| GT 1030 2GB, Intel',
        'price' => 6990000,
        'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC BEST FOR GAMING i5 10400F| GTX 1660 Super 6GB, Intel',
            'price' => 9990000,
            'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC THE BEST FOR GAMING i3 10105F| RX 580 8GB, Intel',
            'price' => 7990000,
            'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC FASTER GAMING i5 12400F | RX 580 8GB, Intel',
            'price' => 9990000,
            'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC CHƠI GAME HIỆU SUẤT CAO i5 12400F| RTX 3060 12GB, Intel',
            'price' => 15980000,
            'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN PLUS White i3 12100F| GTX 1650 4GB, Intel',
            'price' => 10250000,
            'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN SUPER LUCE i3 12100F| RX 6600 V3 8GB, Intel',
            'price' => 11990000,
            'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC ASUS GAMING PERFORMANCE i5 12400F| RTX 4060 8GB, Intel',
            'price' => 16980000,
            'CategoryID' => 1
        ]);

        Product::create([
            'name' => 'PC ULTIMATE GAMING 4K i5 12400F| RTX 4060 TI 16GB OC, Intel',
            'price' => 21990000,
            'CategoryID' => 1
        ]);


        Product::create([
            'name' => 'PC 4K GAMING i5 12400F| RTX 4070 12GB, Intel',
            'price' => 25880000,
            'CategoryID' => 1
        ]);


        Product::create([
            'name' => 'PC Gaming STAR AHRI Ryzen5 7600X| RX 7600 V2 8GB, AMD',
            'price' => 26100000,
            'CategoryID' => 1
        ]);
        Product::create([
            'name' => 'PC AMD SUPER GAMING Ryzen7 5700X3D| RTX 4060 8GB , AMD',
            'price' => 22890000,
            'CategoryID' => 1
        ]);
        Product::create([

            'name' => 'Ram Laptop Kingston 4GB DDR4 2666Mhz',
            'price' => 290000,
            'CategoryID' => 8

        ]);

        Product::create([

            'name' => 'Ram Laptop Adata Premier 4GB DDR4 2666MHz',
            'price' => 290000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Ram PC Adata XPG D10 DDR4 8GB 3200Mhz White',
            'price' => 470000,
            'CategoryID' => 8
        ]);


        Product::create([

            'name' => 'Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz',
            'price' => 540000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Ram Laptop Kingston 8GB DDR4 3200MHz',
            'price' => 550000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Ram PC Adata XPG Spectrix D50 RGB White 16GB DDR4 3600Mhz',
            'price' => 1499000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'RAM PC CORSAIR VENGEANCE RGB 64GB (2x32GB) DDR5 5600Mhz',
            'price' => 5999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Ram PC Adata XPG Spectrix D41 RGB Grey 8GB DDR4 3200Mhz',
            'price' => 599000,
            'CategoryID' => 8
        ]);
        Product::create([

            'name' => 'Ram PC Kingston Fury Beast RGB 16GB (2x8GB) DDR4 3600Mhz',
            'price' =>   1699000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Ram Corsair Dominator Platinum RGB BLACK 32GB (2x16GB) Bus 5600Mhz DDR5',
            'price' => 4599000,
            'CategoryID' => 8
        ]);
        Product::create([

            'name' => 'CPU Intel Core i3 10105F ( 4.40 GHz, 4 Cores 8 Threads, LGA 1200)',
            'price' => 1769000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU Intel Core i3 14100 (Up To 4.70GHz, 4 Nhân 8 Luồng, 12MB Cache, LGA 1700)',
            'price' => 3899000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU Intel Core i5 12600K (LGA1700, Turbo 4.90 GHz, 10C/16T, 20MB)',
            'price' => 4890000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU Intel Core i5 14600KF (Up 5.30 GHz, 14 Nhân 20 Luồng, 24MB Cache, Raptor Lake Refresh)',
            'price' => 7999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU Intel Core i7 12700K (LGA1700, Turbo 5.00 GHz, 12C/20T, 25MB)',
            'price' => 7299000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU Intel Core i7 14700KF (20 Nhân 28 Luồng, Up to 5.6 GHz, 33MB Cache, Raptor Lake Refresh)',
            'price' => 10799000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU INTEL CORE i9 14900KF (Up to 5.8GHZ, 24 Nhân 32 Luồng, 36MB Cache, 125W,Raptor Lake Refresh)',
            'price' => 15499000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU Intel Core i9 14900KS ( up to 6.2GHz , 24 nhân 32 luồng ,36MB, 150W, LGA 1700 )',
            'price' => 18599000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD RYZEN 3 3200G (3.6GHz Up to 4.0GHz, AM4, 4 Cores 4 Threads)',
            'price' => 1880000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD RYZEN 3 3300X (3.8GHz Up to 4.3GHz, AM4, 4 Cores 8 Threads)',
            'price' => 2490000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 5 3500 chính hãng (AM4, Upto 4.10 GHz, 6C/6T, 16MB)',
            'price' => 1630000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 5 7600X (AM5, Upto 5.30 GHz, 6C/12T, 32MB)',
            'price' => 6290000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 7 5700G (AM4, Upto 4.60 GHz, 8C/16T, 16MB)',
            'price' => 5050000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 7 5800X (AM4, Upto 4.70 GHz, 8C/16T, 32MB)',
            'price' => 6350000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 9 5900X (AM4, Upto 4.80 GHz, 12C/24T, 64MB)',
            'price' => 8290000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 9 7950X3D (4.2Ghz up to 5.7Ghz, 144MB, 16 cores 32 threads, 120W, AM5)',
            'price' => 17199000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Màn hình Gaming E-DRA EGM24F75 24 inch FullHD 75hz',
            'price' =>  1990000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'Màn Hình VSP Fast IPS IP2518V1 25 Inch 180Hz',
            'price' =>  2590000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'MÀN HÌNH DELL S2425H (23.8 Inch/FHD/IPS/100HZ/4MS/LOA)',
            'price' =>  3589000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'MÀN HÌNH GAMING ASUS TUF VG249Q3A (23.8 Inch/FHD/FAST IPS/180HZ/1MS)',
            'price' =>  3190000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'Màn hình Asus ROG Swift OLED PG27AQDM (27 inch/QHD/OLED/240Hz/0.03ms)',
            'price' => 23899000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'MÀN HÌNH SAMSUNG ODYSSEY G5 G55C LS27CG552EEXXV (27 Inch/QHD/VA/165HZ/1MS/CONG)',
            'price' => 5499000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'Màn Hình MSI MAG 256F (25 Inch/ IPS/ FHD/ 180Hz/1ms)',
            'price' =>   3249000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'MÀN HÌNH GAMING MSI MPG 321URX QD-OLED (31.5 Inch/ UHD/ QD-OLED/ 240HZ/ 0.03MS)',
            'price' =>  35999000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'MÀN HÌNH GAMING GIGABYTE G24F 2 (23.8 Inch/FHD/IPS/180HZ/1MS)',
            'price' =>  3289000,
            'CategoryID' => 3
        ]);

        Product::create([

            'name' => 'Màn Hình Dell P3223QE (31.5 Inch/ 4K/ IPS/ 60hz/ 5ms )',
            'price' => 13399000,
            'CategoryID' => 3
        ]);


        Product::create([

            'name' => 'Nguồn máy tính MSI MAG A850GL - 850w ( ATX 3.0, PCIe 5.0, Full Modullar -BH 60 Tháng )',
            'price' => 2899000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn Máy Tính MSI A1000G 1000W PCIE 5.0 ( 80 PLUS GOLD / FULL Modular)',
            'price' => 4299000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn Corsair RM750e PCIe 5.0 750w 80 Plus Gold',
            'price' => 2999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn ASUS TUF Gaming 1000W GOLD PCI GEN 5.0 - 80 Plus Gold',
            'price' => 4449000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn Gigabyte UD850GM 850W (80 PLUS GOLD/ Full Modular )',
            'price' => 2990000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'NGUỒN ASUS ROG THOR - 1600T GAMING TITANIUM - 1600W ( 80 PLUS Titanium / Full Modular)',
            'price' => 16899000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn Corsair RM850e PCIe 5.0 850w 80 Plus Gold',
            'price' => 3269000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn GIGABYTE GP-UD1000GM PG5 1000W (80 Plus Gold/Full Modular )',
            'price' => 4299000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn máy tính Jetek MaxWatt MW650 650W',
            'price' => 799000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Nguồn Antec CUPRUM STRIKE CSK 650W 80 Plus Bronze',
            'price' => 1339000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Laptop Asus TUF Gaming F15 FX506HF HN014W',
            'price' => 14890000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Asus Vivobook 15 OLED A1505VA L1201W',
            'price' => 21990000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Gaming ASUS ROG Strix G16 G614JU N3135W',
            'price' => 31890000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop ASUS Zenbook DUOUX8406MA PZ142W 90NB12U1 M005Z0',
            'price' => 58990000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Gaming Acer Nitro 5 AN515 57 54MV',
            'price' => 16990000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Gaming Acer Aspire 7 A715 76G 59MW',
            'price' => 15990000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Acer Aspire 5 A514 54 5127',
            'price' => 10900000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Dell Inspiron 14 Plus 7430 2808S',
            'price' => 19500000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Dell Inspiron 16 5630 (R1605S)',
            'price' => 15690000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Dell Inspiron 14 7430 T7430 i7U165W11SLU',
            'price' => 26690000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Gaming MSI Katana 15 B13VGK 1211VN',
            'price' => 39990000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'Laptop Gaming Lenovo Legion 5 Y7000P 4070',
            'price' => 36990000,
            'CategoryID' => 2
        ]);

        Product::create([

            'name' => 'MAINBOARD MSI PRO B760M-E DDR4',
            'price' => 2699000,
            'CategoryID' => 8
        ]);
        Product::create([

            'name' => 'MAINBOARD GIGABYTE B760M GAMING PLUS WIFI DDR4',
            'price' => 3249000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD ASUS ROG STRIX Z790-E GAMING WIFI II DDR5',
            'price' => 14999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD ASROCK Z790 STEEL LEGEND WIFI DDR5',
            'price' => 7599000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD GIGABYTE B760M AORUS ELITE X AX DDR5',
            'price' => 5899000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD MSI MAG B760M MORTAR WIFI DDR4',
            'price' => 4599000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD GIGABYTE B650M GAMING X AX DDR5',
            'price' => 5099000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD ASUS ROG STRIX Z790-A GAMING WIFI II',
            'price' => 10699000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD GIGABYTE Z790 AORUS PRO X DDR5',
            'price' => 11899000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'MAINBOARD GIGABYTE Z790 AORUS XTREME X DDR5',
            'price' => 26999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card màn hình ASUS Dual Radeon RX 6600 V2 8GB GDDR6',
            'price' => 5860000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card màn hình MSI RTX 3060 VENTUS 2X OC 12GB GDDR6',
            'price' => 7990000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card Màn Hình ASUS ROG Strix GeForce RTX 4060 OC Edition 8GB GDDR6',
            'price' => 9990000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card màn hình MSI GeForce RTX 4080 SUPER 16GB EXPERT',
            'price' => 34990000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card màn hình MSI GeForce RTX 4070 Ti SUPER 16GB VENTUS 3X OC',
            'price' => 25999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card màn hình Gigabyte RTX 3060 Ti EAGLE OC 8GB',
            'price' => 9990000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CARD MÀN HÌNH MSI RTX 4070 SUPER 12GB VENTUS 2X WHITE OC',
            'price' => 18799000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card màn hình Gigabyte RTX 4070 Ti SUPER GAMING OC 16GB',
            'price' => 28199000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'CARD MÀN HÌNH AIVISION GEFORCE RTX 2060 6GB',
            'price' => 5490000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Card màn hình Asus TUF RTX 3070 Ti 8GB V2 GAMING ',
            'price' => 12499000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Vỏ Case Xigmatek Xigmatek X Battleship ( MidTower/Màu Trắng) ',
            'price' => 2999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Vỏ Case César Snow White ',
            'price' => 690000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Vỏ Case JONSBO Z20 BLACK (MATX/MID TOWER/MÀU ĐEN) ',
            'price' => 1790000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Vỏ Case César Bravery Black ',
            'price' => 1290000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Vỏ Case César Bravery White ',
            'price' => 1290000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Vỏ máy tính Jetek CSGO2 Tifa ',
            'price' => 599000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'VỎ CASE ASUS ROG HYPERION GR701 (FULL TOWER / MÀU ĐEN ) ',
            'price' => 9999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'VỎ CASE ASUS GR701 ROG HYPERION WHITE EDITION (EATX/FULL TOWER/ MÀU TRẮNG) ',
            'price' => 10499000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'VỎ CASE HYTE Y60 SNOW WHITE (EATX/MID TOWER/MÀU TRẮNG) ',
            'price' => 5590000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Vỏ Case Antec NX291 ',
            'price' => 990000,
            'CategoryID' => 8
        ]);
        Product::create([

            'name' => 'Fan Case Led RGB Coolmoon Y2 - Trắng ',
            'price' => 75000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Fan Case Led RGB Coolmoon Y2 - Đen ',
            'price' => 75000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Fan Case Coolmoon S6 White | Fan lẻ, ARGB (Sync Main) ',
            'price' => 79000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Tản nhiệt nước Coolmoon ICEMOON 240P ARGB - Trắng',
            'price' => 849000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Tản Nhiệt Nước CPU Thermalright Aqua Elite 240 BLACK ARGB V3 ',
            'price' => 1650000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'TẢN NHIỆT NƯỚC ASUS ROG RYUJIN III 360 ARGB WHITE',
            'price' => 9999000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Tản nhiệt nước Coolmoon TY1 240 White ( Mặt gương kèm nhiệt độ, trắng) ',
            'price' => 1020000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Tản nhiệt khí CPU CoolMoon T600 TopDown - Trắng ',
            'price' => 439000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Tản nhiệt nước Coolmoon Aosor AS240 (White ALL RGB) ',
            'price' => 1260000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Tản nhiệt nước Cooler Master MasterLiquid ML240 ILLUSION ARGB Gen 2 ',
            'price' => 2290000,
            'CategoryID' => 8
        ]);

        Product::create([

            'name' => 'Ổ CỨNG SSD GIGABYTE AORUS GEN5 10000 2TB PCIE 5.0 X 4 (ĐỌC 10000MB/S GHI 9500MB/S) ',
            'price' => 9490000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'Ổ CỨNG SSD MSI SPATIUM M450 500GB NVME M.2 2280 PCIE GEN 4 X 4 (ĐỌC 3600MB/S, GHI 2300MB/S) ',
            'price' => 1199000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'Ổ CỨNG SSD KINGMAX ZEUS PQ3480 1TB M.2 2280 PCIE NVME GEN 3X4 (ĐỌC 1950MB/S - GHI 1800MB/S) ',
            'price' => 1659000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'Ổ CỨNG SSD SAMSUNG 990 PRO 4TB PCIE NVME 4.0X4 (ĐỌC 7450MB/S - GHI 6900MB/S) ',
            'price' => 10599000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'Ổ CỨNG HDD SEAGATE BARRACUDA 2TB (3.5 INCH 7200RPM, SATA, 256MB CACHE ) ',
            'price' => 1699000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'Ổ CỨNG HDD SEAGATE BARRACUDA 1TB (3.5 INCH, 7200RPM, SATA, 256MB CACHE ) ',
            'price' => 1459000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'Ổ CỨNG HDD SEAGATE IRONWOLF 6TB (3.5 INCH, 5400RPM, SATA3, 256 MB CACHE)  ',
            'price' => 4899000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'Ổ CỨNG HDD SEAGATE IRONWOLF 4TB ( 3.5 INCH, 5400RPM, SATA3, 256MB CACHE ) ',
            'price' => 3199000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'USB 64G Kingston Data Traveler DTX/64G ',
            'price' => 119000,
            'CategoryID' => 4
        ]);

        Product::create([

            'name' => 'USB Patriot Xporter Gen 1 Slider 256GB  ',
            'price' => 266000,
            'CategoryID' => 4
        ]);


        Product::create([

            'name' => 'TAI NGHE CHƠI GAME ASUS ROG CETRA II CORE  ',
            'price' => 899000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'TAI NGHE DAREU EH416 RGB (7.1, USB, LED RGB)  ',
            'price' => 389000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'TAI NGHE DAREU EH722X USB 7.1 BLACK  ',
            'price' => 619000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'CHUỘT GAME KHÔNG DÂY LOGITECH G502X RGB PLUS LIGHTSPEED ĐEN  ',
            'price' => 3099000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Chuột DareU A960S RGB Ultra LightWeight  ',
            'price' => 220000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'CHUỘT EDRA EM624 ĐEN (USB)  ',
            'price' => 199000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Chuột game Fuhlen G90 RGB -Bảo hành 2 năm chính hãng -nút bấm độ bền 100 tr lần nhấnE  ',
            'price' => 599000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Chuột Gaming Razer Basilisk V3 RZ01',
            'price' => 989000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Bàn Phím Giả Cơ Máy Tính Cao Cấp G21B Kèm Chuột Dành Cho Game Thủ Đèn LED 7 Màu Ấn Tượng  ',
            'price' => 250000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Bàn Phím Cơ DAREU EK880  ',
            'price' => 790000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'BÀN PHÍM LOGITECH G913 TKL LIGHTSPEED WIRELESS RGB  ',
            'price' => 3599000,
            'CategoryID' => 16
        ]);
        Product::create([

            'name' => 'Túi ASRock Phantom Gaming Black  ',
            'price' => 820000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Balo Laptop Gigabyte Gaming Gen 12',
            'price' => 990000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Balo Laptop Lenovo Ideapad Gaming backpack 15.6 inch ',
            'price' => 500000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Balo Laptop Acer Gaming SUV 2',
            'price' => 500000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Pin Dell Latitude 5280/ 5480/ 5490/ 3520 93FTF ',
            'price' => 1590000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Pin Laptop Lenoge Acer AC-3810   ',
            'price' => 99000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Pin Laptop Lenoge HP HQ-P106 (10.8V/5200mAh)  ',
            'price' => 99000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Adapter Laptop Lenovo 20V-3.25A-65W (Đầu số 5, 4.0mm*1.7mm)  ',
            'price' => 531000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Adapter Laptop Dell 20V - 3.25A 65W | Type C (Oval) | Zin  ',
            'price' => 999000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Adapter Laptop Acer 19V-3.42A-65W ( Đầu 5.5mm*1.7 mm)',
            'price' => 455000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp Riser Asus ROG Strix Cable | 240mm, PCI-E 3.0, hỗ trợ dựng VGA',
            'price' => 450000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Dây nguồn nối dài Lian Li Strimer Plus V2',
            'price' => 1749000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Giá đỡ VGA Coolmoon CM-GH 2 (Đen)',
            'price' => 169000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Dây Led Coolmoon C200EX + Dây nối dài EX24 24 pin màu trắng',
            'price' => 430000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Khung dựng VGA Cooler Master V3 (Kèm Riser PCIE 4.0)',
            'price' => 1440000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Giá đỡ VGA Coolmoon CM-GH 2 (Đen)',
            'price' => 169000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp nguồn nối dài CPU 2 đầu 8 pin',
            'price' => 49000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Dây nguồn nối dài Lian Li ARGB 24 Pin Plus V2 Power',
            'price' => 1550000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Dây nguồn nối dài Lian Li ARGB 3x8 Pin Plus V2 Power',
            'price' => 1440000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Dây nguồn nối dài Lian Li Strimer Plus V2 (12+4-pin to 12+4-pin 8 lights)',
            'price' => 1299000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Giá treo màn hình North Bayou F80 - Xám ( 17 - 30 inch)',
            'price' => 3250000,
            'CategoryID' => 16
        ]);
        Product::create([

            'name' => 'Giá treo màn hình North Bayou F80 - Trắng (17 - 30 inch)',
            'price' => 329000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Giá treo màn hình North Bayou P160 - Đen (17 - 27 inch)',
            'price' => 550000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Giá treo màn hình HyperWork Alpha Gaming - Trắng đen (22 - 34 inch)',
            'price' => 699000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Giá treo màn hình North Bayou - Đen (10 - 27 inch)',
            'price' => 259000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp HDMI 20M (Dây Dẹt)',
            'price' => 129000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Dây HDMI VH205 VEGGIEG 4K (3m)',
            'price' => 95000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp DisplayPort 1.2 4K VEGGIEG V-Z602 (1.5M)',
            'price' => 105000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp VGA trắng 1.5m ( 2 đầu xanh loại tốt)',
            'price' => 18000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp HDMI 10M ( Dây Tròn)',
            'price' => 70000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Keo tản nhiệt Cooler Master Mastergel Regular',
            'price' => 119000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Keo tản nhiệt Cooler Master Cryofuze Violet ',
            'price' => 105000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Bộ Hub + Remote Fan RGB Coolmoon',
            'price' => 89000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Gông chống cong Magic - Dành CPU Socket 1700',
            'price' => 89000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Hub điều khiển chống VGA RGB',
            'price' => 39000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Tấm PAD tản nhiệt Thermalright Heilos - AMD',
            'price' => 99000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Keo tản nhiệt Cooler Master PTK-L01',
            'price' => 45000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Keo tản nhiệt HY510 (Hủ 100G)',
            'price' => 52000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Gông Thermalright Socket 2011 (Dùng Cho Assassin King Series)',
            'price' => 25000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Gông chống cong Leopard cho CPU Socket 1700, 18xx',
            'price' => 89000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Card PCIE Wifi 6 Asus PCE-AX3000 (No Box)',
            'price' => 639000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp mạng 15M UTP CAT 5E AD-LINK High Speed - Xám',
            'price' => 40000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp Lan đúc sẵn 3M loại tốt Kingmaster',
            'price' => 15000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp mạng đúc sẵn UTP Cat 6 AD-Link High Speed (10M)',
            'price' => 35000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp Category 5E U/UTP 25AWG ',
            'price' => 1490000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Card Mạng Không Dây TP-Link ',
            'price' => 169000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Bịch đầu mạng Rj45 Dintek 6E mạ vàng (100c/bịch)',
            'price' => 520000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Card LAN HP Ethernet 10Gb 2-port 530T Adapter QSD',
            'price' => 990000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Cáp LAN UTP CAT 5E 15M',
            'price' => 27000,
            'CategoryID' => 16
        ]);

        Product::create([

            'name' => 'Card Mạng Không Dây TP-Link TL-WN822N',
            'price' => 229000,
            'CategoryID' => 16
        ]);

    }
}
