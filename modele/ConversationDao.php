<?php
namespace modele;
use modele\Conversation;
use PDOStatement;
use PDO;
/**
 * Description of EtablissementDAO
 * Classe métier : Etablissement
 * @author prof
 * @version 2017
 */
class ConversationDAO {
     /**
     * Instancier un objet de la classe Etablissement à partir d'un enregistrement de la table ETABLISSEMENT
     * @param array $enreg
     * @return Etablissement
     */
     protected static function enregVersMetier(array $enreg) {
        $id = $enreg[0];
        $texte = $enreg[1];
        $ordre = $enreg[2];
        $couleur = $enreg[3];
        $conversation = $enreg[4];
        $suivante = $enreg[5];
        $uneConversation = new Conversation($id, $texte, $ordre, $couleur, $conversation, $suivante);
        return $uneConversation;
    }
    
    /**
     * Retourne la liste de tous les Etablissements
     * @return array tableau d'objets de type Etablissement
     */
    public static function getAll() {
        $lesObjets = array();
        $requete = "SELECT * FROM Conversation";
        $stmt = Bdd::getPdo()->prepare($requete);
        $ok = $stmt->execute();
        if ($ok) {
            // Pour chaque enregisterement
            while ($enreg = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // instancier un Etablissement et l'ajouter au tableau
                $lesObjets[] = self::enregVersMetier($enreg);
            }
        }
        return $lesObjets;
    }
   /**
     * Recherche un établissement selon la valeur de son identifiant
     * @param string $id
     * @return Etablissement l'établissement trouvé ; null sinon
     */
     public static function getOneById($conversation) {
        $objetConstruit = null;
        $requete = "SELECT * FROM Conversation WHERE conversation = :conversation";
        $stmt = Bdd::getPdo()->prepare($requete);
        $stmt->bindParam(':conversation', $conversation);
        $ok = $stmt->execute();
        // attention, $ok = true pour un select ne retournant aucune ligne
        if ($ok && $stmt->rowCount() > 0) {
            $objetConstruit = self::enregVersMetier($stmt->fetch(PDO::FETCH_ASSOC));
        }
        return $objetConstruit;
    }

}