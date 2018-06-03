<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotelia";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}


$idcustomer = $_GET['idcustomer'];

$customer = mysqli_query($konek, " SELECT * FROM customer where idcustomer='$idcustomer'");
$row = mysqli_fetch_array($customer);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Hotel</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Customer</h1>
    <form action="update_customer.php" method="post">
      <td><input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>"/></td>
      <table>
        <tr>
          <td>ID Customer</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['idcustomer'];?>"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="namacustomer" value="<?php echo $row['namacustomer'];?>"></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>:</td>
          <td><input type="text" name="statuscustomer" value="<?php echo $row['statuscustomer'];?>"></td>
        </tr>
        <tr>
          <td>Type Kamar</td>
          <td>:</td>
         <td><input type="text" name="typekamar" value="<?php echo $row['typekamar'];?>"></td>
        </tr>
        <tr>
          <td>Cek-In</td>
          <td>:</td>
          <td><input type="text" name="cek_in" value="<?php echo $row['cek_in'];?>"></td>
        </tr>
        <tr>
          <td>Cek-Out</td>
          <td>:</td>
          <td><input type="text" name="cek_out" value="<?php echo $row['cek_out'];?>"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
