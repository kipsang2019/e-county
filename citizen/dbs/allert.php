

	<?php if (isset($_SESSION['msg1'])): ?>
		<?php 
			echo $_SESSION['msg1']; 
			unset($_SESSION['msg1']);
		?>
	<?php endif ?>


