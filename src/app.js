var app = new Vue({
  el: `#app`,
  data: {
    albums:[],
  },
  mounted(){
    axios
    .get('server.php')
    .then((response) =>{
      this.albums = response.data;
      console.log(this.albums);
    })
  },
  methods: {

  }
});
