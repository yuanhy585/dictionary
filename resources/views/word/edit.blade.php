@extends('partials.layout')

@section('content')
<div class="container">
    <form action="/word/{{$word->id}}/update" method="put">

        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

        <div class="col-md-10 col-md-offset-1" style="text-align: left;">
            <h4>Spelling:</h4>
            <input type="text" class="form-control" name="spelling"
                   value="{{$word->spelling}}"/>
            <br/><br/>
        </div>

        <div class="col-md-10 col-md-offset-1" style="text-align: left;">
            <h4>Spelling:</h4>
            <input type="text" class="form-control" name="pronunciation"
                   value="{{$word->pronunciation}}"/>
            <br/><br/>
        </div>

        <div class="col-md-10 col-md-offset-1" style="text-align: left;">
            <h4>Spelling:</h4>
            <input type="text" class="form-control" name="meaning"
                   value="{{$word->meaning}}"/>
            <br/><br/>
        </div>

        <div class="col-md-10 col-md-offset-1" style="text-align: left;">
            <button type="submit" class="btn btn-primary">确认修改</button>
            <button type="button" class="btn btn-danger">取消修改</button>
        </div>

    </form>
</div>
@endsection