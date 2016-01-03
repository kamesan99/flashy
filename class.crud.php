<?php error_reporting(E_ALL); ini_set('display_errors', 1);

class crud
{
	private $conn;
	public $db;
	public $number;
	public $front;
	public $back;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->conn = $db;
    }
	
	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM tbl_users WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($english, $spanish)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE tbl_en_es SET english=:english, 
		                                               spanish=:spanish, 
													WHERE id=:id ");
			$stmt->bindparam(":english",$english);
			$stmt->bindparam(":spanish",$spanish);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM tbl_en_es WHERE id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}


	//Front Flashscard
	public function viewFront($nr)
	{

	$this->number = $nr;

	$query = "SELECT english, spanish, id FROM tbl_en_es WHERE id=$nr LIMIT 1";

	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":english",$english);
	$stmt->bindparam(":spanish",$spanish);
	$stmt->bindparam(":id",$nr);
	$stmt->execute();

	  if($stmt->rowCount()>0)
	  {
	   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	   {
	    ?>
	                <tr>
	                <td><?php print($row['spanish']);?></td>
	                </tr>
	                <?php
	   }
	  }
	  else
	  {
	   ?>
	            <tr>
	            <td>No more flascards.</td>
	            </tr>
	            <?php
	  }


		}	
	//Back Flashscard end

	//Back Flashscard
	public function viewBack($nr)
	{

	$this->number = $nr;

	$query = "SELECT english, spanish, id FROM tbl_en_es WHERE id=$nr LIMIT 1";

	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":english",$english);
	$stmt->bindparam(":spanish",$spanish);
	$stmt->bindparam(":id",$nr);
	$stmt->execute();

	  if($stmt->rowCount()>0)
	  {
	   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	   {
	    ?>
	                <tr>
	                <td><?php print($row['spanish']);?></td>
	                </tr>
	                <?php
	   }
	  }
	  else
	  {
	   ?>
	            <tr>
	            <td>No more flascards.</td>
	            </tr>
	            <?php
	  }


		}	
	//Back Flashscard end

	//Count Flashcards for a specific initialized deck
	public function countCards($c)
	{

	$query = "SELECT front, back, card_id FROM tbl_cards WHERE deck_id=:c";

	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":c",$c);
	$stmt->execute();

	$total = $stmt->rowCount();

	return $total;

		}	
	//Back Flashscard end

}

//Back Flashscard end
class FlashCard
{

