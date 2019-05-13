Vue.component('message',{
props:['title','body'],

data(){
    return{
        isVisible:true
    }
},
    template:`
    <div class="jumbotron" v-show="isVisible">
<div>
  <h1 class="display-4">{{ title }}</h1>
<button type="button" @click="hideModel">X</button>
</div>

  <p class="lead">{{ body }}</p>
  
</div>
    `,
    methods:{
        hideModel(){
            this.isVisible=false;
        }
    }
   
    
    });
    
    new Vue({
    
        el:"#root"
    });
    