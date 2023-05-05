<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Users_op;

class Users_opTableSeeder extends Seeder
{
    private $USERS_OP_JSON = '
    {
        "users_ops" :[
            {
    
                "dni":"33452234",
                "name" : "Pedro Rodriguez",
                "nacimiento" : "02/03/1980",
                "email" :"pedro@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {
      
                "dni": "334333334",
                "name" : "alvaro Rodriguez",
                "nacimiento" : "02/03/1980",
                "email" :"alvaro@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {

                "dni": "33452234",
                "name" : "Esteban Ordaz",
                "nacimiento" : "02/03/1980",
                "email" :"esteban@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {
    
                "dni": "31112234",
                "name" : "Maria Perez",
                "nacimiento" : "02/03/1980",
                "email" :"maria@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {

                "dni": "33111234",
                "name" : "Roberto lopes",
                "nacimiento" : "02/03/1980",
                "email" :"Mamalo@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {

                "dni": "33111234",
                "name" : "loas lopes",
                "nacimiento" : "02/03/1980",
                "email" :"ssss@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {

                "dni": "33111234",
                "name" : "aaaa lopes",
                "nacimiento" : "02/03/1980",
                "email" :"gggg@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {

                "dni": "33111234",
                "name" : "iones lopes",
                "nacimiento" : "02/03/1980",
                "email" :"asasasss@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {
  
                "dni": "3999234",
                "name" : "luis Paez",
                "nacimiento" : "02/03/1980",
                "email" :"luis@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2       
            },
            {

                "dni": "33452234",
                "name" : "Wilma Perez",
                "nacimiento" : "02/03/1980",
                "email" :"wilma@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2      
            },
            {

                "dni": "33452234",
                "name" : "Maria Perez",
                "nacimiento" : "02/03/1980",
                "email" :"MariaPeeere@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2        
            },
            {

                "dni": "11152234",
                "name" : "Mario sderez",
                "nacimiento" : "02/03/1980",
                "email" :"MariosPeeere@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2        
            },
            {

                "dni": "848292",
                "name" : "Sofia sderez",
                "nacimiento" : "02/03/1980",
                "email" :"Sofiare@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2        
            },
            {

                "dni": "8847291",
                "name" : "Rodiecn assd",
                "nacimiento" : "02/03/1980",
                "email" :"sdRodieeere@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2        
            }
        ]
    }
        ';
        
/* 
Faltara agregar mas si lo amerita
esto es solo una estructura base de como se haria el llenado
*/

        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = json_decode($this->USERS_OP_JSON)->users_ops;
        
        foreach ($users as $user){
            $date = date_create_from_format('d/m/Y', $user->nacimiento);
            $nacimiento = $date->format('Y-m-d'); // convertir la fecha al formato de Laravel

            DB::table('users_ops')->insert([
                'dni'=>$user->dni,
                'name'=>$user->name,
                'nacimiento'=>$nacimiento,
                'email'=>$user->email,
                'email_verified_at' => now(),
                'password'=>$user->password,
                'type_service_id'=>$user->type_service_id,
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
