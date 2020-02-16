@extends('layouts.layout1')

@section('content1')
<h1>Welcome to {{config('app.name')}} project</h1>
<h2>Welcome to {{$val}} project</h2>
<ul class='list-group'>
    @foreach($data as $row)
        <li>
            {{$row}}
        </li>
    @endforeach
</ul>
@endsection