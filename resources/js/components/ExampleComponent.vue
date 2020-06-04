<template>
    <div >
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
    <div class="container">
    <section class="vue-winwheel">
			<div class="mobile-container">
    	            <h1 style="    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;


">Wheel Decide Pro</h1>
            </div>
    </section>

       <VueWinwheel :segments="options"   ref="childComponent" />
    </div>
    <div class="container-fluid">
    
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
            <!-- <tr>
                <td style="text-align: center;">
                    <input type="text" v-model="location" id="location"> <button type="button" class="btn btn-primary" @click="copy()">Copy</button>
                </td>
            </tr> -->
        </table>
    </div> 


<!-- <div cla
ss="container-fluid"> -->

    <div class="card" style="border: none; padding: 20px;">
        <div class="card-body">
         <h1 class="h3">Wheel Decide</h1>
         <h3 class="h4">Overview</h3>
         <p class="p">
         Wheel Decide is an online spinner tool that is free for everyone. It is an exciting free online tool that is used for multiple purposes for easy decision making or spending quality time with your computer. You can create and customize your own digital wheel not just for decision making but also for many others’ use. Your required categories are created with different colors to make them separate and good looking. Wheel Decide builder is a simple tool, you just need to select your categories while the rest of all difficult things to move the wheel and selection of dice will be done automatically. If you are confused about deciding something, all you need to do is just to touch the wheel and let the wheel decide for you. A lot of people have played the same kind of game in their childhood, having a spinning board with different categories and the player throws a needle to select one of the categories while the wheel is moving. Wheel Decide was born in 2012 to help for decision making when coin just doesn’t have enough sides. It is helping out thousands of users to make decisions on a daily basis. It has many other aspects and has also proved to be an engaging tool in many fields like education, entertainment, and business as well. 
         </p>
         <h3 class="h4">What can we create?</h3>
         <p class="p">Wheel decide gives us the opportunity to create a customized wheel to enter up to 100 choices. Give a name to your wheel to write the wheel title. You can also remove a choice after it is landed on. You can select or change the following things according to your own choice:</p>
            <ul>
                <li>Color of theme</li>
                <li>Seconds to spin</li>
                <li>Wheel diameter (100 to 3000 pixels)
                </li>
                <li>Wheel diameter (100 to 3000 pixels)
                </li>
                <li>Text colors</li>
                <li>Weights</li>
                <li>In this way you can build a lovely wheel to play with it.</li>  
            </ul>
            <h3 class="h4">Decision Making
            </h3>
            <p class="p">
                    You can save your energy for the big decisions to allow the Wheel Decide to decide for you. The simplest way to make a decision is to flip the coin but a coin has only two sides, it means that you can make a decision just yes or no. On the other hand, Wheel Decide allows you to flip a coin with up to 100 sides. You can easily settle contentions between your loved one, friends, or family members on decisions like where to go for dinner, what movie to watch, which team will win or what to do.   
            </p>
            <h3 class="h4">Games
            </h3>
            <p>
                You can use Wheel Decide as a tool for versatile fun games.  You can create one of the best games for you under quarantine while using the spinning wheel. Everything is going to be digitalized then why not games. Digital games are popular among kids, teens and older people as well. It is one of the most growing computing fields. Even universities are offering degrees in the field of games development. It’s time to replace your old board games like dice, spinners and playing card with the latest digital Wheel Decide games. If you are organizing an event, just spin the wheel of different categories to get greater involvement of the audience and break the monotony of old practice linear experience. Wheel Decide makes you innovative to build different kinds of games like name pickers, traveling destinations selection, what to do, what to eat, zodiac signs and many more.
            </p>

            <h3 class="h4">Tools</h3>
            <p class="p">Wheel Decide is an innovative tool and it is fast and easy to create. It is up to the users how effectively they use it. When you have plenty of things to do and the priority level is the same, no doubt it is difficult to decide but you don’t need to worry just spin a wheel off to-do list and let the Wheel Decide to make decisions for you. It is amazing to select a task in a random order without thinking about it. Wheel Decide is a wise tool. You can allow this tool to let you decide your fortune or tell other’s fortune with the help of a spinning wheel.</p>
            <h3 class="h4">Business</h3>
            <p class="p">From a business point of view, it is a great tool to promote your business in different and unique ways. You can make online prize wheels to administer prize giveaways, promotions and contests. With this innovative tool, you can adopt a digital lifestyle to distribute sales incentives, free gifts and discounts in a unique manner and indulge your employees. Your custom wheel can be used to captivate audiences in conferences, trade shows and presentations. Simple PowerPoint slides lack this kind of interaction while spinning wheels have a great interaction in this regard. You can simply project a wheel for all to see in your event rather to take hassle for expensive equipment or ticketing systems. You don’t need to make any special kinds of software or hardware to organize it. </p>
            <h3 class="h4">
                Developers and Publishers
            </h3>  
            <p class="p">Wheel Decider is not just for fun it can add value to your website. You can easily integrate it with your website to experience the more engaging behavior of your website users. A customized wheel allows you to embed it with your professional logo. It is a great visual element to use in videos. Wheel Decide also has gained popularity on YouTube. You can encourage your website traffic to involve in different activities to use Wheel Decide. You can also interact with users to promote the app of Wheel Decide. Wheel Decide App could be really helpful to engage Android and other kinds of smartphone users. </p>
            <h3 class="h4">Education</h3>
            <p class="p">Education is an important sector that is using the latest tools and techniques to make education easy and understandable. Many different kinds of experiments are taken. Wheel Decide is also a great tool to use in the education sector. You can create a wheel of class students’ names and spin to randomly select a student to participate in the class activity. You can also build a wheel of different questions, spin it to shuffle the questions randomly. Another way to engage students in a classroom could be that you can make small groups of students and assign names then make a wheel of these student groups to assign tasks randomly. There could be many other ways to deal with Wheel Decide to create value in an innovative manner. </p>
            <!-- <ul>
                <li>Scroll down to the 'Edit wheel' section.
                </li>
                <li>In the text box, you can edit the words or names that are displayed on the wheel. Simply select and remove everything and put your own entries in it. Each entry should be on a new line or separated by a comma.
                </li>
                <li>Click on the 'Update' button. When clicking on it, a new name roulette wheel will be generated.
                </li>
            </ul>
            <h3 class="h4">Can I share or save it?
            </h3>
            <p class="p">As soon as you add new names, words, places, brands and update the wheel a new share URL will be generated. It will show up in the text field underneath the 'Update' button. Either copy the URL manually or click on the 'Copy wheel' button. You can give this link to your friends, family, teachers, co-workers or use it yourself later on. Just paste the link in your browser can go the URL and we will automatically set up the wheel.

            </p> -->
        </div>
      </div>
