<?php
/**
 * @package           Carrousel
 * @author            Pierre-Luc Moisan
 * @copyright         Collège de Maisonneuve
 * @license           GPL-2.0-or-later
 * 
 * Plugin Name: plm_carrousel
 * Description: Permet d'afficher une boîte modale de l'image sélectionnée d'une galerie. Pour ensuite accéder à toutes les autres images de la galerie.
 * Author: Pierre-Luc Moisan
 * Author URI: https://github.com/plm333
 */

function genere_html(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
    "<div class='boite'>"
    . "<code>-------Auteur: " . get_the_author() . "</code>"
    . "<date>-------Date de publication: " . get_the_date() . "</date>"
    . "<code>--------Adresse URL" . get_the_guid() . "</code>"
    . '</div> <!-- fin class="boite" -->';
    
    return $contenu;
   }
   add_shortcode('plm_carrousel', 'genere_html');




?>


