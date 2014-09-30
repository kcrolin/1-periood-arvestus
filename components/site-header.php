<header id="site-header">
  <div class="site-title">
    <h1><?php echo $site_title; ?></h1>
  </div>

  <nav class="menu-main">
    <ul class="menu">
<?php foreach ($contact as $attribute => $value ) {
echo "<li><a href="$attribute">'{$value}'</a></li>"
;}?>
      
      <li><a href="news.php">Uudised</a></li>
      <li><a href="team.php">Meeskond</a></li>
      <li><a href="exercises.php">Harjutused</a></li>
    </ul>
  </nav>
</header>
