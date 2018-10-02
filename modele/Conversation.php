<?php
namespace modele;
/**
 * Description of Attribution
 * Une instance d'Attribution représente le fait qu'un groupe 
 * bénéficie d'une offre (un type de chambre dans un établissement)
 * pour un certain nombre de chabres
 * @author btssio
 */
class Conversation {
    /**
     * @var integer
     */
    private $id;
    /**
     * @var String 
     */
    private $texte;
    /**
     * @var integer
     */
    private $ordre;
    /**
     * @var boolean
     */
    private $couleur;    
    /**
     * @var integer
     */
    private $conversation;    
    /**
     * @var integer
     */
    private $suivante;
    
    function __construct($id, String $texte, $ordre, $couleur, $conversation, $suivante) {
        $this->id = $id;
        $this->texte = $texte;
        $this->ordre = $ordre;
        $this->couleur = $couleur;
        $this->conversation = $conversation;
        $this->suivante = $suivante;
    }

    function getId() {
        return $this->id;
    }

    function getTexte(): String {
        return $this->texte;
    }

    function getOrdre() {
        return $this->ordre;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function getConversation() {
        return $this->conversation;
    }

    function getSuivante() {
        return $this->suivante;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTexte(String $texte) {
        $this->texte = $texte;
    }

    function setOrdre($ordre) {
        $this->ordre = $ordre;
    }

    function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    function setConversation($conversation) {
        $this->conversation = $conversation;
    }

    function setSuivante($suivante) {
        $this->suivante = $suivante;
    }


}
