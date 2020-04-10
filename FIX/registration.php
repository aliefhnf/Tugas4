<?php
parse_str($_POST['dataku'], $hasil);
//print_r($_REQUEST);
//$hasil = $_REQUEST;
echo $sql = "insert into user values (
					'$hasil[firstName]', 
					'$hasil[lastName]',
					'$hasil[username]', 
					'$hasil[email]',
					'$hasil[address]', 
					'$hasil[address2]',
					'$hasil[country]', 
					'$hasil[state]',
					'$hasil[zip]'
					)
					";

echo $sql = "insert into payment (
					//'$hasil[ccName]', 
					//'$hasil[ccNumber]',
					//'$hasil[ccExpiration]', 
					//'$hasil[ccCvv]'
					//)
					//";

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "billing";
$link = mysqli_connect("localhost","root","","form_alief");

//$sql = "INSERT INTO `tbl_user`(`id_user`, `first_name`, `last_name`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`) VALUES ('1',$hasil[firstName]','$hasil[lastName]','$hasil[username]','$hasil[email]','$hasil[address]','$hasil[address2]','$hasil[country]','$hasil[state]','$hasil[zip]')";

$sql =	"INSERT INTO `user`(`id_user`, `first_name`, `last_name`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`) VALUES (1,'$hasil[firstName]','$hasil[lastName]','$hasil[username]','$hasil[email]','$hasil[address]','$hasil[address2]','$hasil[country]','$hasil[state]','$hasil[zip]')";

//$sql2 = "INSERT INTO `payment`(`id_payment`, `cc_name`, `cc_number`, `cc_expiration`, `cc_cvv`) VALUES ('1','$hasil[ccName]','$hasil[ccNumber]','$hasil[ccExpiration]','$hasil[ccCvv]')";


if(mysqli_query($link,$sql))
{
  echo "records added successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($link);
  }
mysqli_close($link);


?>