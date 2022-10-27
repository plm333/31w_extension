<?php
/**
 * @package           Carrousel
 * @author            Pierre-Luc Moisan
 * @copyright         Collèege de Maisonneuve
 * @license           GPL-2.0-or-later
 * 
 * plugin Name: em_carrousel
 * Description: Permet d'afficher une boîte modale de l'image sélectionnée d'une galerie. Pour ensuite accéder à toutes les images de la galerie
 * Author: Eddy Martin
 * Author URI: https://github.com/plm333
 */
 
 /*
filemtime() // retourne en milliseconde le temps de la dernière sauvegarde
plugin_dir_path() // retourne le chemin du répertoire du plugin
__FILE__ // le fichier en train de s'exécuter
wp_enqueue_style() // Intègre le link:css dans la page
wp_enqueue_script() // intègre le script dans la page
wp_enqueue_scripts // le hook
*/


 
function em_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js =  filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");
 
wp_enqueue_style('em_carrousel_css',
                plugin_dir_url(__FILE__) . "style.css",
                array(),
                $version_css,
                false);
 
wp_enqueue_script('em_carrousel_js',
                plugin_dir_url(__FILE__) . "js/carrousel.js",
                array(),
                $version_js,
                true);                
}
 
add_action("wp_enqueue_scripts","em_enqueue");


 
function boite_carrousel(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
    "<button class='bouton'>Ouvrir carrousel</button>"
     ."<div class='carrousel'>"
        .'<button class="carrousel__x">X<button>'
        .'<figure class="carrousel__figure"></figure>'
        .'<form class="carrousel__form"></form>'
    . '</div> <!-- fin class="carrousel" -->';
    
    return $contenu;
   }
 
   add_shortcode('plm_carrousel', 'boite_carrousel');