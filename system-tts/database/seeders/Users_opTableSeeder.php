<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Model\Users_op;

class Users_opTableSeeder extends Seeder
{
    private $USERS_OP_JSON = '
    {
        "users_ops" :[
            {
                "id": 1,
                "dni" 33452234,
                "name" : "Pedro Rodriguez",
                "nacimiento" : "02/03/1980",
                "email" :"pedro@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {
                "id": 2,
                "dni" 334333334,
                "name" : "alvaro Rodriguez",
                "nacimiento" : "02/03/1980",
                "email" :"alvaro@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {
                "id": 3,
                "dni" 33452234,
                "name" : "Esteban Ordaz",
                "nacimiento" : "02/03/1980",
                "email" :"esteban@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {
                "id": 4,
                "dni" 31112234,
                "name" : "Maria Perez",
                "nacimiento" : "02/03/1980",
                "email" :"maria@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 1        
            },
            {
                "id": 5,
                "dni" 3999234,
                "name" : "luis Paez",
                "nacimiento" : "02/03/1980",
                "email" :"luis@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2       
            },
            {
                "id": 6,
                "dni" 33452234,
                "name" : "Wilma Perez",
                "nacimiento" : "02/03/1980",
                "email" :"wilma@gmail.com",
                "password" :"$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "type_service_id": 2      
            },
            {
                "id": 7,
                "dni" 33452234,
                "name" : "Maria Perez",
                "nacimiento" : "02/03/1980",
                "email" :"Maria@gmail.com",
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
            DB::table('users_ops')->insert([
                'id'=>$user->id,
                'dni'=>$user->dni,
                'name'=>$user->name,
                'nacimiento'=>$user->nacimiento,
                'email'=>$user->email,
                'email_verified_at' => now(),
                'password'=>$user->password,
                'type_service'=>$user->type_service,
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
