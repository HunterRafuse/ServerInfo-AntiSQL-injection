<?php if (isset($_GET['name'])) {
  # code...
    $name = htmlentities($_GET['name']);
    // print_r($_GET);
    echo $name;
 }
 /*
 // if (isset($_POST['name'])) {
 //   # code...
 //   print_r($_POST);
 //   $name = htmlentities($_POST['name']);
 //   echo $name;
 // }
 if (isset($_REQUEST['name'])) {
   # code...
   print_r($_REQUEST);
   $name = htmlentities($_REQUEST['name']);
   echo $name;
 }
 echo $_SERVER['QUERY_STRING'];
 */
 //EXAMPLE ANTI MYSQL injection code TAILOR IT TO YOUR OWN NEEDS
 $stmt = $pdo->prepare('SELECT * FROM employees WHERE name = :name');

$stmt->execute(array('name' => $name));

foreach ($stmt as $row) {
    // do something with $row
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>
    <form class="" action="get_post.php" method="GET">
      <div class="">
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <div class="">
        <label>Email</label><br>
        <input type="text" name="email">
      </div>
      <input type="submit" name="" value="Submit">
    </form>
    <ul>
      <li>
        <a href="get_post.php?name=Hunter"></a>
      </li>
      <li>
        <a href="get_post.php?name=Brad"></a>
      </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
  </body>
</html>
