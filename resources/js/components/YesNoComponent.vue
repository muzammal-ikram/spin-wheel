<template>
    <div class="container">
       
        <VueWinwheel :segments="options"  /> 

    </div>
</template>



<script>
    import VueWinwheel from 'vue-winwheel/vue-winwheel'
    // import NavBar from './NavBar.vue'
    
    export default {
      name: 'Spin',
      components:{
        VueWinwheel
      },
      computed:{
        //   one(){
        //       return "one";
        //   }
        location(){
            return window.location.origin+"?names="+this.name_str;
        }
      },
      data(){
          return{
                options:[
                        {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Yes'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'No'
                        },
                        {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Yes'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'No'
                        },
                        {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Yes'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'No'
                        },
                        {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Yes'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'No'
                        }
                        
                    ]
          }
      },
      methods:{

        },
        mounted(){
          
        }
    }
    </script>