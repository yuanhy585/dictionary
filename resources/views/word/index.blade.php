@extends('partials.layout')

@section('content')
<div class="container">
    <h2>Word Table</h2><br/><br/>
    <div class="row col-md-12">
        <form class="form-inline" action="/word" role="form">
            <div class="form-group" style="float:left;" >
                <input type="text" class="form-control" name="findByUserName"
                       placeholder="请输入查询关键字"/>
                <button type="submit" class="btn btn-primary">
                    搜索
                </button>
            </div>
        </form>

        <div style="float:right;">
            <a class="btn btn-info" href="/word/create">
                添加新词
            </a>
        </div>
        <br/><br/><hr/>
    </div>

<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">id</th>
                <th>spelling</th>
                <th>part of speech</th>
                <th>pronunciation</th>
                <th>meaning</th>
                <th>user</th>
                <th>operation</th>
            </tr>
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
                    @if(App\User::where('id',$word->user_id)->first())
                        <td>{{App\User::where('id',$word->user_id)->first()->name}}</td>
                    @else
                        <td></td>
                    @endif
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
    {!! $words->appends(['select'=>isset($a)?json_encode($a):""])->render() !!}
</div>
@endsection