<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->
		<?php 
    $var= rand(100,200);
	if ($var >= 150) {
	echo "Juhuslik number 'genereeritud number' on suurem kui 150.";}
	else {
	echo "Juhuslik number 'genereeritud number' on väiksem kui 150.";}
    
	?>
	
        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->
		
		 <?php
		 
echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.rand(1, 12).'.jpg">';
?>
	

        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
		<?php
$count = 1;
while ($count <= 12) {
echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.$count.'.jpg">';
$count ++;
}
?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
