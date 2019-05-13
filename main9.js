Vue.component('task-list',{

    template:`
    <div>
    <task v-for="task in tasks" v-if=task.complete>{{task.task}}</task>
    
    </div>
    
    `,
    data(){
    
        return{
    
            tasks:[
                {task:'Go to the store', complete:true},
                {task:'Go to the market', complete:false},
                {task:'Go to work', complete:true},
                {task:'Go to the store', complete:false},
            ]
        }
    }
    
    });

    Vue.component('task',{

        template:'<li><slot></slot></li>'
        
        });
        
    
    
    new Vue({
    
        el:"#root"
    });
    