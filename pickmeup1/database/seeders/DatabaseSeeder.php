<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Rider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'SuperAdmin',
                'role_description' => 'Super Administrator role',
                'permission_type' => 'full_in_app_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Admin',
                'role_description' => 'Administrator role',
                'permission_type' => 'full_in_app_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Rider',
                'role_description' => 'Rider role',
                'permission_type' => 'limited_rider_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Customer',
                'role_description' => 'Customer role',
                'permission_type' => 'limited_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        

        // Added separate file for users
        DB::table('users')->insert([
            [
                'role_id' => User::ROLE_SUPERADMIN,
                'first_name' => 'Superadmin',
                'last_name' => 'Superadmin',
                'gender' => 'Male',
                'date_of_birth' => '2001-01-01',
                'email' => 'superadmin@gmail.com',
                'user_name' => 'superadmin',
                'password' => Hash::make('superadmin'),
                'mobile_number' => '09123456789',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_ADMIN,
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'gender' => 'Male',
                'date_of_birth' => '2003-03-03', 
                'email' => 'admin@gmail.com',
                'user_name' => 'admin',
                'password' => Hash::make('admin'),
                'mobile_number' => '09123456789',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Aladdin',
                'last_name' => 'Buwanding',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'aladdin@gmail.com',
                'user_name' => 'aladdin',
                'password' => Hash::make('aladdin'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Raphael',
                'last_name' => 'Alingig',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'raphael@gmail.com',
                'user_name' => 'raphael',
                'password' => Hash::make('raphael'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Rider2',
                'last_name' => 'Yamaha',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'rider2@gmail.com',
                'user_name' => 'rider2',
                'password' => Hash::make('rider2'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Rider3',
                'last_name' => 'Toyota',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'rider3@gmail.com',
                'user_name' => 'rider3',
                'password' => Hash::make('rider3'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'John',
                'last_name' => 'Ratunil',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'john@gmail.com',
                'user_name' => 'john',
                'password' => Hash::make('john'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Ray',
                'last_name' => 'Ibarra',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'ray@gmail.com',
                'user_name' => 'ray',
                'password' => Hash::make('ray'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Customer',
                'last_name' => '1',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'customer@gmail.com',
                'user_name' => 'customer',
                'password' => Hash::make('customer'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Thad',
                'last_name' => 'Huber',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'thad@gmail.com',
                'user_name' => 'thadhuber',
                'password' => Hash::make('thad'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Bethany',
                'last_name' => 'Marquez',
                'gender' => 'Female',
                'date_of_birth' => '1920-01-15',
                'email' => 'bethany@gmail.com',
                'user_name' => 'bethanymarquez',
                'password' => Hash::make('bethany'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Erin',
                'last_name' => 'Flower',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'Erin@gmail.com',
                'user_name' => 'erinflower',
                'password' => Hash::make('erin'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Gil',
                'last_name' => 'Vincent',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'gil@gmail.com',
                'user_name' => 'gil',
                'password' => Hash::make('gil'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Jayne',
                'last_name' => 'Olvier',
                'gender' => 'Female',
                'date_of_birth' => '1920-01-15',
                'email' => 'jayne@gmail.com',
                'user_name' => 'jayne',
                'password' => Hash::make('jayne'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Sony',
                'last_name' => 'Ali',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'sony@gmail.com',
                'user_name' => 'sony',
                'password' => Hash::make('sony'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Tracy',
                'last_name' => 'Moreno',
                'gender' => 'Female',
                'date_of_birth' => '1920-01-15',
                'email' => 'tracy@gmail.com',
                'user_name' => 'tracy',
                'password' => Hash::make('tracy'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Customer',
                'last_name' => '4',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'customer4@gmail.com',
                'user_name' => 'customer4',
                'password' => Hash::make('customer4'),
                'mobile_number' => '1234567890',
                'status' => 'Disabled',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);

        $riders = User::where('role_id', 3)->get();
            foreach ($riders as $rider) {
                Rider::create([
                    'user_id' => $rider->user_id,
                    'registration_date' => $rider->created_at,
                    'verification_status' => 'Pending', 
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }


        DB::table('ride_histories')->insert([
            [
                'user_id' => 9,
                'rider_id' => 3,
                'ride_date' => '2024-07-01 08:30:00',
                'ride_type' => 'Motor Taxi',
                'pickup_location' => '123 Main St',
                'dropoff_location' => '456 Oak St',
                'fare' => 15.50,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'rider_id' => 4,
                'ride_date' => '2024-07-02 09:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '789 Pine St',
                'dropoff_location' => '101 Maple St',
                'fare' => 10.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 10,
                'rider_id' => 5,
                'ride_date' => '2024-07-03 10:00:00',
                'ride_type' => 'Delivery',
                'pickup_location' => '234 Elm St',
                'dropoff_location' => '567 Cedar St',
                'fare' => 12.75,
                'status' => 'Cancelled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 11,
                'rider_id' => 6,
                'ride_date' => '2024-07-04 11:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '890 Spruce St',
                'dropoff_location' => '123 Birch St',
                'fare' => 20.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 12,
                'rider_id' => 7,
                'ride_date' => '2024-07-05 12:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '456 Walnut St',
                'dropoff_location' => '789 Chestnut St',
                'fare' => 25.00,
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 13,
                'rider_id' => 7,
                'ride_date' => '2024-07-06 13:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '101 Ash St',
                'dropoff_location' => '234 Cypress St',
                'fare' => 18.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 14,
                'rider_id' => 3,
                'ride_date' => '2024-07-07 14:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '567 Alder St',
                'dropoff_location' => '890 Beech St',
                'fare' => 16.50,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 15,
                'rider_id' => 8,
                'ride_date' => '2024-07-08 15:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '123 Dogwood St',
                'dropoff_location' => '456 Fir St',
                'fare' => 19.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'rider_id' => 3,
                'ride_date' => '2024-07-09 16:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '789 Hickory St',
                'dropoff_location' => '101 Holly St',
                'fare' => 14.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 10,
                'rider_id' => 3,
                'ride_date' => '2024-07-10 17:00:00',
                'ride_type' => 'Pakyaw',
                'pickup_location' => '234 Ivy St',
                'dropoff_location' => '567 Juniper St',
                'fare' => 22.50,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);



        DB::table('feedbacks')->insert([
            [
                'sender_id' => 9,
                'sender_type' => 'Customer',
                'recipient_id' => 3,
                'recipient_type' => 'Rider',
                'comment' => 'Rider is not friendly and dropped at wrong location',
                'rating' => 2.5,
                'ride_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender_id' => 4,
                'sender_type' => 'Rider',
                'recipient_id' => 10,
                'recipient_type' => 'Customer',
                'comment' => 'Customer did not pay',
                'rating' => 1.0,
                'ride_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender_id' => 11,
                'sender_type' => 'Customer',
                'recipient_id' => 5,
                'recipient_type' => 'Rider',
                'comment' => 'Rider is very responsible and friendly',
                'rating' => 5.0,
                'ride_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender_id' => 12,
                'sender_type' => 'Customer',
                'recipient_id' => 6,
                'recipient_type' => 'Rider',
                'comment' => 'Rider was late',
                'rating' => 3.0,
                'ride_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender_id' => 5,
                'sender_type' => 'Rider',
                'recipient_id' => 10,
                'recipient_type' => 'Customer',
                'comment' => 'Customer gave clear instructions',
                'rating' => 4.5,
                'ride_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('requirements')->insert([
            [
                'title' => 'Motorcycle Picture',
                'description' => 'Image of the Motorcycle Model',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ROCR',
                'description' => 'Image of ROCR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'OR Expiration Date',
                'description' => 'OR Expiration Date',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'COR',
                'description' => 'Image of the Certificate of Registration',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Drivers License',
                'description' => 'Image of the Drivers License',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Drivers License Number',
                'description' => 'Drivers License Number',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'License Expiration Date',
                'description' => 'Drivers License Expiration Date',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'TPL Insurance',
                'description' => 'Image of the TPL Insurance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Barangay Clearance',
                'description' => 'Image of the Barangay Clearance',
                'created_at' => now(),
                'updated_at' => now(), 
            ],
            [
                'title' => 'Police Clearance',
                'description' => 'Image of the Police Clearance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Plate Number',
                'description' => 'Image of the Plate Number',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        
    }
}
