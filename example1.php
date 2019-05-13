<html>
    <head>
            
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
            
    </head>
        <body>
            <!-- 1 st example start -->
<div id="root">
            <input type="text" id="input" v-model="message">

<p> {{message}}</p>
        </div>
    <!-- 1 st example end -->
           

<script>
// 1 st example script start
    let data={

        message:'hello world'
    };

    new Vue({
        el: '#root',
        data: data
    });

// 1 st example script end
    </script>
     </body>
    
</html>