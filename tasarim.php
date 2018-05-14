# kds
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
</style>


</head>

<div class="container">
	<div class="row" style="    background-color: lightblue">

		<section class="content">
			<h1>Yıkım Kds</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						
							
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
								<?php 
									if(mysqli_num_rows($a)>0){
										while($row=mysqli_fetch_assoc($a)){
										echo '<tr data-status="">
									
										
											
												
											
										
										<td>
										
										</td>
						
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													
													<span class="media-meta pull-right"><p style="background-color:red">BİNA BİLGİ NO:'.$row["bina_id"].'</span></p>
													
													<h4 class="title">
													
													<ul>
														<br><li><p class="puan">RİSK PUANI:'.$row["risk_puani"].'</p></li><br>
														<br><li><p class="kullanim">KULLANIM DURUMU:'.$row["k_durum"].'</p></li><br>
														<br><li><p class="konum">KONUM:'.$row["konum"].'</p></li><br>
														<br><li><p class="yikim">ÖNERİLEN YIKIM ŞEKLİ:'.$row["yikim_sekli"].'</p></li><br>
														 <form method="get" action="/bootstrap/tarih.php">
														 <button type="submit">Yıkım Talimatı Ver</button>
														 </form>

													</h4>
													<p class="summary"></p>
												</div>
											</div>
										</td>
									</tr>';
								}
								}else{
									echo "Kayıt Bulunamadı" ;
	
								}
									
								?>	
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="content-footer">
					<p>
												<br>
									
					</p>
				</div>
			</div>
		</section>
		
	</div>
</div>
</html>
