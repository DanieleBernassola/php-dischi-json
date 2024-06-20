<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi JSON</title>
  <link rel="stylesheet" href="./css/styles.css">
  <!-- AXIOS -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
  <div id="app">
    <!-- HEADER -->
    <header>
      logo
    </header>

    <!-- MAIN -->
    <main>
      <div class="container">
        <h1>Dischi</h1>
        <div class="row">
          <!-- COLONNA CANZONI -->
          <div class="col-4" v-for="song in songs">
            <div class="content">
              <h2>{{ song.title }}</h2>
              <p>{{ song.artist }}</p>
              <h3>{{ song.year }}</h3>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- VUE -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- JS -->
  <script src="./js/main.js"></script>
</body>

</html>