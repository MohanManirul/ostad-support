<ul>
    @foreach($learnerKey as $each)
        <li><b>First name:</b> {{$each['fname']}}  <b>Last name:</b>{{$each['lname']}}</li>
    @endforeach
</ul>
