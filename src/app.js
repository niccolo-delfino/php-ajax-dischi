var app = new Vue({
  el: `#app`,
  data: {
    albums:[],
    generi: ['All'],
    selection: 'All'
  },
  mounted(){
    axios
    .get('server.php')
    .then((response) =>{
      this.albums = response.data;
      console.log(this.albums);
      this.albums.forEach((item,i) =>{
        if(!this.generi.includes(item.genre)) {
          this.generi.push(item.genre);
        }
      });
    })
  },
  methods: {

  }
});
