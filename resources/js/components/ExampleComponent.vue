<template>
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div> -->

       <VueWinwheel :segments="options"  ref="childComponent" />
       
       <div id="addQuestion">
        <table >
            <tr>
                <td><hr></td></tr>
                <tr>
                    <td style="text-align: center;">
                        <h1 class="h3">Edit Wheel</h1>
                    </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                   
                    <div v-for="(input,k) in values" :key="k">
                        
                        <input type="text" name="one" v-model="input.text" style="border: none;">
                        
                        <button type="button" class="btn btn-danger btn-sm" style="margin-left: 2px;" @click="remove(k)" v-show="k || ( !k && values.length > 1)">Del</button>
                        
                        <button type="button" class="btn btn-primary btn-sm" style="margin-left: 2px;" @click="add()" v-show="k == values.length-1">Add</button>
                        <!-- <br>
                        <br>
                        <span>
                            <i class="fas fa-minus-circle" @click="remove(k)" v-show="k || ( !k && values.length > 1)" style="cursor:pointer;">x</i><br>
                            <i class="fas fa-plus-circle" @click="add()" v-show="k == values.length-1" style="cursor:pointer;">a</i>
                        </span> -->

                    </div> 
                    <!-- <div class="form-group" v-for="(input,k) in inputs" :key="k">
                        <input type="text" class="form-control" v-model="input.name">
                        <span>
                            <i class="fas fa-minus-circle" @click="remove(k)" v-show="k || ( !k && inputs.length > 1)"></i>
                            <i class="fas fa-plus-circle" @click="add(k)" v-show="k == inputs.length-1"></i>
                        </span>
                    </div> -->
                </td>
            </tr>
            <tr>
                <td style="text-align: center;"><br>
                    <a href="javascript:void(0)" class="btn btn-primary"  @click.prevent="update()">Update!</a>
                 <!--                     data-toggle="modal"
                    data-target=".full-audit-modal-sm" class="btn btn-primary" -->
                    <!-- <button type="button" class="btn btn-primary" @click.prevent="update()">update</button> -->
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <input type="text" v-model="location" id="location"> <button type="button" class="btn btn-primary" @click="copy()">Copy</button>
                </td>
            </tr>
        </table>
    </div> 

 
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
      props:['currentUser'],
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
            renderComponent: true,
              name_str : '',
              values:[
                  {
                      text: "Prize 1",
                  },
                  {
                      text: "Prize 2",
                  },
                  {
                      text: "Prize 3",
                  },
                  {
                      text: "Prize 4",
                  },
                  {
                      text: "Prize 5",
                  },
                  {
                      text: "Prize 6",
                  },
                  {
                      text: "Prize 7",
                  },
                  {
                      text: "Prize 8",
                  },
              ],
                options:[
                {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Prize 2'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'Prize 2'
                        },
                        {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Prize 3'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'Prize 4'
                        },
                        {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Prize 5'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'Prize 6'
                        },
                        {
                            textFillStyle: '#fff',
                            fillStyle: '#000',
                            text:'Prize 7'
                        },
                        {
                            textFillStyle: '#000',
                            fillStyle: '#fadede',
                            text:'Prize 8'
                        } 
                    ]
          }
      },
      methods:{
        upd(){
            this.$refs.childComponent.resetWheel()
        },
            add() {
                this.values.push({ text: '' });
    
                console.log("add");
            },
            remove(k) {
                this.values.splice(k, 1);
                console.log("remove");
            },
        reset(){
            this.modalShown = !this.modalShown;
            this.$refs.childComponent.resetWheel();
        },
        copy(){
            var copyText = document.getElementById("location");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Copied the text: " + copyText.value);
        },
          loc(){
              alert(this.options[0].text);
            //   console.log(this.one)
            //   return window.location+"?names="+this.one+','+this.two+','+this.three+','+this.four+','+this.five+','+this.six+','+this.seven+','+this.eight;
          },
          initUpdate(){
          },
            update(){
                    // this.model = true; 
                let ValArr = [];
                let num = 0;
                let Arr = [];
                this.options = [];
                this.values.map(function(val){
                    if(val.text != ''){
                        if(num%2 == 0){
                            Arr.push({
                                textFillStyle: '#000',
                                fillStyle: '#fadede',
                                text:val.text
                            })   
                        }else{
                            Arr.push(  {
                                textFillStyle: '#fff',
                                fillStyle: '#000',
                                text:val.text
                            })
                        }
                        ValArr.push(val.text);
                        num ++;
                    }
                })
                this.options = Arr;
                this.name_str = ValArr.join();
                // alert(this.name_str)
                location.href = "/names="+this.name_str;
                // this.$refs.childComponent.initWheel()
                // console.log(this.options[0].text);
            },
            changeVal(){
                // this.message[0].message = "hello message";
                this.options[0].text = "Yes every one";
                
                console.log(this.options[0].text);
            },
            isNames(){
                if(this.$route.query.names){
                    
                    let name_str = this.$route.query.names;
                    alert(name_str);
                    this.name_str = name_str;
                    let names = this.$route.query.names.split(",");
                  
                    this.options = [];
                    this.values = [];
                    let Arr = [];
                    let Val = [];
                    let num = 0;
                    names.map(function(name){ 
                        if(num%2 == 0){
                            Arr.push({
                                textFillStyle: '#000',
                                fillStyle: '#fadede',
                                text:name
                            })   
                        }else{
                            Arr.push(  {
                                textFillStyle: '#fff',
                                fillStyle: '#000',
                                text:name
                            })
                        }
                        Val.push({
                            text: name,
                        })
                        num ++;
                    })
                    this.options = Arr;
                    this.values = Val;
                }else{
                    let ValArr = [];
                    let values = this.values;
                    values.map(function(val){
                        ValArr.push(val.text);
                    });
                    this.name_str = ValArr.join();
    
                }
            }
        },
        mounted(){
            
            if(this.currentUser != ''){
                let names = this.currentUser.replace('names=', '');
                names = names.split(",");
                    this.options = [];
                    this.values = [];
                    let Arr = [];
                    let Val = [];
                    let num = 0;
                    
                    names.map(function(name){ 
                        if(num%2 == 0){
                            Arr.push({
                                textFillStyle: '#000',
                                fillStyle: '#fadede',
                                text:name
                            })   
                        }else{
                            Arr.push(  {
                                textFillStyle: '#fff',
                                fillStyle: '#000',
                                text:name
                            })
                        }
                        Val.push({
                            text: name,
                        })
                        num ++;
                    })
                    
                    this.options =  Arr;
                    this.values = Val;
                  
                }
        }
    }
    </script>