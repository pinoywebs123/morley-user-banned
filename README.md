# morley-user-banned
Basic Laravel Package that can banned your users


To download the package
1. composer require morley/banned
<h3>To run Seeder</h3>
2. php artisan db:seed --class=morley\\banned\\Database\\Seeds\\UserSeeder
<h3>In your login you can check the status </h3>
<p>1 = active</p>
<p>0 - inactive/banned</p>

if(\Auth::user()->status_id == 0){
    return 'User is banned';
}

