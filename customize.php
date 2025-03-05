<?php

/**
 * Plugin Name: SSA Customization - Change Header Email Settings
 * Plugin URI:  https://simplyscheduleappointments.com
 * Description: Change Content-Type Header Settings
 * Version:     1.0.0
 * Author:      Simply Schedule Appointments
 * Author URI:  https://simplyscheduleappointments.com
 * Donate link: https://simplyscheduleappointments.com
 * License:     GPLv3
 * Text Domain: simply-schedule-appointments
 * Domain Path: /languages
 *
 * @link    https://simplyscheduleappointments.com
 *
 * @package Simply_Schedule_Appointments
 * @version 1.0.0
 *
 */

/**
 * Copyright (c) 2025 Simply Schedule Appointments (email: support@ssaplugin.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
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

add_filter( 'ssa/notifications/email/args', 'ssa_change_content_type_email', 10, 5 );
function ssa_change_content_type_email( $args, $notification, $notification_vars, $appointment_object, $recipient_type ) {
    
    // Assign current headers to new_headers var where we'll make changes
    $new_headers = array();

    foreach ($args['headers'] as $header) {
        // Replace any 'text/plain' content-type with 'text/html'
        if (stripos($header, 'Content-Type: text/plain') !== false) {
            $header = 'Content-Type: text/html; charset=UTF-8';
        }
        $new_headers[] = $header;
    }

    // Apply modified headers back
    $args['headers'] = $new_headers;

    return $args;
}
