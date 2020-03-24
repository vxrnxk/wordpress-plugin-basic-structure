<?php
/*
    Plugin name: Basic Plugin
    Plugin uri: http://basicpluginwordpress.com
    Description: Basic structure for a new WordPress plugin.
    Version: 1.0
    Author: Francisco V
    Author uri: https://github.com/vxrnxk
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html
    Tags: basic, plugin, wordpress
    Text Domain: basicplugin
    This plugin, like WordPress, is licensed under the GPL.
    Use it to make something cool, have fun, and share what you've learned with others.
*/

function method($post) {
    $msg = "Everything OK.";
    $resultado = "<h1>{$msg}</h1>";
    $resultado .= $post;

    return $resultado;
}

add_filter('the_content', 'method');
