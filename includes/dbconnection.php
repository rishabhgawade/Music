<?php 
// DB credentials.
define('DB_HOST','music111.mysql.database.azure.com');
define('DB_USER','music');
define('DB_PASS','server@1');
define('DB_NAME','odmsdb');
// Establish database connection.
try
{
    $connection = mysqli_init();

    mysqli_ssl_set($connection,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>