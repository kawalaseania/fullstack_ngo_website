<?php



include 'connect.php'; // include the file that connects to the database


class Query extends Dbh
{


	//.................	THESE METHODS CONTAINS QUERIES ON THE EVENT TABLE ONLY ----------/
	public function save_event($subject, $date_of_event, $location, $description)
	{
		$sql = "INSERT INTO events(subjects, date_of_event, locations, descriptions) VALUES (?,?,?,?)";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$subject, $date_of_event, $location, $description]);
		return $stmt;
	}

	// select all events 
	public function select_all_events()
	{
		$sql = "SELECT * FROM events ORDER BY id DESC";
		$stmt = $this->connection()->query($sql);
		return $stmt;
	}

	// select events that have not occured 
	public function select_un_occured_events()
	{
		$stmt = $this->connection()->query("SELECT * FROM events WHERE date_of_event > CURDATE()");
		return $stmt;
	}

	// this method will count total upcoming events not passed yet
	public function count_upcoming_events()
	{
		$sql = $this->connection()->query("SELECT * FROM events where date_of_event > CURDATE()");
		$count = $sql->rowCount();
		return $count;
	}


	// select the latest three events upcoming
	public function select_three_event()
	{
		$sql = "SELECT * FROM events ORDER BY id DESC";
		$stmt = $this->connection()->query($sql);
		return $stmt;
	}

	//.................	THESE METHODS CONTAINS QUERIES ON THE NEWS TABLE ONLY ----------/
	public function save_news($headline, $happeningDate, $newsBody, $pic)
	{
		$sql = "INSERT INTO news(headline, happeningDate, newsBody,pic) VALUES (?,?,?,?)";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$headline, $happeningDate, $newsBody, $pic]);
		return $stmt;
	}

	// select all news 
	public function select_all_news()
	{
		$sql = "SELECT * FROM news ORDER BY id DESC";
		$stmt = $this->connection()->query($sql);
		return $stmt;
	}

	// this method will load news in new page for pagenation 
	function load_news_with_limit($start, $limit)
	{
		$sql = $this->connection()->query("SELECT * FROM news  ORDER BY id DESC LIMIT $start, $limit ");
		return $sql;
	}
	// this will count total news in database 
	public function count_news()
	{
		$sql = $this->connection()->query("SELECT * FROM news");
		$count = $sql->rowCount();
		return $count;
	}

	// select three  news headline on the home page 
	public function select_last_three_news()
	{
		$sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
		$stmt = $this->connection()->query($sql);
		return $stmt;
	}
	// load a news to read in deatils
	public function load_a_news_on_reading_page($newsId)
	{
		$sql = "SELECT * FROM news WHERE id = $newsId";
		$stmt = $this->connection()->query($sql);
		return $stmt;
	}

	// ................. THESE METHODS WORKS ON PICTURE GALARY ............//

	public function save_img($descriptions, $pic)
	{
		$sql = "INSERT INTO  galary(descriptions,pic) VALUES (?,?)";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$descriptions, $pic]);
		return $stmt;
	}


	// select all pictures 
	public function select_all_pictures()
	{
		$sql = "SELECT * FROM galary ORDER BY id DESC";
		$stmt = $this->connection()->query($sql);
		return $stmt;
	}

// THESE METHOD WILL WORK GLOBALLY 

	public function delete_record($table, $id)
	{
		$stmt = $this->connection()->prepare("DELETE FROM $table WHERE id = ?");
		$stmt->execute([$id]);
		return $stmt;
	} // this will delete any item in any table base on the table name and id passed


	// this load  pictures for pagination functionlalities 
	function load_all_images($start, $limit)
	{
		$sql = $this->connection()->query("SELECT * FROM galary  ORDER BY id DESC LIMIT $start, $limit ");
		return $sql;
	}

	// this will count all images in galary
	public function count_images()
	{
		$sql = $this->connection()->query("SELECT * FROM galary");
		$count = $sql->rowCount();
		return $count;
	}

	public function count_from_a_table($tableName)
	{
		$sql = $this->connection()->query("SELECT * FROM $tableName");
		$count = $sql->rowCount();
		return $count;
	}

	// select single from any table 
	public function select_one_from_any_table($table, $id)
	{
		$stmt = $this->connection()->query("SELECT * FROM $table WHERE id = $id");
		return $stmt;
	}





	//........QUERY ON THE admin TABLE ................
	/// select user base on email 
	public function login($email)
	{
		$stmt = $this->connection()->prepare('SELECT * FROM admin WHERE email = ?');
		$stmt->execute([$email]);
		return $stmt;
	}


	public function update_password($password, $rfc)
	{
		$sql = "UPDATE users SET password = ? WHERE rfc = $rfc";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$password]);
		return $stmt;
	}

	public function save_user_info($username, $email, $password, $rfc, $contact, $address, $userType, $profile)
	{
		$sql = "INSERT INTO users(username,email,password,rfc,contact,address,userType,profile) VALUES (?,?,?,?,?,?,?,?)";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$username, $email, $password, $rfc, $contact, $address, $userType, $profile]);
		return $stmt;
	}


	//........ 	QUERY ON PICTURE GALARY - OR CAROUSEL TABLE //

	public function save_galery_picture($description, $publishDate, $attachFile)
	{
		$sql = "INSERT INTO galary(description,publishDate,attachFile) VALUES (?,?,?)";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$description, $publishDate, $attachFile]);
		return $stmt;
	}

	public function select_imgs_for_deliveryCarousel()
	{
		$sql = "SELECT * FROM galary ORDER BY id DESC";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute();
		return $stmt;
	}

	public function load_few_images(){
		$sql = "SELECT * FROM galary ORDER BY id DESC LIMIT 6";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute();
		return $stmt;
	}



	
}
