<?php
	define("TITLE", "404 | Page not found");
	include('includes/header.php');
?>

<div class="container">
	<div class="jumbotron my-4">
    	<div class="text-center" style="min-height: 425px;">
       		<h1>Oeps!</h1>
       		<h2>Helaas is de opgevraagde pagina niet gevonden.</h2>
          	<p>	Redenen hiervoor kunnen zijn:<br />1. Het profiel dat je probeert te benaderen bestaat niet meer.<br />2. Het webadres is niet correct ingevoerd.<br /><br />Gebruik het menu op deze pagina om een nieuwe keuze te maken.</p>
        	<a href="index.php" class="btn btn-primary"> Startpagina </a>
		  	<?php
		    	foreach ($navItems as $item) {
		        echo "<a class=\"btn btn-primary\" href=\"$item[slug]\" style=\"margin: 1px;\">$item[title]</a>";
		     	}
		    ?>
        </div>
	</div>
</div>
<?php
	include('includes/footer.php');
?>