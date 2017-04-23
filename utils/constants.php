<?php

define('VIEWS', '../views');
/* ##### PRODUCCION ###### */
/*define('DOMAIN_ES', 'www.sunyogamoon.devel.es');
define('DOMAIN_EN', 'www.sunyogamoon.devel.com');
define('DOMAIN', $_SERVER['HTTP_HOST']);*/
/* ##### PRODUCCION ###### */

/* ##### DEVELOPMENT ###### */
if ($_SERVER['HTTP_HOST'] == "192.168.1.101"){
        define('DOMAIN_ES', '192.168.1.101/sunyogamoon.devel.es/');
        define('DOMAIN_EN', '192.168.1.101/sunyogamoon.devel.com/');
        define('DOMAIN', $_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"]);
}
else{
        define('DOMAIN_ES', 'www.sunyogamoon.devel.es');
        define('DOMAIN_EN', 'www.sunyogamoon.devel.com');
        define('DOMAIN', $_SERVER['HTTP_HOST']);
}
/* ##### DEVELOPMENT ###### */
?>
