<html>
    <head>
    <style>
 
    </style>    
            
    </head>
    
        <body>
        <div id="root">
<h2>All tasks
</h2>
  <ul>

<li v-for="task in tasks"  v-text="task.description"></li>

  </ul>
  <h2>Incomplete tasks
</h2>
<ul>

<li v-for="task in incompleteTask" v-text="task.description"></li>

  </ul>

  <h2>Complete tasks
</h2>
<ul>

<li v-for="task in tasks" v-if="task.completed" v-text="task.description"></li>

  </ul>
      
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>

<script>

var app = new Vue({
  
  el:'#root',
  data:{
tasks:[ 
  {description:'go to the store', completed: true },
  {description:'go to the school', completed: true },
  {description:'go to the college', completed: false },
  {description:'go to the bank', completed: true },
  {description:'go to the office', completed: false },
  {description:'go to the liberary', completed: true },
  {description:'go to the home', completed: true },


]

},
computed:{
  incompleteTask()
  {
    return this.tasks.filter(task =>!task.completed);
  }
}
});

</script>   
</html>