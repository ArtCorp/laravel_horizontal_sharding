<h1>Simple example horizontal sharding on laravel</h1>

<h2>Before use</h2>

<h3>Config env file</h3>

<h4>Example</h4>

<p>DB_CONNECTION=mysql</p>
<p>DB_HOST=127.0.0.1</p>
<p>DB_PORT=3306</p>
<p>DB_DATABASE=laravel_horizontal_sharding_table_1</p>
<p>DB_USERNAME=homestead</p>
<p>DB_PASSWORD=secret</p>

<p>DB_EXT_HOST=127.0.0.1</p>
<p>DB_EXT_DATABASE=laravel_horizontal_sharding_table_2</p>
<p>DB_EXT_USERNAME=homestead</p>
<p>DB_EXT_PASSWORD=secret</p>


<h3>Config config/database.php</h3>

<h4>Example</h4>
<code>
    <p>    'mysql' => [</p>
    <p>    'driver' => 'mysql',</p>
    <p>    'host' => env('DB_HOST', '127.0.0.1'),</p>
    <p>    'port' => env('DB_PORT', '3306'),</p>
    <p>    'database' => env('DB_DATABASE', 'forge'),</p>
    <p>    'username' => env('DB_USERNAME', 'forge'),</p>
    <p>    'password' => env('DB_PASSWORD', ''),</p>
    <p>    'unix_socket' => env('DB_SOCKET', ''),</p>
    <p>    'charset' => 'utf8mb4',</p>
    <p>    'collation' => 'utf8mb4_unicode_ci',</p>
    <p>    'prefix' => '',</p>
    <p>    'prefix_indexes' => true,</p>
    <p>    'strict' => true,</p>
    <p>    'engine' => null, ]</p>
</code>
<code>
    <p>    'mysql_external' => [</p>
    <p>    'driver' => 'mysql',</p>
    <p>    'host' => env('DB_EXT_HOST', '127.0.0.1'),</p>
    <p>    'port' => env('DB_PORT', '3306'),</p>
    <p>    'database' => env('DB_EXT_DATABASE', 'forge'),</p>
    <p>    'username' => env('DB_EXT_USERNAME', 'forge'),</p>
    <p>    'password' => env('DB_EXT_PASSWORD', ''),</p>
    <p>    'unix_socket' => env('DB_SOCKET', ''),</p>
    <p>    'charset' => 'utf8mb4',</p>
    <p>    'collation' => 'utf8mb4_unicode_ci',</p>
    <p>    'prefix' => '',</p>
    <p>    'prefix_indexes' => true,</p>
    <p>    'strict' => true,</p>
    <p>    'engine' => null, ]</p>
</code>
