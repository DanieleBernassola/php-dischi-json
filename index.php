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
    <div class="container-full">
      <header>
        <img src="./img/logo.png" alt="logo">
      </header>
    </div>

    <!-- MAIN -->
    <main>
      <div class="container">
        <div class="row">
          <!-- COLONNA CANZONI -->
          <div class="col-4 text-center" v-for="song in songs">
            <div class="content">
              <img :src="song.img" :alt="song.title">
              <h2>{{ song.title }}</h2>
              <p class="artist">{{ song.artist }}</p>
              <h3>{{ song.year }}</h3>
            </div>
          </div>

          <h3>Add songs</h3>
          <form action="" @submit.prevent="addSong">
            <div class="mb-3">
              <label for="text-song" class="form-label">Song name</label>
              <input type="text" class="form-control" id="text-song" :v-model="addSong">
            </div>
            <button class="btn btn-primary btn-sm">Add a song</button>
          </form>
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