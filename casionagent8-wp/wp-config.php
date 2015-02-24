<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
//define('DB_NAME', 'reeegma46276com24020_');
define('DB_NAME', 'casinoagent8');

/** MySQL データベースのユーザー名 */
//define('DB_USER', 'casinoagent8');
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
//define('DB_PASSWORD', 'casino3150');
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3l|~l)q5ejLmO;=pcpg&Mg9(,THp^Lic)LOw{d4Q?A6G}._A=~k?4d2u xVM11|y');
define('SECURE_AUTH_KEY',  'C| c^88p~(!Y6$UpmLzWfk2i,>~Y^/*i|iz-F4}0^LChWs(8fT7@jI+<95yF!D!}');
define('LOGGED_IN_KEY',    'rD<$[hx?F,`j&9M!i?z:^+P1|7&o{PzW9eQ:N8L}aaOTz=40/Txt]-!Vhg|4g3Ww');
define('NONCE_KEY',        'DgL8+`/#Wv.oOaRj#8]*|/wn1q.2l:%C8.rX@V[<3?>KY[DP;%thldw/qB9iA=!$');
define('AUTH_SALT',        '/_LB_fpy26dqDkBrb$.DsVph`qnB|c#HOkpSa9I]g95e(Aj_yLiyzYo7`|LT8L]m');
define('SECURE_AUTH_SALT', 'R*<#?,NC3mbL.3do 3E6sXoihA*JQ@b;&LgC9XGf`L9i,lWK$$iLL+5,S``&2mYw');
define('LOGGED_IN_SALT',   '%i5%UYjC+#~fcZ[t&]3/A-|e9Lxj^J=1k+:mC5h@ cN}%l#m[aDD&,.:h^|kXv:,');
define('NONCE_SALT',       '}^[-`Qa^Tc*}a:Nhe>rZ 9)TJ%}K-v>J@G6^b8oKLtyth3FW}U.bO)FsPj*iq6.9');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
