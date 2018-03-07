<?php 
if(isset($_POST['setup'])) {
    try
	{
        $host = 'localhost';
        $user = 'root';
        $psw = '';
		//connection to mysql

		$dbh = new PDO("mysql:host=$host", $user, $psw);

		//creating database

		$dbh->exec('CREATE DATABASE IF NOT EXISTS ' . $db);
		$dbh->exec('USE ' . $db);
		// $dbh->exec('GRANT ALL PRIVILEGES ON ' . $db . '.* TO ' . $user . '@' . $host . ' IDENTIFIED BY ' . $psw);

        //create user type table
		$dbh->exec('CREATE TABLE IF NOT EXISTS pettype (
            id int(11) PRIMARY KEY AUTO_INCREMENT,
            type varchar(50) NOT NULL
        )');

        //create user pp table
		$dbh->exec('CREATE TABLE IF NOT EXISTS customers (
            id int(11) PRIMARY KEY AUTO_INCREMENT,
            username varchar(32) NOT NULL,
            password varchar(100) NOT NULL,
            email varchar(100) NOT NULL,
            date_of_birth date NOT NULL,
            postal_address varchar(100) NOT NULL,
            postcode varchar(6) NOT NULL,
            createdat datetime NOT NULL
        )');

        //create user table
		$dbh->exec('CREATE TABLE IF NOT EXISTS pets (
            id int(11) PRIMARY KEY AUTO_INCREMENT,
            name varchar(50) NOT NULL,
            description varchar(150) NOT NULL,
            owner int(11) NOT NULL,
            type int(11) NOT NULL,
            createdat datetime NOT NULL,
            FOREIGN KEY(owner) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY(type) REFERENCES pettype(id) ON DELETE CASCADE ON UPDATE CASCADE
        )');

        //create unique visitors table
		$dbh->exec('CREATE TABLE IF NOT EXISTS rssnews (
            id int(11) PRIMARY KEY AUTO_INCREMENT,
            title varchar(30) NOT NULL,
            description text NOT NULL,
            link varchar(200) NOT NULL,
            madeby int(11) NOT NULL,
            FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE
        )');

        //create connected visitors table
		$dbh->exec('CREATE TABLE IF NOT EXISTS donations (
            id int(11) PRIMARY KEY AUTO_INCREMENT,
            donate int(11) NOT NULL,
            madeby int(11) NOT NULL,
            madeto int(11) NOT NULL,
            FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY(madeto) REFERENCES pets(id) ON DELETE CASCADE ON UPDATE CASCADE
        )');

        //create billboards table
		$dbh->exec('CREATE TABLE IF NOT EXISTS forumtopics (
            id int(11) PRIMARY KEY AUTO_INCREMENT,
            title varchar(50) NOT NULL,
            description varchar(200) NOT NULL,
            madeby int(11) NOT NULL,
            createdat datetime NOT NULL,
            status enum("open","closed") NOT NULL,
            FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE
        )');

        //create billboards table
		$dbh->exec('CREATE TABLE IF NOT EXISTS forummessages (
            id int(11) PRIMARY KEY AUTO_INCREMENT,
            msg text NOT NULL,
            madeby int(11) NOT NULL,
            madeon int(11) NOT NULL,
            createdat datetime NOT NULL,
            FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE,
            FOREIGN KEY(madeon) REFERENCES forumtopics(id) ON DELETE CASCADE ON UPDATE CASCADE
        )');

        echo '
            <p class="alert bg-success text-white"><span class="glyphicon glyphicon-warning-sign"></span>Database created successfully, Redirecting !!!</p>';
        header('refresh:2;url=login.php');
    }
    catch(PDOException $e)
    {
        echo '<button class="btn btn-primary btn-block btn-lg" type="submit" name="setup">Setup</button>';
        echo 'error : ' . $e->getMessage();
    }
} else {
    echo '<button class="btn btn-primary btn-block btn-lg" type="submit" name="setup">Setup</button>';
}