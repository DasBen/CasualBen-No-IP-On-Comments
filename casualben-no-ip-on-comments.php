<?php
/**
 * Plugin Name: CasualBen No IP on Comments
 * Plugin URI: https://github.com/DasBen/CasualBen-No-IP-On-Comments
 * Update URI: https://github.com/DasBen/CasualBen-No-IP-On-Comments
 * Description: Overwrites the saved IP Addresses on Comments to be compliant.
 * Text Domain: casualben-no-ip-on-comments
 * Version: 0.0.1
 * Author: Benjamin Pahl - CasualBen
 * Author URI: https://www.casual-ben.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

function  casualben_remove_ip_on_comment( $comment_author_ip ) {
    return '';
}
add_filter( 'pre_comment_user_ip', 'casualben_remove_ip_on_comment' );
