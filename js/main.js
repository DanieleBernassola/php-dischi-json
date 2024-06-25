const { createApp } = Vue;

createApp({
  data() {
    return {
      urlSongs: "http://localhost/php-dischi-json/api.php",
      songs: [],
      newSong: "",
      // songs: [
      //   {
      //     title: "New Jersey",
      //     artist: "Bon Jovi",
      //     year: "1988",
      //   },
      //   {
      //     title: "Live at Wembley 86",
      //     artist: "Queen",
      //     year: "1992",
      //   },
      //   {
      //     title: "Ten's Summoner's Tales",
      //     artist: "Sting",
      //     year: "1993",
      //   },
      //   {
      //     title: "Steve Gadd band",
      //     artist: "Steve Gadd band",
      //     year: "2018",
      //   },
      //   {
      //     title: "Brave new World",
      //     artist: "Iron Maiden",
      //     year: "2000",
      //   },
      //   {
      //     title: "One more car, one more rider",
      //     artist: "Eric Clapton",
      //     year: "2002",
      //   },
      // ],
    };
  },
  methods: {
    // FUNZIONE CHE MOSTRA CANZONI
    getSongs() {
      axios.get(this.urlSongs).then((response) => {
        this.songs = response.data;
      });
    },
    addSong() {
      console.log("nuova canzone");
      const data = {
        text: this.newSong,
        action: "create",
      };
      axios
        .post("http://localhost/php-dischi-json/data.json", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => (this.songs = response.data));
    },
  },
  created() {
    this.getSongs();
  },
}).mount("#app");
