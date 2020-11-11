@extends('base')

@section('content')

<h1>Learners</h1>

<table class="table table-bordered table-striped table-sm">

    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($learners as $lrns)

        <tr>
            <td>{{$lrns->lname}}</td>
            <td>{{$lrns->fname}}</td>
            <td>{{$lrns->level}}</td>
            <td>{{$lrns->status}}</td>
        </tr>

    @endforeach
    </tbody>

</table>

@stop