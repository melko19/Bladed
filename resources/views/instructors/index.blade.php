@extends('base')

@section('content')

<h1>Instructors</h1>

<table class="table table-bordered table-striped table-sm">

    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Expertise</th>
            <th>Rating</th>
        </tr>
    </thead>

    <tbody>
        @foreach($instructors as $intr)

        <tr>
            <td>{{$intr->lname}}</td>
            <td>{{$intr->fname}}</td>
            <td>{{$intr->aoe}}</td>
            <td>{{$intr->rating}}</td>
        </tr>

    @endforeach
    </tbody>

</table>

@stop