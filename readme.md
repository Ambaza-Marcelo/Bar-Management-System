

<h1>BAR AND Restaurant MANAGEMENT SYSTEM</h1>


			<h2> #AMBAZA MARCELLIN</h2>

<ul>AKABIRYA: 
		<li>SIMPLICITE</li>
		<li>RAPIDITE</li>
		<li>SECURISE</li>

</ul>


<h2>How To Install</h2>

 <h3>step 1 :</h3>
 	<ol>
    <li>copy</li>
 	<li>cd repository</li>
 	<li>git clone</li> 
 </ol>
 <h3>step 2 : </h3>
    <ul>
 	  <li>go to env.dusk.example and rename it as env.</li>
 	<li>DB_CONNECTION=mysql</li>
	<li>DB_HOST=127.0.0.1</li>
	<li>DB_PORT=3306</li>
	<li>DB_DATABASE=dbname</li>
	<li>DB_USERNAME=root</li>
	<li>DB_PASSWORD=</li>
</ul>

 <h3>step 3 :</h3>
 	<p>go to database file in config folder</p>
 	'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'dbname'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],

        'dusk_testing' => [
            'driver' => 'sqlite',
            'database' => database_path('database.sqlite'),
            'prefix' => '',
        ],

    ],

   <h3>step 4 :</h3>
    <ul>run the following commands
    	<li>php artisan migrate</li>
    	<li>php artisan db:seed</li>
    	<li>php artisan serve</li>
    </ul>
