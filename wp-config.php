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
define( 'DB_NAME', 'epiz_31427396_hungwp' );

/** Username của database */
define( 'DB_USER', 'epiz_31427396' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'PQ8Tjt4ZUC' );

/** Hostname của database */
define( 'DB_HOST', '	sql203.epizy.com' );

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
define( 'AUTH_KEY',         ':/*FaT_WXAQT@2!M[LAn?jQ}-<.F4$*<kd<,`-Z9pB%P/?Psb|jMj;:wP}PyJh$*' );
define( 'SECURE_AUTH_KEY',  '+_[k`N]f9wkC=pa7wtS~-G>vnc2.<7z<r!Z}TG41W|h9,#X/u)}33l~hJ]</-[Y/' );
define( 'LOGGED_IN_KEY',    'y_(P</@|MuEU{I]{.DM eT}OXD|,KiKD5xwHJWJ]^#Ri>|$3>ngf;Rm/r^3HQ+YX' );
define( 'NONCE_KEY',        'lVG-+lu^)+FPH(.nwlc-01pVTvU]%QB30bz CI|XQfjeiD.`3O/ECP_as=m3@lC$' );
define( 'AUTH_SALT',        'hH?>D^zm_y{=!aZm}p@a}#I<F2pJK9Rs7XQJ,}Ros42e:U;;.@9HAa$h><x;<crR' );
define( 'SECURE_AUTH_SALT', 'j$%)KHwV?1p`<H]L#s{jYh9 PH3DX{3{N0eG_>:;%O%QokOHHUasW{f9~We8P}bD' );
define( 'LOGGED_IN_SALT',   'bhr=dd+:oQ3Y,y$&A77uJh-ZwM2#j!;)ZaAfv0;8W5.T*H:g--N#IGs_&Y#8Pid=' );
define( 'NONCE_SALT',       'g9Ey}QsiPIdW+aJvXFbo]I-OT<P+SCI3mRy,_S!$6;u4w&k)i;5${BzB_$t[0^r#' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
