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
    
    foreach ($name as $n) {
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
<div style="min-height: 1000px;">

    <example-component v-bind:options="{{ json_encode($Arr) }}" ></example-component>

</div>
@endsection

