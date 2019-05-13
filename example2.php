<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
</head>
<body>
    <div id ="root2">
 <table border="1">
 <tr v-for= "name in names">
 <td> <input type="checkbox" name="" id="">  </td>
 <td>{{name}}  <span v-if="name=='ajhar'"> --</span> </td>
 </tr>
 </table>
<input id ="input" tyep="text" v-model="newName">
<button @click="addName" >add name</button>
    </div>


<script>
var app = new Vue({
el: '#root2',
data: {

    newName: '',
  names:['shahnavaj', 'ajhar','abhishek', 'praveen']
},

methods:{
    addName(){
this.names.push(this.newName);

this.newName ='';
    }
}, 
});

</script>
</body>
</html>