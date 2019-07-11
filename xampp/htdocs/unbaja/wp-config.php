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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'unbaja' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '(YysYZ:Q3IdT0F/DpB~]Pnbl[S>#iR$$b45}I$Qs1V#3e-Q.O;Kw0Y!0.sJm&N!}' );
define( 'SECURE_AUTH_KEY',  'FB:L3o>Zqb>`Vo,<f?vU&J/x#D&yY3oL&tBqhkoyJR?3x=.SNoh~FXJJN}/TOZCU' );
define( 'LOGGED_IN_KEY',    '1$[CgSd02BM+aXE*_c:^C}DmaW>}+Fp<&uU,5@Dn.l;,BR[ Ad+)6,[%4{(oTyX*' );
define( 'NONCE_KEY',        'x!&a|b;Q!O7]=PrFvTntDFu5al9F.8z*j?BMk[#)H8aF2@:}~58(3&L@h5YDJr n' );
define( 'AUTH_SALT',        '.->[:L<-tZP`5]M~KRVlMVV>DhEw8nvwM=2$:R[SZrjQ~_q{/0mrGj^m~MWj1:C{' );
define( 'SECURE_AUTH_SALT', '1?rBEGp|gbbbJWqKWZIg&1c6Vr9|):>Yq#-T$aL?xL4{)HQVT m,F}SEa(!h+u_:' );
define( 'LOGGED_IN_SALT',   '@)|%NA3<<<iEWMjP4o!l4bArW0z6GAoNV#-):xt83lP,L=`aJ+:Ih}t&HP.Y%a^#' );
define( 'NONCE_SALT',       'gyeVO<{`mL^o#TtyJ//sX]* JO3 =+l0_@r<Q6_@ot/@HH|X}z,XIPTw>-J6`VNo' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'st_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
