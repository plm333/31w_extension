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
    "<setion class='carrousel'>"
    . '<button class="carrousel--fermer">X</button>'
    . '<figure class="carrousel__figure"></figure>'
    . '<form class="carrousel__form"></form>'
    . '</section> <!-- fin class="carrousel" -->';
    
    return $contenu;
   }
   add_shortcode('plm_carrousel', 'boite_carrousel');




?>


