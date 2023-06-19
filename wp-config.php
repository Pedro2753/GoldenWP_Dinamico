<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'golden_key' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lzcxC q](hl!}crn| 0F!ekJ:%&R(5PO:Bdn1jBmW)qfRfq<H8E|Nz%nS;D1z,2?' );
define( 'SECURE_AUTH_KEY',  '}9RdYP8G#W)HB|^7e@+G-ln^iVRi;DvoTtoT(x1.IgHLwO}S[yn.KAEjbaXrNiyb' );
define( 'LOGGED_IN_KEY',    'MPn*GIO5*9` !y.-10u1ZKMZ!o)5wMBQ33&J?^xj[hNkgX;,EuvETm1x-.N*OCNV' );
define( 'NONCE_KEY',        'J!G~vS72aB+pnj/(X.<uchO#3te~06lixPAO<zRw%2LIk1oM^I*+qgn94NZ>h_RD' );
define( 'AUTH_SALT',        'H@z]fJb4bvxfO%|qe1+*g52Pt]!.5Q+ULQa;PL.m0*a*>3^-Kc,Z(t)r;XO5Ge5Y' );
define( 'SECURE_AUTH_SALT', ')eoVtm{eqSQp#,m,tdEPhqALX+p_aOZt.}R+h?#5z{r|55?IFS>S>;`c PQz->TH' );
define( 'LOGGED_IN_SALT',   ' F 6z^_XBs|8?-:HHyG32>BgDbE!1X!rjG{4s>irD|(PNmT#? 5b0B4%fbsNJkvL' );
define( 'NONCE_SALT',       'GaHsAmpk$?zm[PGUP^mbpT|(8*dSYYep_:1QC+MjjH)[b^@q|o!no<O/~qk)bXF#' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
