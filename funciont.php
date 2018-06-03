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