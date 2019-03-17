# morley-user-banned
Basic Laravel Package that can banned your users


To download the package
1. composer require morley/banned
To run Seeder
2. php artisan db:seed --class=morley\\banned\\Database\\Seeds\\UserSeeder
In your login you can check the status 
1 = active
0 - inactive/banned

if(\Auth::user()->status_id == 0){
    return 'User is banned';
}

