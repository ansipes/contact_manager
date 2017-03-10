<?php

  include 'database.php';

  if(isset($_FILES['file'])) {
      $file = $_FILES['file'];


      // File properties

      $file_name = $file['name'];
      $file_tmp = $file['tmp_name'];
      $file_size = $file['size'];
      $file_error = $file['error'];

      // Work out the file extension

      $file_ext = explode('.', $file_name);

      $file_ext = strtolower(end($file_ext));

      $allowed = array('jpg');

      if(in_array($file_ext, $allowed)) {
        if($file_error === 0) {
          if($file_size <= 2000000000) {

              $file_name_new = uniqid('', true) . '.' . $file_ext;
              $file_destination = 'uploads/' . $file_name_new;

              if(move_uploaded_file($file_tmp, $file_destination)) {
                $_POST['image'] = $file_name_new;
              }

          }
        }
      }
  }

// Build the mySQL statement.

  $stmt = $db->prepare("INSERT INTO contacts
    (first, last, title, address, city, state, zip, phone, email, notes, image)
    VALUES
    (:first, :last, :title, :address, :city, :state, :zip, :phone, :email, :notes, :image)
  ");

// Execute the mySQL statement.

  $stmt->execute(array(
    ':first' => $_POST['first'],
    ':last' => $_POST['last'],
    ':title' => $_POST['title'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':phone' => $_POST['phone'],
    ':email' => $_POST['email'],
    ':notes' => $_POST['notes'],
    ':image'=> $_POST['image']

  ));

  $id = $db->lastInsertId();

// Redirect

  header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');
?>
