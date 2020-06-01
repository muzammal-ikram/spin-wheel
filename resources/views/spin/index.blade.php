@extends('layouts.app')
@section('content')
{{-- {{dd($name)}} --}}
@php
if($name != null){

    $name = str_replace("names=","",$name); 
    $num = 0; 
    $Arr = [];
    $Val = [];
    $name = explode(',', $name);

    $name = array_chunk($name, 3);
    // dd($name);
    foreach ($name as $n) {
        // if($num%2 == 0){
        //     array_push($Arr, [
        //             'textFillStyle'=>'#000',
        //             'fillStyle'=> '#fadede',
        //             'text'=>$n
        //         ]);
        //     }else{
        //         array_push($Arr, [
        //             'textFillStyle'=> '#fff',
        //             'fillStyle'=> '#000',
        //             'text'=>$n
        //         ]);
        //     }
        foreach ($n as $key=> $value) {
            
               if($key==0){
                    array_push($Arr, [
                        'textFillStyle'=> '#fff',
                        'fillStyle'=> '#000',
                            'text'=>$value
                    ]);
               }elseif($key==1){
                array_push($Arr, [
                    'textFillStyle'=> '#000',
                    'fillStyle'=> '#fadede',
                    'text'=>$value
                ]);
               }else{
                array_push($Arr, [
                    'textFillStyle'=> '#fff',
                    'fillStyle'=> 'grey',
                    'text'=>$value
                ]);
               }
               array_push($Val, [
                    'text'=> $value,
                ]);
                $num ++;
        }
           
    }

}else{
    $Arr = [
                [
                    'textFillStyle'=> '#fff',
                    'fillStyle'=> '#000',
                    'text'=> 'Prize 1'
                ],
                [
                    'textFillStyle'=> '#000',
                    'fillStyle'=> '#fadede',
                    'text'=> 'Prize 2'
                ],
                [
                    'textFillStyle'=> '#fff',
                    'fillStyle'=> 'grey',
                    'text'=> 'Prize 3'
                ],
                [
                    'textFillStyle'=> '#000',
                    'fillStyle'=> '#fadede',
                    'text'=> 'Prize 4'
                ],
                [
                    'textFillStyle'=> '#fff',
                    'fillStyle'=> '#000',
                    'text'=> 'Prize 5'
                ],
                [
                    'textFillStyle'=> '#000',
                    'fillStyle'=> 'grey',
                    'text'=> 'Prize 6'
                ],
                [
                    'textFillStyle'=> '#fff',
                    'fillStyle'=> '#000',
                    'text'=> 'Prize 7'
                ],
                [
                    'textFillStyle'=> '#000',
                    'fillStyle'=> '#fadede',
                    'text'=> 'Prize 8'
                ],
];

    $Val = [
        [
            'text'=> "Prize 1",
        ],
        [
            'text'=> "Prize 2",
        ],
        [
            'text'=> "Prize 3",
        ],
        [
            'text'=> "Prize 4",
        ],
        [
            'text'=> "Prize 5",
        ],
        [
            'text'=> "Prize 6",
        ],
        [
            'text'=> "Prize 7",
        ],
        [
            'text'=> "Prize 8",
        ],
];
}
@endphp
<script type="application/javascript">
var options = [{
                textFillStyle: '#fff',
                fillStyle: '#000',
                text:'Prize 2'
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
        ];
</script>
<example-component v-bind:options="{{ json_encode($Arr) }}" ></example-component>
      

<div class="container-fluid">

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
</div>

@endsection

