<html>
    <head>
            
    <style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
  
    </head>
        <body>
        <!-- <div id="loader"  >
        
        </div> -->

        <div id="Itemlist">

    <table class="table">

        <tr>
            <th>Id</th>
            <th>fir_reg_num</th>
            <th>fir_ps_name</th>
        </tr>

        <tr v-for="item in items">
            <td>{{item.id}}</td>
            <td>{{item.fir_reg_num}}</td>
            <td>{{item.fir_ps_name}}</td>
        </tr>
    </table>
    <!-- <button @click="get_data()">load</button>
 <ul>
 <li v-for="name in names">
            {{name}}
          
        </li> -->
 </ul>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

            

<script>
 var ItemsVue =new Vue({
    el: '#Itemlist',
    data: {
        items: [],
         names: ["tanay","shah"]
    },
    methods: {
        get_data()
        {
            var vm = this;

$.ajax({

    url: 'https://capt.testeller.com/my_cases',
    method: 'GET',
    success: function (data) {
        vm.items = data;
        // $("#loader").hide();
        

    },
    error: function (error) {
        console.log(error);
    }

});
        }
    },
    mounted() {
        this.get_data();  
    }
   
});
    </script>
    
</html>