<h1>Home</h1>

{{$x+$y}}
<ul>
    @foreach($learnerKey as $each)
        <li><b>First name:</b> {{$each['fname']}}  <b>Last name:</b>{{$each['lname']}}</li>
    @endforeach
</ul>

<hr/>

<h1>1 to 100</h1>
@for($i=0;$i<10;$i=$i+1)
     Item Number {{$i}} <br/>
@endfor


<hr/>

<h1>Simple Math</h1>
{{2+2}}<br/>
{{20-2}}<br/>
{{20/2}}<br/>
{{2*2}}<br/>

<hr/>

<h1>Raw PHP Inside Balde Template Engine </h1>

@php
    $num1=10;
    $num2=20;
    echo $num1+$num2;
@endphp

@env('local')
    <script src="https://localhost/dev-script.js"></script>
    <p>Debugging enabled. (Local env)</p>
@endenv

@env('production')
    <script src="https://production.com/script.js"></script>
    <p>production environment</p>
@endenv
<hr/>
<h1>Including Child/Subview </h1>

@include('component.hero',['num1'=>$num1,'num2'=>$num2])
@include('component.contact')
@include('component.features')
@include('component.learner')

<hr/>

<h1>working with if else </h1>
@php
$marks=50
@endphp

@if($marks<=100 && $marks>=80)
    <h3>A+</h3>
@elseif($marks<80 && $marks>=70)
    <h3>A</h3>
@elseif($marks<70 && $marks>=60)
    <h3>A-</h3>
@else
    <h3>Fail</h3>
@endif



<hr/>

<h1>Static Assets</h1>
<img alt="img" width="300" height="150" src="{{asset('https://cdn.ostad.app/course/cover/2024-02-12T07-05-32.659Z-Mern%20Thumb%20copy%20(1).jpg')}}">
<img alt="img" width="300" height="150" src="{{asset('photos/img-1.jpg')}}">