<!-- </div> -->
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
      props:['options'],
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
              wheel_name:'Wheel Decide Pro',
            renderComponent: true,
              name_str : '',
            //   values: [{
            //           text: "Prize 1",
            //       },{
            //           text: "Prize 2",
            //       }],
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
                // options:[
                // {
                //             textFillStyle: '#fff',
                //             fillStyle: '#000',
                //             text:'Prize 2'
                //         },
                //         {
                //             textFillStyle: '#000',
                //             fillStyle: '#fadede',
                //             text:'Prize 2'
                //         },
                //         {
                //             textFillStyle: '#fff',
                //             fillStyle: '#000',
                //             text:'Prize 3'
                //         },
                //         {
                //             textFillStyle: '#000',
                //             fillStyle: '#fadede',
                //             text:'Prize 4'
                //         },
                //         {
                //             textFillStyle: '#fff',
                //             fillStyle: '#000',
                //             text:'Prize 5'
                //         },
                //         {
                //             textFillStyle: '#000',
                //             fillStyle: '#fadede',
                //             text:'Prize 6'
                //         },
                //         {
                //             textFillStyle: '#fff',
                //             fillStyle: '#000',
                //             text:'Prize 7'
                //         },
                //         {
                //             textFillStyle: '#000',
                //             fillStyle: '#fadede',
                //             text:'Prize 8'
                //         } 
                //     ]
          }
      },
      methods:{
        upd(){
            this.$refs.childComponent.resetWheel()
        },
            add() {
                this.values.push({ text: '' });
     
            },
            remove(k) {
                this.values.splice(k, 1); 
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

                    let names = this.options;
                    this.values = [];
                    let Arr = [];
                    let Val = [];
                    let num = 0;
                    
                    names.map(function(name){ 
                        Val.push({
                            text: name.text,
                        })
                        num ++;
                    })
                    this.values = Val;
                   
        }
    }
    </script>
    <style scoped>
        #addQuestion{
            width: 100%;
            color: #333333;
            margin: 0 auto;
            padding: 10px 0;
            align-items: center;
            justify-content: space-around;
            display: flex;
            float: none;
        }
    </style>