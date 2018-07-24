<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('road_safety_offences')->insert([[
            'type' => 'Assaulting Marshall on Duty',
            'code' => 'AMD',
            'point' => 10,
            'penalty' => 10000,
            'category' => 2
        ], [
            'type' => 'Attempting to corrupt Marshall on duty',
            'code' => 'ACS',
            'point' => 10,
            'penalty' => 10000,
            'category' => 2
        ], [
            'type' => 'Caution Sign Violation',
            'code' => 'CSV',
            'point' => 3,
            'penalty' => 3000,
            'category' => 3
        ], [
            'type' => 'Construction Area Speed Limit Violation',
            'code' => 'CAV',
            'point' => 3,
            'penalty' => 3000,
            'category' => 1
        ], [
            'type' => 'Dangerous Driving',
            'code' => 'DGD',
            'point' => 10,
            'penalty' => 50000,
            'category' => 1
        ], [
            'type' => 'Do not move violation',
            'code' => 'DNM',
            'point' => 2,
            'penalty' => 2000,
            'category' => 2
        ], [
            'type' => 'Driver\'s License Violation',
            'code' => 'DLV',
            'point' => 10,
            'penalty' => 10000,
            'category' => 2
        ], [
            'type' => 'Driving under Alcohol/ Drug Influence',
            'code' => 'DUI',
            'point' => 5,
            'penalty' => 5000,
            'category' => 2
        ], [
            'type' => 'Driving with worn out tyre',
            'code' => 'TYV',
            'point' => 3,
            'penalty' => 3000,
            'category' => 1
        ], [
            'type' => 'Driving with expired/ without spare tyre',
            'code' => 'EWT',
            'point' => 2,
            'penalty' => 2000,
            'category' => 3
        ], [
            'type' => 'Excessive Smoke Emission',
            'code' => 'ESE',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Failure to cover Unstable Materials',
            'code' => 'FCM',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Failure to Fix Red Flag on Projected Load',
            'code' => 'FFF',
            'point' => 3,
            'penalty' => 3000,
            'category' => 1
        ], [
            'type' => 'Failure to move over',
            'code' => 'FMO',
            'point' => 3,
            'penalty' => 3000,
            'category' => 1
        ], [
            'type' => 'Failure to Report Road Crash',
            'code' => 'FRC',
            'point' => 10,
            'penalty' => 20000,
            'category' => 1
        ], [
            'type' => 'Fire Extinguisher Violation',
            'code' => 'FEV',
            'point' => 3,
            'penalty' => 3000,
            'category' => 3
        ], [
            'type' => 'Inadequate Construction Warning Sign',
            'code' => 'ICW',
            'point' => 5,
            'penalty' => 50000,
            'category' => 1
        ], [
            'type' => 'Light/ Sign Violation',
            'code' => 'LSV',
            'point' => 2,
            'penalty' => 2000,
            'category' => 2
        ], [
            'type' => 'Operating Mechanically Deficient Vehicle',
            'code' => 'MDV',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Obstructing Marshall on Duty',
            'code' => 'OMD',
            'point' => 3,
            'penalty' => 3000,
            'category' => 2
        ], [
            'type' => 'Operating a Vehicle with forged documents',
            'code' => 'OFD',
            'point' => 10,
            'penalty' => 20000,
            'category' => 2
        ], [
            'type' => 'Overloading',
            'code' => 'OVL',
            'point' => 10,
            'penalty' => 10000,
            'category' => 1
        ], [
            'type' => 'Passenger\'s Manifest Violation',
            'code' => 'PMV',
            'point' => 10,
            'penalty' => 10000,
            'category' => 2
        ], [
            'type' => 'Riding Motorcycle without using crash helmet',
            'code' => 'RMH',
            'point' => 2,
            'penalty' => 2000,
            'category' => 1
        ], [
            'type' => 'Road Obstruction',
            'code' => 'ROB',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Road Marking Violation',
            'code' => 'RMV',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Route Violation',
            'code' => 'RTV',
            'point' => 10,
            'penalty' => 10000,
            'category' => 1
        ], [
            'type' => 'Seat Belt Use Violation',
            'code' => 'SUV',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Speed Limit Violation',
            'code' => 'SLV',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Unauthorized Removal/ Tampering with Road Sign',
            'code' => 'UTS',
            'point' => 5,
            'penalty' => 5000,
            'category' => 1
        ], [
            'type' => 'Under Age Driving/ Riding',
            'code' => 'UDR',
            'point' => 10,
            'penalty' => 10000,
            'category' => 1
        ], [
            'type' => 'Use of Phone while driving',
            'code' => 'UPD',
            'point' => 4,
            'penalty' => 4000,
            'category' => 1
        ], [
            'type' => 'Vehicle License Violation',
            'code' => 'VLV',
            'point' => 3,
            'penalty' => 3000,
            'category' => 1
        ], [
            'type' => 'Number Plate Violation',
            'code' => 'NPV',
            'point' => 3,
            'penalty' => 3000,
            'category' => 1
        ], [
            'type' => 'Vehicle Windshield Violation',
            'code' => 'VMV',
            'point' => 2,
            'penalty' => 3000,
            'category' => 1
        ], [
            'type' => 'Wrongful Overtaking',
            'code' => 'WOV',
            'point' => '3',
            'penalty' => 3000,
            'category' => 1
        ]
        ]);
    }
}
