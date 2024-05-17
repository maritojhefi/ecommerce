<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Agatha Williams',
                'email' => 'contacto@macrobyte.site',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zXgnp.9rIXbNYr3ZUo7xVOWUhKKHXJZ63nBgT1zLFgi0CG6RUgfxG',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => 'Male',
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Blaine Keller',
                'email' => 'user@techvill.net',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d0TN5l6NAx/zrqfYbW4eY.3qNwtLIeHhLOqoMgiuqLsDg6GXmcqeu',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Jamal',
                'email' => 'vendor@techvill.net',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AbEg.NFMGHv9kmwNmK6EZuzJcRR1oEADEVaYOkxS/ZCbSrmJDQq5S',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'snowflake hamiz',
                'email' => 'user1@techvill.net',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZASzZRVNqNArs9b0JyFjL.tibw/w9xe2xBiyeoim2C1Ub3yuxqrIe',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => 'Male',
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Noah',
                'email' => 'noah012045@gmail.com',
                'email_verified_at' => '2022-08-17 06:12:43',
                'password' => '$2y$10$07Y7luYoqQZfka9QN96RaeTL04MFCixuVJJfG1CCqUcFKSiBCmiuC',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Oliver',
                'email' => 'oliver012045@gmail.com',
                'email_verified_at' => '2022-08-17 06:15:25',
                'password' => '$2y$10$HJT2QDO9kMiFPczggPJps.f1gfQSkgY5322gE.IH6PGFyO7PaE19i',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Liam',
                'email' => 'liam012045@gmail.com',
                'email_verified_at' => '2022-08-17 06:18:02',
                'password' => '$2y$10$qS30LuPebKePWXU4N9wa4eTrS/Zag/fHiv8X9YetNJ0AfS7LCo6du',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Elijah',
                'email' => 'elijah012045@gmail.com',
                'email_verified_at' => '2022-08-17 06:26:57',
                'password' => '$2y$10$H2xB78tZhkpBbDT6S36Frua0pC79LhzHa9uVGXxHxmDKlUztcr2nm',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'James',
                'email' => 'james012045@gmail.com',
                'email_verified_at' => '2022-08-17 06:31:07',
                'password' => '$2y$10$3ee8SzybEqD3xqb/Nl3mkOGV03sNEnbGLgesbZ7jQvplB3mTRAAe2',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'Henry William',
                'email' => 'henry012045@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rpVsJdeDQy8acG8uRYYJXOxM2YvBCq1VkrZ4OUc0v4ukBdGwYX44e',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'name' => 'Jacob Wiliam',
                'email' => 'jacob012045@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$15GTWqjoTLZS4GD/tdUBXe8VBdOOjndbGjEXyuVaI2pLjUVauWHjm',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'name' => 'Mason William',
                'email' => 'mason012045@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ku9dMRqIHJFLaiD0oBWCO.siuT/dhTU6ABPSL45gWRjgl4LQHzgOG',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'Daniel William',
                'email' => 'daniel012045@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$T3kT3nKFNN0sfkltUx8bteGQNDzNILkx9ddfLShrF3ej5k6mKWt9a',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'name' => 'Micheal William',
                'email' => 'micheal012045@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QbbLmACzdFnqnXSXNH4G/OSX5irSDsZUHQuyoSnSbmuqcGDZLtQkC',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'Lenin (User)',
                'email' => 'lenin.techvill@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Xar/4HVN1EPzDyZUZGDageUStWSghQe/AYZOnXRt7mLvGBNsh6AvO',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'Lenin (Vendor)',
                'email' => 'lenin.rock@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xHqkgEr3cUuGRTiu01Y4YeOdhPPZuqdC4LhZ9XKNaJW7lhFkjtmRS',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'name' => 'Anthony Hendricks Adena Stout',
                'email' => 'jexygobevo@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OqiyEqF6n2/zk5WAepQX..D6WwMV4XXsKjTypLwcLQkxcXPXk3eiC',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'name' => 'Daryl Long Garrett Nichols',
                'email' => 'tawuqokel@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OfjBF/UCPqXBsQ82cVGKDOLDgLsRRn/KkHyX5OQddfbUJ9C/sQ2gm',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'name' => 'Ivor Barber Lesley Figueroa',
                'email' => 'neses@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$n9RufekmqJclVDxF7/3HTO2mItQO9qmMM/bnH68rpXdSdOCLBMGQm',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'name' => 'Arden Bryant Kiara Nash',
                'email' => 'beganeco@mailinator.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fJ847eJoHOzQvdbE7o/NturJDKvyd7JQZJNE4SNireM75Ua8eBQ5W',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            ),
        ));
        
        
    }
}