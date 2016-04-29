<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Person;
use App\PersonUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	Model::unguard();
        DB::table('persons')->delete();
        $persons = array(
            ['id' => '1',
            'first_name' => 'Alvin',
            'last_name' => 'Pacot',
            'middle_name' => 'Mname',
            'email' => 'aepacot2016@gmail.com',
            'birthdate' => '1990-01-25',
            'street_address' => 'Aguinaldo',
            'city' => 'Iligan City',
            'province' => 'Lanao del Norte',
            'country' => 'Philippines',
            'zipcode' => '9200',
            'religion' => 'Religion',
            'gender' => 'Male',
            'mobile' => '09145889885',
            'phone'=> '221-1234'],
            ['id' => '2',
            'first_name' => 'Senica',
            'last_name' => 'Tanedo',
            'middle_name' => 'Mname',
            'email' => 'senica@gmail.com', 
            'birthdate' => '1993-10-12',
            'street_address' => 'Aguinaldo',
            'city' => 'Iligan City',
            'province' => 'Lanao del Norte',
            'country' => 'Philippines',
            'zipcode' => '9200',
            'religion' => 'Religion',
            'gender' => 'Female',
            'mobile' => '09278896336',
            'phone'=> '223-4321'],
        );
        // Loop through each person above and create the record for them in the database
        foreach ($persons as $person)
        {
            Person::create($person);
        }

        DB::table('users')->delete();
        $users = array(
            ['id' => '1', 'password' => Hash::make('secret')],
            ['id' => '2', 'password' => Hash::make('secret')]
    	);
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        DB::table('person_user')->delete();
        $person_users = array(
            ['person_id' => '1', 'user_id' => '1'],
            ['person_id' => '2', 'user_id' => '2']
    	);
            
        // Loop through each user above and create the record for them in the database
        foreach ($person_users as $person_user)
        {
            PersonUser::create($person_user);
        }
        Model::reguard();
    }
}
