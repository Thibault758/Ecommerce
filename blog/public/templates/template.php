<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/css.css">
  </head>
  <body>
    <header>
      <h1>FONKYDEV - LE BLOG</h1>
    </header>

    <nav>
      <?php if(isset($acceuilLog)){echo $acceuilLog;} ?>
    </nav>

    <div class="categories">
      <?php if(isset($categories)){echo $categories;} ?>
    </div>

    <section>
      <?php if(isset($content)){echo $content;} ?>
    </section>

  </body>
</html>
