<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'casamia' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';Aw~rJZP1ci6DaG|S6RC/s6in<[ Qe+#6IvsZG1IufTpm?Ij`Jh%^.r},yt&sE#<' );
define( 'SECURE_AUTH_KEY',  '[Op048O;z^n]ux^i&h2f-w69BLu{&V[Sqq.Gi8t`@9YXE`.o`}P)!@b/u 0*o&G]' );
define( 'LOGGED_IN_KEY',    '/twNM12,o*4@&l-otk?2>eC(,gT];izJa,[8m4gUR.p?@{cIzhW+L&`{-oH{J(lm' );
define( 'NONCE_KEY',        'o5Vl32H(?lX:xOFUo@T$(3DvGkKnu_x+odDFg,uLHBPWz0Q#xHM|60:)%/!w_k6V' );
define( 'AUTH_SALT',        '2p!@s!`KOdh]d[^NG_;}zw`QpIBpEsLY#L]C4i.hIG#8uJR`a4^-uQu%DJ=ak^Ig' );
define( 'SECURE_AUTH_SALT', 'a5E0L1V/3vH-m9Ky6iZUHpw<LIKbBj1GyN@;/v)|zE~Yx4Uo%okF#LxisE*_km>(' );
define( 'LOGGED_IN_SALT',   '({fbsjfcFl(*17^frBwl19s~nV@BLH5/U&w`@z@ q{B3`y)s;Q2rMIq|ol({9{4d' );
define( 'NONCE_SALT',       'ZBC Io}SORv~X ;*nYwjjkk5%Yz).sMG$Hy40S,4whrYNN#[|DW}D)/]su+6(-DS' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
