<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi Vue</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
  <div id="app">

    <header>
    </header>

    <main>
      <div class="container py-5">
        <div class="row row-cols-5 g-3">

            <div class="col" v-for="album in albums">
              <div class="p-3 text-center cards-container">
                <div>
                  <img :src="album.poster" :alt="album.title" class="img-card">
                </div>
                <h5 class="py-2 text-center">{{ album.title }}</h5>
                <h6>{{ album.author }}</h6>
                <h6>{{ album.year }}</h6>
              </div>
            </div>

        </div>
      </div>
    </main>

  </div>

  <script src="js/script.js"></script>
</body>
</html>