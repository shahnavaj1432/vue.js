<html>
    <head>
    <style>
    .color-red{ color:red;}
    .is-loading{background:green;}
    </style>    
            
    </head>
    
        <body>
        <div id="root">
<h1 :class="className">Hello world</h1>
<button :class="{'is-loading':isLoading}" @click="toggleClass">click Me </button>
        </div>
      
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>

<script>

var app = new Vue({
  
  el:'#root',
  data:{

// className:'color-red'

isLoading: false

},
methods:{

    toggleClass(){
        this.isLoading =true;
    }
}

});

</script>   
</html>