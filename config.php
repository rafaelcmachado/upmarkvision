<?php

/** O nome do banco de dados*/
define('DB_NAME', 'Y');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'Y');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'U');

/** nome do host do MySQL */
define('DB_HOST', 'u.com.br');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
