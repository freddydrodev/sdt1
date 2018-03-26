<?php
$sent = false;
if(isset($_POST['addPet'])){
  $name = htmlspecialchars(trim($_POST['name']));
  $date_of_birth = htmlspecialchars(trim($_POST['dob']));
  $description = htmlspecialchars(trim($_POST['description']));
  $type = htmlspecialchars(trim($_POST['type']));
  $correct = true;


  if(!preg_match('/^[a-zA-Z \-]{1,50}$/', $name)) {
      $correct = false;
      bootstrapNotify('Name: wrong format! must be letters and spaces between 1 and 50 characters');
  }

  if((int)$type <= 0 || (int)$type > 5) {
      $correct = false;
      bootstrapNotify('Type: Wrong type! Must be a valide type');
  }

  if(strlen($date_of_birth) <= 0) {
      $correct = false;
      bootstrapNotify('Date of Birth: Wrong date of birth! Must be a valide date');
  }
  
  if(strlen($description) <= 0 || strlen($description) > 150) {
      $correct = false;
      bootstrapNotify('Description: Wrong Description! must be between 1 and 150 characters');
  }

  if(isset($_FILES)){

    // file check
    $target_dir = "./assets/images/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check == false) {
        $correct = false;
        bootstrapNotify('Image: The file is not an image - ' . $check["mime"] . '.');
    }

    // // Check if file already exists    
    // if (file_exists($target_file)) {
    //     $correct = false;
    //     bootstrapNotify('Image: Sorry, file already exists.');
    // }

    // Check file size
    if ($_FILES["pic"]["size"] > 4194304) {
        $correct = false;
        bootstrapNotify('Image: size must be less than 4Mo');
    }

    // Allow certain file formats
    if(strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg" ) {
        $correct = false;
        bootstrapNotify('Image: allow format are (JPG, JPEG, PNG)');
    }
  }
  else {
    bootstrapNotify('Image: No image added');
  }

  if($correct){
    $add = $db->prepare('INSERT INTO pets(pet_name, pet_description, date_of_birth, pet_owner, pet_type, createdat) VALUES(?,?,?,?,?, NOW())');
    if($add->execute(array($name, $description, $date_of_birth, $_SESSION['id'], $type))){

        $id = $db->lastInsertId();
        $n = 'pet_' . $id . '.jpg';
        if (!move_uploaded_file($_FILES["pic"]["tmp_name"], $target_dir . $n)) {
            bootstrapNotify('Image: Error, image not added!');
        }
        bootstrapNotify('Success: Pet added!', 'success');
    }
    else {
      bootstrapNotify('Error: adding pet');
      $sent = true;
    }
  }
  else {
      $sent = true;
  }
}
