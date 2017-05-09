<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cmenteco_website');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'cmenteco_website');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'oZ~+tb4Ii5{v');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YEa@6f8F6!7.lP&;`cLe5C*!NIB?wP1)UrP4Gh)Ro_6X`;CvrJQaZPXoW]v@vD),');
define('SECURE_AUTH_KEY',  'km*`se7_Y^fy1$!:A4VKdYAHuzEeq9bYHWF!9!?:pG>rTsj(Sx<j+)0}{ (l{4O{');
define('LOGGED_IN_KEY',    '2jf*SyA9Vuq94cL>@s4NskDuOv}4#9~51<98:{Mt^sP&15[hpsch}Ji@$GW&4v(D');
define('NONCE_KEY',        'bn`emLSQPc0?[}|$%UIfXZ:,UT[5kz<d`IBpp[[lv%c`&`(7aZ>K^Hvg My)(3^|');
define('AUTH_SALT',        'l,53B.k-zpJ+M/c9(BUm;jTx%]&lGantsx36iU754J&SJIm:_9#1D~Ci8$)#,L%G');
define('SECURE_AUTH_SALT', 'AzbiX^SplY%jrm0KW[^R?qje2N11TxwS$w{v2=LMOpX|qPN+u>JW*,d~tF?Wx^3`');
define('LOGGED_IN_SALT',   'A8|*(_),&Q&~qOx<u%N*:IOiU2l  P/W![5IyGyHugMp9jK%,TQ>N K~F/Bn,lV}');
define('NONCE_SALT',       'E_9NvkF)eCnS^-{X6!l8l#0?egX[cg%)VBInP9?D];wICjzXc#QU1WoSBYDrD&mP');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpress_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
