<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
          [
          'last_name' => 'Lê Nguyễn',
          'first_name' => 'Đại Lộc',
          'email'=> 'lndl2002@gmail.com',
          'phone'=> '0393482408',
          'birthday'=> '2002-07-20',
          'password'=> Hash::make('admin1234'),
          'gender' => 0,
          'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
          'is_user_admin' => 1
          ],

          [
            'last_name' => 'Nguyễn',
            'first_name' => 'Chí Bảo',
            'email'=> 'ncb2002@gmail.com',
            'phone'=> '0393482401',
            'birthday'=> '2002-01-20',
            'password'=> Hash::make('admin1234'),
            'gender' => 0,
            'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
            'is_user_admin' => 1
            ],

            [
                'last_name' => 'Trương',
                'first_name' => 'Công Thắng',
                'email'=> 'tct2001@gmail.com',
                'phone'=> '0393482402',
                'birthday'=> '2002-03-20',
                'password'=> Hash::make('admin1234'),
                'gender' => 0,
                'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
                'is_user_admin' => 1
            ],

            [
                'last_name' => 'Nguyễn',
                'first_name' => 'Đức Thạnh',
                'email'=> 'ndt2001@gmail.com',
                'phone'=> '0393482403',
                'birthday'=> '2002-04-20',
                'password'=> Hash::make('admin1234'),
                'gender' => 0,
                'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
                'is_user_admin' => 1
            ],

            [
                'last_name' => 'Nguyễn Nhan',
                'first_name' => 'Nhựt Tân',
                'email'=> 'nnt2001@gmail.com',
                'phone'=> '0393482406',
                'birthday'=> '2002-05-20',
                'password'=> Hash::make('admin1234'),
                'gender' => 0,
                'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
                'is_user_admin' => 1
            ],


            [
                'last_name' => 'Lê',
                'first_name' => 'Ngọc Vy',
                'email'=> 'lnv2002@gmail.com',
                'phone'=> '0393482402',
                'birthday'=> '2002-05-22',
                'password'=> Hash::make('admin1234'),
                'gender' => 1,
                'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
                'is_user_admin' => 1
            ],
            [
                'last_name' => 'Lê Ngọc',
                'first_name' => 'Bảo Ngân',
                'email'=> 'lnbn2002@gmail.com',
                'phone'=> '0393482402',
                'birthday'=> '2002-12-24',
                'password'=> Hash::make('admin1234'),
                'gender' => 1,
                'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
                'is_user_admin' => 1
            ],

            [
                'last_name' => 'Lê',
                'first_name' => 'Quốc Tiến',
                'email'=> 'lqt2003@gmail.com',
                'phone'=> '0393482412',
                'birthday'=> '2002-12-30',
                'password'=> Hash::make('123456789'),
                'gender' => 0,
                'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
                'is_user_admin' => 0
            ],
            [
                'last_name' => 'Phạm Thị',
                'first_name' => 'Ngọc Hân',
                'email'=> 'ptnh2222@gmail.com',
                'phone'=> '0393482211',
                'birthday'=> '2002-12-30',
                'password'=> Hash::make('123456789'),
                'gender' => 1,
                'address' => '50/42/2 An Phú Đông, Vườn Lài, Quận 12,TP HCM',
                'is_user_admin' => 0
            ],
        ]);
    }
}
