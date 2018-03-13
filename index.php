<?php
include_once 'header.php';
?>
	<section class="main-container">
		<div class="main-wrapper">
		<h2>Medi-Care Medical Center</h2>
		
		<?php
		if(isset($_SESSION['u_id'])){
			echo 'loged in';
		}
		?>
		</div>
	</section>

<?php
include_once 'footer.php';
?>





 

