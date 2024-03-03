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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'webfolio' );

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
define( 'AUTH_KEY',         '{=J@?!7 j3,9o=EK!;yc8+2Vb^@_h~zXt ^p%W~:.j0J=)R!olh4l8i9)#[)^/5J' );
define( 'SECURE_AUTH_KEY',  '(%~;8ESm,*-tY&12z1o@MQQ&n&03QF@acn+eY}Y^ZbzU*s,1&DQ@WeS2Ox=Yb>Vu' );
define( 'LOGGED_IN_KEY',    'E=ryaHH|#bnZ7=@y8&zecU#~*R41eYV|]zY<H9QAQV]YLPD~c*uM8mnhkc]m7j06' );
define( 'NONCE_KEY',        'cJo*+=)=8;^5DH+Nq8~]`X$j)c>zD}{ar]k]6}H*9:udlL|0L|^%fjqnV(Z.p4mR' );
define( 'AUTH_SALT',        'lWWEX1fcKd%X MzE%b<(kM7r#VX{&;<^SO/tg{pR/raW)A>0r(hM!KXb5Q`2u=TI' );
define( 'SECURE_AUTH_SALT', 'Vqn+be*P K]rJ+,&C#;lhUy6%$KQ<jb<3n_ZVu[9F6)9bz<6: B[|ci6}:O3$#li' );
define( 'LOGGED_IN_SALT',   'n$e@1+hrn Nc|+<|{C?Q$yC!0!]0YgcX|b(.rxnH40*x(8Mh=Wh>]2_*=xgiwoia' );
define( 'NONCE_SALT',       'xQ~&d>QEr4m;#Nezd6U[9_Iv*?kvrkrU+w`hUx~Y>;3EPFk1K|d,R$J-[DR@95Tp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
