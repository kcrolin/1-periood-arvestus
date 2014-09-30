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
        <article class="blog-post">
		
 <?php
foreach ($blog_news as $blog_post) {
echo
       "<h2 class='post-title'>{$blog_post["post_title"]}</h2>
          <div class='post-excerpt'>
            <p>{$blog_post["post_excerpt"]}</p>
          </div>
          <div class='post-body'>
            <p>{$blog_post["post_body"]}</p>
            </div>
        </article>" 

   ;}
?> 
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
