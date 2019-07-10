
<?php
function Conectarse(){
$server = "localhost";
$usser = "root";
$pass = "";
$data = "desafio";
$con =  mysqli_connect($server,$usser,$pass);
if (!$con) {
  echo "Error a Conectarse";
}
if (!mysqli_select_db($con,$data)) {
  echo "Error a Conectarse a base datos";
};
return $con;

}
?>
