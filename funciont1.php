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
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="galery.php">Galery Hotel</a></li>
			  <li><a href="#">Data Constumer</a></li>
            </ul>
          </nav>
        </div>
    </div>
    <!-- End Bagian Header -->

    <!-- Bagian Wrapper 2 kolom -->
    <div class="row">
        <div class="col-md-8 articles" id="site-content">
           <article class="posts">
              <h2 class="title-post">Data Tamu</h2>
              <div class="meta-post">
                <span><em class="glyphicon glyphicon-user"></em> Lia Maryanti</span>
                <span><em class="glyphicon glyphicon-time"></em> 27 july 2018</span>
              </div>
              <div class="content">
					<form>
	<table border="1" align="center">
		<tr>
			<td colspan="3" align="center"><h2> Form Inputan </h2></td>
			</tr>
			<tr>
				<td> NAMA </td>
				<td> : </td>
				<td><input  type="text" name="name" id="name" /></td>
			</tr>
			<tr>
				<td> NOMER KAMAR </td>
				<td> : </td>
				<td><input  type="text" name="nomer_kamar" id="nomer_kamar" /></td>
			</tr>
			<tr>
				<td> TYPE KAMAR </td>
				<td> : </td>
				<td><input  type="text" name="type_kamar" id="type_kamar" /></td>
			</tr>
			<tr>
				<td> HARGA SEMALAM </td>
				<td> : </td>
				<td><input  type="number" name="harga" id="harga" value="0" onchange="hitung()" /></td>
			</tr>
			<tr>
				<td> JUMLAH PEMESAN </td>
				<td> : </td>
				<td><input  type="number" name="pemesan" id="porsi" value="0" onchange="hitung()"/></td>
			</tr>
			<tr>
				<td> TOTAL BAYAR </td>
				<td> : </td>
				<td><input  type="number" name="total_bayar" id="total_bayar" value="" /></td>
			</tr>
			<tr>
				<td> BAYAR </td>
				<td> : </td>
				<td><input  type="number" name="bayar" id="bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
			</tr>
			<tr>
				<td> KEMBALIAN </td>
				<td> : </td>
				<td><input  type="text" name="kembalian" id="kembalian" /></td>
			</tr>
		</table>
			<br><br>
			<center><input type="button"  onclick="window.print()" value="CETAK"></center>
			<script type="tex/javascript">


				function mulaiHitung(){
					Interval = setInterval("hitung()",1);
				}

				function paket(){
					if(nama_makanan==1){
						harga=8000;
					}
					if(nama_makanan==2){
						harga=10000;
					}
					if(nama_makanan==3){
						harga=10000;
					}					
					if(nama_makanan==4){
						harga=12000;
					}					
					if(nama_makanan==5){
						harga=12000;
					}					
					if(nama_makanan==6){
						harga=13000;
					}
				}


				function hitung(){

					var harga = parseInt(document.getElementById("harga").value);
					var porsi = (document.getElementById("porsi").value);
					var total_bayar= harga * porsi;

					document.getElementById(total_bayar).value=total_bayar;
				}

				function berhentiHitung(){
					clearInterval(Interval);
				}
			</script>
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