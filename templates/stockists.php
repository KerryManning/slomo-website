<?php 
$pageTitle = "Slomo Stockists";
$page = "stockists";
include("functions.php");
include("header.php");

$bookshops = [];
$bookshops[1] = [
	"name" => "<a href='http://goodpressgallery.co.uk'>GOOD PRESS</a>",
	"address" => "<p>5 St. Margaret's Place</p><p>Glasgow</p><p>G1 5JY</p>" ];
$bookshops[2] = [
	"name" => "<a href='http://www.aye-ayebooks.com'>Aye-Aye Books</a>",
	"address" => "<p>50 Sauchiehall Street</p><p>Glasgow</p><p>G2 3JD</p>" ];
$bookshops[3] = [
	"name" => "<a href='http://www.tipitin.com'>Ti Pi Tin</a>",
	"address" => "<p>47 Stoke Newington High St</p><p>London</p><p>N16 8EL</p>" ];
$bookshops[4] = [
	"name" => "<a href='http://tenderbooks.co.uk'>Tenderbooks</a>",
	"address" => "<p>6 Cecil Court</p><p>London</p><p>WC2N 4HE</p>" ];
$bookshops[5] = [
	"name" => "<a href='http://www.tornaistanbul.com'>Torna</a>",
	"address" => "<p>Caferağa Mah.</p><p>Moda Caddesi</p><p>Ressam Şeref Akdik Sok</p><p>Kefeli Pasajı</p><p>Kadıköy-İstanbul</p>" ];
?>

<div class="content-box">	
	<div class="row stockists">
		<?php foreach ($bookshops as $id => $shop) {
			echo get_stockists_html($id, $shop);
		}?>
	</div>
</div>

<?php
include("inc/footer.php");