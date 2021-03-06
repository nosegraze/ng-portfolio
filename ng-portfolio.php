<?php
/*
 * Plugin Name: NG Portfolio
 * Plugin URI: https://www.nosegraze.com
 * Description: Custom portfolio.
 * Version: 0.9
 * Author: Nose Graze
 * Author URI: https://www.nosegraze.com
 * License: GPL2
 * 
 * @package ng-portfolio
 * @copyright Copyright (c) 2016, Nose Graze Ltd.
 * @license GPL2+
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Define constants.
 */
if ( ! defined( 'NG_PORTFOLIO_VERSION' ) ) {
	define( 'NG_PORTFOLIO_VERSION', '0.9' );
}

if ( ! defined( 'NG_PORTFOLIO_URL' ) ) {
	define( 'NG_PORTFOLIO_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'NG_PORTFOLIO_FILE' ) ) {
	define( 'NG_PORTFOLIO_FILE', __FILE__ );
}

/**
 * Include required files.
 */
include plugin_dir_path( __FILE__ ) . '/includes/install.php';
include plugin_dir_path( __FILE__ ) . '/includes/aq_resizer.php';
include plugin_dir_path( __FILE__ ) . '/includes/assets.php';
include plugin_dir_path( __FILE__ ) . '/includes/functions.php';
include plugin_dir_path( __FILE__ ) . '/includes/shortcodes.php';
include plugin_dir_path( __FILE__ ) . '/includes/post-type.php';
include plugin_dir_path( __FILE__ ) . '/includes/admin/assets.php';
include plugin_dir_path( __FILE__ ) . '/includes/admin/meta-box.php';