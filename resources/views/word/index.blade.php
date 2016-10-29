@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"  style="float:right;">
            <a class="btn btn-info" href="/word/create">
                添加新词
            </a>
        </div>
    </div>

<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <caption>Word Table</caption>
            <thead>
                <th class="text-center">id</th>
                <th>spelling</th>
                <th>part of speech</th>
                <th>pronunciation</th>
                <th>meaning</th>
                <th>operation</th>
            </thead>
            <tbody>
            @foreach($words as $word)
                <tr>
                    <td>{{$word->id}}</td>
                    <td>
                        <a href="/word/{{$word->id}}/show">
                            {{$word->spelling}}
                        </a>
                    </td>
                    <td>{{$word->part_of_speech}}</td>
                    <td>{{$word->pronunciation}}</td>
                    <td>{{$word->meaning}}</td>
                    <td>
                        <a class="btn btn-primary" href="/word/{{$word->id}}/edit">Edit</a>
                        <a class="btn btn-danger" href="/word/{{$word->id}}/delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection