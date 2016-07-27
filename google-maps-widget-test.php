<?php
/*
* Plugin Name: Google Maps Widget Test
* Description: Display Google Maps With Your Current Location on Website
* Version: 1.0
* Author: Danyal Imran
* Author URI: http://facebook.com/fuNkyBRO1
* License: GPLv2
*/

    /* 
    LICENCE TERMS!
    
    Copyright 2016 Danyal Imran (email : k132089@nu.edu.pk)
    
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
    */
    
    // Creating a Deprecated Widget
    add_action('widgets_init', 'google_maps_register_widget');

    function google_maps_register_widget() {
        register_widget('gm_widget');
    }

    class gm_widget extends WP_Widget {
        function __construct() {
            $widgets_ops = array(
                'classname' => 'gm-widget-class',
                'description' => 'Display Google Maps'
            );
            
            parent::__construct('gm-widget', 'Google Maps Widget', $widgets_ops);
        }
        
        function form($instance) {
            $defaults = array(
                'title' => 'Google Maps',
                'lat' => '24.832249',
                'lng' => '67.081113'
            );
            
            $instance = wp_parse_args((array)$instance, $defaults);
            
            $title = $instance['title'];
            $lat = $instance['lat'];
            $lng = $instance['lng']; ?>
            
            <p>Title: <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

            <p>Latitute: <input name="<?php echo $this->get_field_name('lat'); ?>" type="text" value="<?php echo esc_attr($lat); ?>" size="9" maxlength="9" /></p>

            <p>Longitude: <input name="<?php echo $this->get_field_name('lng'); ?>" type="text" value="<?php echo esc_attr($lng); ?>" size="9" maxlength="9" /></p>
            <?php
        }
        
        function update($new_instance, $old_instance) {
            $instance = $old_instance;
            $instance['title'] = sanitize_text_field($new_instance['title']);
            $instance['lat'] = sanitize_text_field($new_instance['lat']);
            $instance['lng'] = sanitize_text_field($new_instance['lng']);
            
            return $instance;
        }
        
        function widget($args, $instance) {
            global $post;
            extract($args);
            echo $before_widget;
            ?>

            <style type="text/css">
                #map-canvas {
                    width: 100%;
                    height: 300px;
                }
            </style>
            
            <h3><?php echo $instance['title']; ?></h3> <br/>

            <div id='map-canvas'> </div>

            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&signed_in=true&key=INSERT_KEY_HERE"></script>

            <script type="text/javascript">
                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    center: new google.maps.LatLng(<?php echo $instance['lat']; ?>, <?php echo $instance['lng']; ?>),
                    zoom: 12
                });
                
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $instance['lat']; ?>, <?php echo $instance['lng']; ?>),
                    map: map
                });
            </script>



            <?php
            echo $after_widget;
        }
    }

?>