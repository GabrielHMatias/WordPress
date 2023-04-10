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
define( 'DB_NAME', 'trabalho' );

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
define( 'AUTH_KEY',         ':Pjgs?7&Q&x2_rV&-n^+%>CnaCna+oi=zG8bGjJYr2,M+*D/(3UIQ;,I/,f`mL[W' );
define( 'SECURE_AUTH_KEY',  'SV^Lm<Yt#:$TSZw| YG&_R$,6E8J.g*E~UYMn C&&2yE6Cv>6_x :AjsY}EqM!e4' );
define( 'LOGGED_IN_KEY',    'X:,E8CR1JLTLAfb9t! ATskus(9Ue(o,<u(/p7,B+6{-ozPk{vzu]8`.uaS%{F7;' );
define( 'NONCE_KEY',        'h_lXIyT#$P0t,H9xg?3!M0~bju5t-My3Dw]bLPY?//V91aY`~Q(H1^F.^`aw_#QZ' );
define( 'AUTH_SALT',        ' wB7Z?ZMNQ`r7eYTjsK,9z<~Xbe4Kt[E-[^i1dV>k[g6z(?t;RUIr&@xZt- .~g&' );
define( 'SECURE_AUTH_SALT', '*PvU(Qkrm13D{p.0XZ^O]/_:&}=oU-OBU-F8;ZZ)rxZibUQP:XE9bWI}jKljlyL&' );
define( 'LOGGED_IN_SALT',   'nqw_##6u[(C}?wIVX`{vZ[+elRS8g`ZMr6=_g-HWla8ka@!Hw.Wy<AOEu,N Y09Z' );
define( 'NONCE_SALT',       'zIfPJ/4|4ak?G%^I#24}`W:o9G&AG^U^^<l9Fs-`:7mcSu.r6G-5Knw6]:$9Lerf' );

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
