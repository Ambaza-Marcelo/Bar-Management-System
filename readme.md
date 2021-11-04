

<h1>BAR AND Restaurant MANAGEMENT SYSTEM</h1>


			<h2> #AMBAZA MARCELLIN</h2>

<ul>AKABIRYA: 
		<li>SIMPLICITE</li>
		<li>RAPIDITE</li>
		<li>SECURISE</li>

</ul>




 step1.
 	-copy
 	-cd repository
 	-git clone 
 step2.
 	-go to env.dusk.example and rename it as env.
 	-DB_CONNECTION=mysql
	-DB_HOST=127.0.0.1
	-DB_PORT=3306
	-DB_DATABASE=dbname
	-DB_USERNAME=root
	-DB_PASSWORD=

 step3.
 	-go to database file in config folder
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

   step4.
    -run the following commands
    	*php artisan migrate
    	*php artisan db:seed
    	*php artisan serve


   October 29,2021