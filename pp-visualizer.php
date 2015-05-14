<?php 
/*
Plugin Name: Paint Protection Visualizer
Plugin URI: http://taglinegroup.com
Description: Add short code [pp-visualizer] to the page you want the app to appear.
Author: Tharon Carlson 
License: GPL2

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('wp_enqueue_scripts', 'ppv_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'ppv_scripts'); // Add Theme Stylesheet

function ppv_styles() {
    wp_register_style('pp-styles', plugins_url('/css/pp-style.css', __FILE__ ), array(), '1.0', 'all');
    wp_enqueue_style('pp-styles'); // Enqueue it!
}

function ppv_scripts() {
    wp_enqueue_script('pp-scripts', plugins_url('/js/pp-scripts.js', __FILE__ ), array('jquery'), '1.0', true); // Enqueue it!
}

add_shortcode ('pp-visualizer', 'pp_visualizer');

function pp_visualizer($args) {
   
return '
    <div id="pp-app">
        <h1 class="title-1">Paint Protection Film</h1>
        <div class="clear clearfix" >
        <div id="vehicle">
            <img src="'.plugins_url("pp-visualizer/img/vehicle.jpg").'" alt="" />
            <img class="highlight door" src="'.plugins_url("pp-visualizer").'/img/highlight-door.png" alt="" />
            <img class="highlight partial-fender" src="'.plugins_url("pp-visualizer").'/img/highlight-partial-fender.png" alt="" />
            <img class="highlight fenders" src="'.plugins_url("pp-visualizer").'/img/highlight-fenders.png" alt="" />
            <img class="highlight bumper" src="'.plugins_url("pp-visualizer").'/img/highlight-front-bumper.png" alt="" />
            <img class="highlight partial-hood" src="'.plugins_url("pp-visualizer").'/img/highlight-partial-hood.png" alt="" />
            <img class="highlight hood" src="'.plugins_url("pp-visualizer").'/img/highlight-hood.png" alt="" />
            <img class="highlight panels" src="'.plugins_url("pp-visualizer").'/img/highlight-rocker.png" alt="" />
            <img class="highlight mirrors" src="'.plugins_url("pp-visualizer").'/img/highlight-mirrors.png" alt="" />
            <div id="badge">
                <img src="'.plugins_url("pp-visualizer").'/img/film-badge.png" alt="" />
            </div>
        </div>
        <div id="menu">
        <h3 class="title-3">Click to See Coverage</h3>
            <ul>
                <li class="ppv-button menu-1"><a href="#" data-film="bumper">Front Bumper</a></li>
                <li class="ppv-button menu-2"><a href="#" data-film="hood">Full Hood</a></li>
                <li class="ppv-button menu-3"><a href="#" data-film="partial-hood">Partial Hood</a></li>
                <li class="ppv-button menu-4"><a href="#" data-film="panels">Rocker Panels</a></li>
                <li class="ppv-button menu-5"><a href="#" data-film="mirrors">Side-View Mirrors</a></li>
                <li class="ppv-button menu-6"><a href="#" data-film="fenders">Full Fenders</a></li>
                <li class="ppv-button menu-7"><a href="#" data-film="partial-fender">Partial Fenders</a></li>
                <li class="ppv-button menu-8"><a href="#" data-film="door">Door Edges, Handles &amp; Steps</a></li>
                <li class="menu-9"><a class="button-all show-all" href="#" data-film="all">Show All</a></li>
            </ul>
            <h4 class="disclaimer">*Areas in red indicate film coverage.</h4>
        </div> 
        </div>
    </div>
'
;}
  

?>