<html>
    <head>
            
            
    </head>
        <body>
        <div id="root">
<Button :title="title"> hover over me  </Button>
        </div>
      
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>

<script>

var app = new Vue({
  
  el:'#root',
  data:{

title: 'now the title is being set through javaScript.'
          }

});

</script>   
</html>