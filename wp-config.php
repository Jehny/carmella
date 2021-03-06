<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'carmella');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eKV1D9$Z@WsvjIaN~nLn|8uyV3-1RW}{3No>!v~p_+7Orh_# :$LIQ!w*6*J]u4N');
define('SECURE_AUTH_KEY',  'wygG sL_S2T*>Uh5CInO1IQxUaI;:LebT]7P4KR$p5qGbE8_ =o}!R$$``KsH*+G');
define('LOGGED_IN_KEY',    '@Q`VaqLfSqlXqna*bl`:=l^PP+)IIxEWnygu!QGE{K0(@Hle49$,<YWLOH!eBCfB');
define('NONCE_KEY',        'GJWbmY_EqbQF`<//0l7b6R4b?#B%1VD`XB]mQbkpnE8S,2[*)Dl-,o`*ZK|b.aZi');
define('AUTH_SALT',        'WlUKq8+AAgEUvf]n`BP8sGJWOlj.E_~!K$k-Nrp-f8N50g}Qsor{Wji9gb(BWRC[');
define('SECURE_AUTH_SALT', ')z8D2?E?WAJWX{R@,C#CRyNQ%KT82wr>chEI^j}SgOIO<^LJpzdU,c6vXHN2eI8@');
define('LOGGED_IN_SALT',   '$`w!&mk /? z1fFnd7Lw?!]RT5j*rHc,q5~2WH8Gv%;3 eMkfFS0huvo%gL~9*/u');
define('NONCE_SALT',       'O51}Jnyzv^;j2zA^fy {]r/DJ#pn-/k,GaFhxY|vek[s9E5[-PiW6E)HEbM2wvjW');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
