<?php 
if($_SERVER['SERVER_NAME'] == 'localhost'){
    /**db config **/
    define('DBNAME', 'new_mvc');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '123');

    define ('ROOT', 'http://localhost:3000/public');

}else{
     /**db config **/
    define('DBNAME', 'new_mvc');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '123');

    define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', "My website");
define('APP_DESC', "A new brand website from scratch");
// true means show errors, false means don't show error//
define('DEBUG',true);


