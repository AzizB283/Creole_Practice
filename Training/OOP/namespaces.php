<?php
// namespace Html;

echo "<h2><center>Namespaces</center></h2>";

// They allow the same name to be used for more than one class

class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;

// $table->message();

?>


<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>