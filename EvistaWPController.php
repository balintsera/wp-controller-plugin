<?php
namespace Evista\Controller;

include_once('vendor/autoload.php');


/*
  Plugin Name: Evista Controller Plugin
  Plugin URI:
  Description: Object Oriented controller plugin for WordPress
  Version: 1.0
  Author: Balint Sera
  Author URI: http://evista-agency.com
  */


class EvistaWPController{
    public function __construct(){
        // Inicializations goes here
    }

    /**
     * Example method: just a controller like gluing interface
     */
    public function example(){

    }

}

$evistaFormAPI = new EvistaFormAPI();
?>