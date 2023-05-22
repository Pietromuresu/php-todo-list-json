const {createApp} = Vue; 



createApp ({

  data(){
    return{
    message: '',  
    taskText : '',
    tasks: [], 
    } 
  },
  methods: {
    getApi(){
      console.log(this.tasks);
      axios.get('server.php' )
        .then(result => {
          this.tasks = result.data
          console.log(this.tasks);
        })
    },

    removeTask(){

      
    },

    errorMessage(msg){
      this.message = msg
      setTimeout(() => {
       this.message= ''
      }, 2000)
    },

    newTask(){
      
        const newTask = {
          
            text : this.taskText,
            done : false
          
        }
        // const data = new FormData()
        // data.append('text', this.taskText)
        axios.post('server.php', newTask, {headers: {"Content-Type": "multipart/form-data"}})
         .then(result => {

          

            this.tasks = result.data
            console.log(this.tasks);
          
        })
      console.log(this.taskText)
       
    }
  },
  mounted(){
    this.getApi()
  }
}).mount('#app')