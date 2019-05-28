@extends('master')
@section('content')
<h1>Guest</h1>
<table class="tb">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>
    @foreach($customer as $cus)
    <tr>
        <td>{{$cus->id}}</td>
    <td>{{$cus->name}}</td>
    <td>{{$cus->gender}}</td>
    <td>{{$cus->email}}</td>
    <td>{{$cus->address}}</td>
    <td>{{$cus->phone_number}}</td>
    </tr>
    @endforeach
</table>
@endsection