<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clienteNacional=User::create([
            'usertype' => 'ClienteNacional',
            'run' => '20040236-7',
            'name' => 'Camilo',
            'secondname' => 'Cristobal',
            'lastname' => 'Mondaca',
            'lastname2' => 'Ayala',
            'gender' => 'Masculino',
            'country' => 'Chile',
            'birthday' => '24-09-1998',
            'telephone' => '935698852',
            'address' => 'Los Pinos 03020',
            'email' => 'nacional@gmail.com',
            'password' => Hash::make('nacional'),
        ]);

        $clienteInternacional=User::create([
            'usertype' => 'ClienteInternacional',
            'run' => '22234592-5',
            'name' => 'Joaquin',
            'secondname' => 'Alejandro',
            'lastname' => 'Mondaca',
            'lastname2' => 'Ayala',
            'gender' => 'Masculino',
            'country' => 'Chile',
            'birthday' => '28-01-2006',
            'telephone' => '123456789',
            'address' => 'Los Pinos 03020',
            'email' => 'internacional@gmail.com',
            'password' => Hash::make('internacional'),
        ]);

        $Productor=User::create([
            'usertype' => 'Productor',
            'run' => '14563659-1',
            'name' => 'Leonor',
            'secondname' => 'Amanda',
            'lastname' => 'Gonzalez',
            'lastname2' => 'Soto',
            'gender' => 'Femenino',
            'country' => 'Chile',
            'birthday' => '15-11-1990',
            'telephone' => '987321654',
            'address' => 'Angol 154',
            'email' => 'productor@gmail.com',
            'password' => Hash::make('productor'),
        ]);

        $Transportista=User::create([
            'usertype' => 'Transportista',
            'run' => '12632416-8',
            'name' => 'Agustín',
            'secondname' => 'Lucas',
            'lastname' => 'Rojas',
            'lastname2' => 'Silva',
            'gender' => 'Masculino',
            'country' => 'Chile',
            'birthday' => '05-03-1994',
            'telephone' => '951362487',
            'address' => 'Yelcho 3687',
            'email' => 'transportista@gmail.com',
            'password' => Hash::make('transportista'),
        ]);

        $Consultor=User::create([
            'usertype' => 'Consultor',
            'run' => '14213694-4',
            'name' => 'Isabella',
            'secondname' => 'Sofía',
            'lastname' => 'Contreras',
            'lastname2' => 'Diaz',
            'gender' => 'Femenino',
            'country' => 'Chile',
            'birthday' => '30-09-1980',
            'telephone' => '987654321',
            'address' => 'Santo Domingo 264',
            'email' => 'consultor@gmail.com',
            'password' => Hash::make('consultor'),
        ]);
    }
}
