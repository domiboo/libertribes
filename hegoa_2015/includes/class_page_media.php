<?php
// ======================================================================
// Auteur : Donatien CELIA
// Licence : CeCILL v2
// ======================================================================

error_reporting(E_ALL);

require "class_page.php";                                              // - On inclut la class Page

class PageMedia extends Page
{
    function __construct()
    {
      // - on appele le constructeur du parent
      parent::__construct();

      // - on renseigne qq infos du parent
      parent::SetNomPage( "media","Media");
      //parent::SetFonctionBodyOnLoad("javascript:preloadThumbnails()");
      parent::SetAffichageHeader( -1 );
      parent::SetAffichageFooter( 0 );

      $this->AjouterCSS("page_media.css");
      $this->AjouterCSS("lightbox.css");

      // - on ajoute les contenus utiles
      $this->AjouterContenu("contenu", "contenus/page_media.php");

      // - on ajoute les menus utiles

    }

    // - Affichage de la page
    public function Afficher()
    {
      parent::Afficher();
    }// - Fin de la fonction Afficher

}// - Fin de la classe

?>