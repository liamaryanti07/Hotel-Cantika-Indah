<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Cantika Indah</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of 
         HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS -->
    <link href="assets/style.css" rel="stylesheet">

  </head>
  <body>
    
    <div class="container">

    <!-- Bagian Header -->
    <div class="row">
        <div class="col-md-12 header" id="site-header">
          <header>
            <h1 class="title-site">Hotel Cantika Indah</h1>
            <p class="description">Hotel termurah diYogyakarta dengan kenyamanan yang terjamin</p>
          </header>
           <nav class="menus">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="galery.php">Galery Hotel</a></li>
			  <li><a href="index2.php">Data Constumer</a></li>
            </ul>
          </nav>
        </div>
    </div>
    <!-- End Bagian Header -->

    <!-- Bagian Wrapper 2 kolom -->
    <div class="row">
        <div class="col-md-8 articles" id="site-content">
           <article class="posts">
              <h2 class="title-post">Daftar Tamu</h2>
              <div class="meta-post">
                <span><em class="glyphicon glyphicon-user"></em> Lia Maryanti</span>
                <span><em class="glyphicon glyphicon-time"></em> 27 july 2018</span>
              </div>
              <div class="content">
					<form action="simpan_customer.php" method="post">
						<table>
							<tr>
								<td>ID Customer</td>
								<td> : </td>
								<td><input type="text" name="idcustomer"></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td> : </td>
								<td><input type="text" name="namacustomer"></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td> : </td>
								<td><textarea name="alamatcustomer" rows="8" cols="40"></textarea></td>
							</tr>
							<tr>
								<td>Status</td>
								<td> : </td>
								<td><input type="text" name="statuscustomer"></td>
							</tr>
							<tr>
								<td>Type Kamar</td>
								<td> : </td>
								<td><input type="text" name="typekamar"></td>
							</tr>
							<tr>
								<td>Cek-In</td>
								<td> : </td>
								<td><input type="text" name="cek_in"></td>
							</tr>
							<tr>
								<td>Cek-Out</td>
								<td> : </td>
								<td><input type="text" name="cek_out"></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td><input type="submit" value="Submit"></td>
							</tr>
						</table>
					</form>
			  </div>
            </article>
        </div>
        <div class="col-md-4 sidebar" id="site-sidebar">
            <aside class="widgets">
               <h3 class="widget-title">Latest Posts</h3>
               <ul>
                <li><a href="#">Daftar Paket</a></li>
                <li><a href="#">Daftar Diskon</a></li>
				<li><a href="#">Cetak Struk Pembayaran</a></li>
             </ul>
            </aside>
        </div>
    </div>
    <!-- End Bagian wrapper -->
    
    <!-- Bagian footer -->
    <div class="row">
        <div class="col-md-12 footer" id="site-footer">
            <footer class=”copyright text-center”><p>&copy; 2018 liamaryanti.com</p></footer>
        </div>
    </div>
    <!-- End Bagian footer -->

</div>


    <!-- jQuery online menggunakan CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- jQuery lokal -->
    <script src="assets/jquery/jquery.min.js"></script>
 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/custom.js"></script>
  </body>
</html>