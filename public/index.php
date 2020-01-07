<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Boolean | Hotel DB configurations</title>

  <!-- reboot CSS (from Bootstrap) -->
  <link rel="stylesheet" href="css\lib\bootstrap-reboot.min.css">

  <!-- personal CSS -->
  <link rel="stylesheet" href="css/master.css">
</head>
<body>

  <!-- main -->
  <main>
    <form id="configuration-form">
      <label for="title">Title</label>
      <input type="text" id="title" name="title">
      <label for="description">Description</label>
      <input type="text" id="description" name="description">
      <button type="submit">Submit</button>
    </form>
    <div class="configurations-container">
    </div>
  </main>
  <!-- /main -->

  <!-- templates -->
  <script id="configuration-template" type="text/x-handlebars-template">
    <div>{{title}}</div>
    <div>{{description}}</div>
    <div>{{created_at}}</div>
    <div>{{updated_at}}</div>
  </script>
  <!-- /templates -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- handlebars -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.4.2/handlebars.min.js"></script>

  <!-- personal JS -->
  <script src="js/main.js"></script>
</body>
</html>
