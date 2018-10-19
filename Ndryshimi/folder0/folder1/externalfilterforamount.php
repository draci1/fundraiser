
<?php
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo '<a href="javascript:history.back()">Go Back</a>';
  die();
}
if(isset($_POST['submit'])){
set_error_handler("customError",E_USER_WARNING);
$amount=mysqli_real_escape_string($conn,$_POST['amount']);
if ($amount<=0 || $amount>=100000) {
  trigger_error("Value must be between 1 and 100000",E_USER_WARNING);
}}
?>