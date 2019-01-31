@extends('layouts.app')
@section('title','Home')
    
@section('content')
    
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam repellendus magnam recusandae sapiente asperiores eum doloribus voluptatem accusantium iure, dolores modi incidunt! Perferendis, modi. Tempore ipsam odit non voluptates quia.</p>
@endsection
@section('sidebar')
@parent
<p>This is append to sidebar</p>
    
@endsection