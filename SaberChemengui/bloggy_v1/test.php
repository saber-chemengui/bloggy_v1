public function statistique()
	{
	 $a1 = new Article();
	 $q = "SELECT * FROM article ORDER BY date_ajout DESC";
	 $q->execute();
	// $res = $this->get_cnx()->query($q);
     $count =$q->rowCount();
     return $count;