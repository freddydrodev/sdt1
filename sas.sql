-- --------------------------------------------------------

--
-- Table structure for table pettype
--

DROP TABLE IF EXISTS pettype;
CREATE TABLE IF NOT EXISTS pettype (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  type varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table customers
--

DROP TABLE IF EXISTS customers;
CREATE TABLE IF NOT EXISTS customers (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  username varchar(32) NOT NULL,
  password varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  date_of_birth date NOT NULL,
  postal_address varchar(100) NOT NULL,
  postcode varchar(6) NOT NULL,
  createdat datetime NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table pet
--

DROP TABLE IF EXISTS pets;
CREATE TABLE IF NOT EXISTS pets (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  pet_name varchar(50) NOT NULL,
  pet_description varchar(150) NOT NULL,
  pet_owner int(11) NOT NULL,
  pet_type int(11) NOT NULL,
  date_of_birth DATE NOT NULL,
  createdat datetime NOT NULL,
  FOREIGN KEY(pet_owner) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(pet_type) REFERENCES pettype(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- --------------------------------------------------------

--
-- Table structure for table rssnews
--

DROP TABLE IF EXISTS rssnews;
CREATE TABLE IF NOT EXISTS rssnews (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  title varchar(30) NOT NULL,
  description text NOT NULL,
  link varchar(200) NOT NULL,
  madeby int(11) NOT NULL,
  FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- --------------------------------------------------------

--
-- Table structure for table donations
--

DROP TABLE IF EXISTS donations;
CREATE TABLE IF NOT EXISTS donations (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  donate int(11) NOT NULL,
  madeby int(11) NOT NULL,
  madeto int(11) NOT NULL,
  FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(madeto) REFERENCES pets(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- --------------------------------------------------------

--
-- Table structure for table forumtopic
--

DROP TABLE IF EXISTS forumtopics;
CREATE TABLE IF NOT EXISTS forumtopics (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  title varchar(50) NOT NULL,
  description varchar(200) NOT NULL,
  madeby int(11) NOT NULL,
  createdat datetime NOT NULL,
  status enum('private','public') NOT NULL,
  FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- --------------------------------------------------------

--
-- Table structure for table forummessages
--

DROP TABLE IF EXISTS forummessages;
CREATE TABLE IF NOT EXISTS forummessages (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  msg text NOT NULL,
  madeby int(11) NOT NULL,
  madeon int(11) NOT NULL,
  createdat datetime NOT NULL,
  FOREIGN KEY(madeby) REFERENCES customers(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(madeon) REFERENCES forumtopics(id) ON DELETE CASCADE ON UPDATE CASCADE
);