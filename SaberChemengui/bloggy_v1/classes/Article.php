<?php
include("Mysql.php");
class Article extends Mysql 
{
	// Attributs de la classe
	private $_id;
	private $_titre;
	private $_texte;
	private $_d_ajout;


	// Méthode magique pour les setters & getters
	public function __get($property) {
		if (property_exists($this, $property)) {
                return htmlentities( $this->$property );
            }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {

            	$this->$property = $value;
        }
    }


	// Autres méthodes
	public function ajouter()
	{
	    try {
	    if (!isset($this->_titre) || 
	    	!isset($this->_texte)
	    	)
	    	return false;
	    $q = "INSERT INTO article(id,titre, texte,d_ajout) 
	    	  VALUES (NULL ,:titre,:texte,NOW())";
		$stmt = $this->get_cnx()->prepare($q);

		
		$stmt->bindParam(':titre', $this->_titre);
		$stmt->bindParam(':texte', $this->_texte);

		$stmt->execute();

		return $this->get_cnx()->lastInsertId();
		} catch (PDOException $e) {
		    exit("<pre>Erreur de connexion à la BdD : " . $e->getMessage() . "<br/>");
		}

	}
	
	public function supprimer()
	{
		$q = "DELETE FROM article WHERE id = :id";
		$stmt = $this->get_cnx()->prepare($q);
		$stmt->bindParam(':id', $this->_id);
		return ($stmt->execute() == true);
	}

	public function liste()
	{
		$q = "SELECT * FROM article ORDER BY d_ajout DESC";
		$liste = array(); // Tableau VIDE
		$res = $this->get_cnx()->query($q);
		foreach ($res as $row)
		{
			$c = new Article();

			$c->_id 	 = $row['id'];
			$c->_titre 	 = $row['titre'];
			$c->_texte 	 = $row['texte'];
			$c->_d_ajout = $row['d_ajout'];
		
			$liste[]=$c;
		}
		
		return $liste; // Renvoi un tableau d'objets
	}
	function getArticle($id)
	{
		$q = "SELECT * FROM article WHERE id=$id";
		$res = $this->get_cnx()->query($q);
		foreach ($res as $row)
		{
			$this->_id 	 = $row['id'];
			$this->_titre 	 = $row['titre'];
			$this->_texte 	 = $row['texte'];
			$this->_d_ajout = $row['d_ajout'];
		}
	}


}