@extends('layout')

@section('content')
    <h1>hello welcome to gigs homes</h1>
    <h1>{{$heading}}</h1>

    @unless (count($gigs)===0)
        @foreach ($gigs as $gig)
        <h2>
            <a href="/gig/{{$gig['id']}}">
            {{$gig['title']}}
            </a>
        </h2>
        <p>{{$gig['description']}}</p>
        @endforeach 


    @else
    <p>No gigs found</p>
    @endunless
@endsection