	private $conn;
	public $db;
	public $number;
	public $front;
	public $back;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->conn = $db;
    }

    //Show all Categories
    public function showTopics()
    {

		$query = "SELECT topic_id, topic_name FROM tbl_topics";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		   {
		    
		   echo "<option value='" . $row['topic_id'] . "'>" . $row['topic_name'] . "</option>";

		   $topic = $row['topic_id'];
		   }

	}

    //Create a new Flashcard deck

	public function create($front, $back, $userId, $topic_id, $title, $description)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO tbl_decks(deck_name, description, topic_id, user_id) VALUES(:deck_name, :description, :topic_id, :user_id)");
			$stmt->bindparam(":deck_name",$title);
			$stmt->bindparam(":description",$description);
			$stmt->bindparam(":topic_id",$topic_id);
			$stmt->bindparam(":user_id",$userId);
			$stmt->execute();
			$id = $this->conn->lastInsertId();

			$stmt = $this->conn->prepare("INSERT INTO tbl_cards(front, back, user_id, deck_id) VALUES(:front, :back, :user_id, :deck_id)");
			$stmt->bindparam(":front",$front);
			$stmt->bindparam(":back",$back);
			$stmt->bindparam(":user_id",$userId);
			$stmt->bindparam(":deck_id",$id);
			$stmt->execute();

			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
		
	}

   	//Count Flashcards specific deck
	public function countCards($c)
	{
	$query = "SELECT front, back, card_id FROM tbl_cards WHERE deck_id=:c";
	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":c",$c);
	$stmt->execute();
	$total = $stmt->rowCount();
	return $total;
	}	

	//Count Flashcards overall
	public function countCardsTotal()
	{
	$query = "SELECT front, back, card_id FROM tbl_cards";
	$stmt = $this->conn->prepare($query);
	$stmt->execute();
	$total = $stmt->rowCount();
	return $total;
	}	

	//Show all Decks
    public function showDecks($s)
    {

		$query =

		"SELECT deck_name, topic_name, description, userName, deck_id
		FROM tbl_decks
		Left JOIN tbl_topics
		ON tbl_decks.topic_id = tbl_topics.topic_id
		LEFT JOIN tbl_users
		ON tbl_users.UserID = tbl_decks.user_id
		WHERE tbl_topics.topic_name LIKE :s
		OR tbl_decks.description LIKE :s";

		$stmt = $this->conn->prepare($query);
		$queryString = '%' . $s . '%';
		$stmt->bindParam('s', $queryString, PDO::PARAM_STR);
		$stmt->execute();

		if($stmt->rowCount()>0)
		  {
		   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		   {
		    ?>

		    						<div class="col-sm-4 col-xs-6">
										<div class="rst-product-box">
											<div class="rst-box-image">
												<img src="http://placehold.it/200x100" alt="" />
												<div class="rst-box-overlay ">
													<a class="btn btn-primary" href="#">Practice flashcards</a>
													<a class="btn btn-success" href="#">Test flashcards</a>
												</div>
											</div>
											<div class="rst-box-data">
												<h4><a href="detail.php?c=<?php print $row['deck_id']; ?>"><?php print($row['deck_name']); ?></a></h4>
												<p class="userCard">by <?php print($row['userName']); ?></p>
												<p class="userNrOfCards"><?php print $this->countCards($row['deck_id']); ?></p>
												<div class="rst-box-metadata">
													<p>User: <?php print($row['userName']); ?></p>
													<p>Topic: <?php print($row['topic_name']); ?></p>
													<p><?php print $this->countCards($row['deck_id']); ?> Flashcards</p>
													<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>



		                <?php
		   }
		  }
		  else
		  {
		   ?>
		            <tr>
		            <td>No results.</td>
		            </tr>
		            <?php
		  }


	}

	//Front Flashscard
	public function viewFront($CardNr, $total, $deckId)
	{

	$starting_position = $CardNr-1;

	$query = "SELECT front, back, card_id, deck_id, user_id FROM tbl_cards WHERE deck_id=:id LIMIT $starting_position,1";
	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":id",$deckId);
	$stmt->execute();

	  if($stmt->rowCount()>0)
	  {
	   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	   {
	   ?>
	                <tr>
	                <td><?php print($row['front']);?></td>
	                </tr>
	                <?php
	   }
	  }
	  else
	  {
	   ?>
	            <tr>
	            <td>No more flascards.</td>
	            </tr>
	            <?php
	  }


		}	
	//Front Flashscard end


	//Front Flashscard
	public function viewBack($CardNr, $total, $deckId)
	{

	$starting_position = $CardNr-1;

	$query = "SELECT front, back, card_id, deck_id, user_id FROM tbl_cards WHERE deck_id=:id LIMIT $starting_position,1";
	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":id",$deckId);
	$stmt->execute();

	  if($stmt->rowCount()>0)
	  {
	   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	   {
	   ?>
	                <tr>
	                <td><?php print($row['back']);?></td>
	                </tr>
	                <?php
	   }
	  }
	  else
	  {
	   ?>
	            <tr>
	            <td>The End!</td>
	            </tr>
	            <?php
	  }


		}	
	//Front Flashscard end

	//Show Navigation
	public function fcNavigation()
	{

	$total = "100";

	$query = "SELECT card_id, deck_id, user_id FROM tbl_cards WHERE deck_id=:nr LIMIT 1";

	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":nr",$nr);
	$stmt->execute();

	if($stmt->rowCount()>0 && $stmt->rowCount()<=$total)
	  {
	   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	   {
	   				echo $count; 
					echo " of "; 
					echo $total
	    			?>
	                <div class="progress progress-success progress-striped">
					<div class="bar" style="width:<?php echo $percentage;?>"></div>
					</div>

					</div>
					<!-- Show next flashcard -->
						<form id="shuffle" name="shuffle" method="post" action="">
						<div class="center-block">
						<input type="hidden" id="counter" name="counter" value="1" class="form_result"/>
						<button class="btn btn-large btn-info" id="first" name="first" value="1" type="submit">First</button>
						<button class="btn btn-large btn-info" id="previous" name="previous" type="submit">Previous</button>
						<button class="btn btn-large btn-info" id="next" name="next" type="submit" class="slide">Next</button>
						<button class="btn btn-large btn-info" id="last" name="last" type="submit" class="slide">Last</button>
						<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
						<p></p>
						</form>
					</div>
	    <?php
	   }
	  }
	}
 	//Navigation end
}
