<html>
    <head>
    <style>
 
    </style>    
            
    </head>
    
        <body>
        <div id="root">
<h1>

{{message.split('').reverse().join('')}}
<br>
{{ reversedMessage }}

</h1>

      
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>

<script>

var app = new Vue({
  
  el:'#root',
  data:{

message:"hello world",

type:"abcd"

},
computed:{
reversedMessage(){
    return this.type.split('').reverse().join('');
}

}


});

</script>   
</html>