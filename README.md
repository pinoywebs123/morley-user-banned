# morley-user-banned
Basic Laravel Package that can banned your users


To download the package
1. composer require morley/banned
<h3>To run Seeder</h3>
2. php artisan db:seed --class=morley\\banned\\Database\\Seeds\\UserSeeder
<h3>In your LoginController you can check the status_id </h3>
<p>1 = active</p>
<p>0 - inactive/banned</p>
<h3>And add this code below after login is success</h3>
<code>
if(\Auth::user()->status_id == 0){
    return 'User is banned';
}
</code>

<h2>Visit host/users or http://127.0.0.1:8000/users</h2>

