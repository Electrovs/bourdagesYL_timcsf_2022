/**
 * @file Un menu simple, responsive bâti en amélioration progressive.
 * @author @evefevrier <eve.fevrier@cegep-ste-foy.qc.ca>
 * @version 1.2.3
 *
 */

//*******************
// Déclaration d'objet(s)
//*******************

var menu = {
  //propriété conservant les libellés du bouton
  lblMenuFerme: 'Menu',
  lblMenuOuvert: 'X',
  //propriété conservant la référence de la balise nav
  refMenu: $("#principal"),

  configurerNav: function ()
  {
    //si le javascript et activé, la classe js est placée dans le body
    $("body").addClass("js");

    //injection de la classe menu dans la balise nav
    this.refMenu.attr("class","menu menu--ferme");

    //injection des classes de la liste des liens
    this.refMenu.find("ul").addClass("menu__liste");
    this.refMenu.find("li").addClass("menu__listeItem");
    this.refMenu.find("a").addClass("menu__lien");

    //Création du bouton du menu mobile
    this.refMenu.prepend('<button class="menu__controle"><span class="menu__libelle" >'+this.lblMenuOuvert+'</span></button>');
    //Afficher l'état fermer du libellé
    $(".menu__libelle").html(this.lblMenuFerme);
    //Ajout de l'écouteur d'événement sur le bouton du menu
    $(".menu__controle").on("click",this.ouvrirFermerNav.bind(this));
  },

  ouvrirFermerNav: function ()
  {
    // On bascule la classe de fermeture du menu
    this.refMenu.toggleClass("menu--ferme");

    // On change le libellé du bouton selon l'état du menu
    if(this.refMenu.hasClass("menu--ferme")){
      $(".menu__libelle").html(this.lblMenuFerme);
    }else{
      $(".menu__libelle").html(this.lblMenuOuvert);
    }
  }
};
//*******************
// Écouteurs d'événements
//*******************
$(document).ready(menu.configurerNav.bind(menu));