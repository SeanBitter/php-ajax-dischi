new Vue(
  {
    el: "#app",
    data: {
      albums: [],
    },

    mounted() {
      axios
      .get("api/albums.php")
      .then(resp => {
        this.albums = resp.data.albums;

        console.log(this.albums)
      })
    }
  }
)