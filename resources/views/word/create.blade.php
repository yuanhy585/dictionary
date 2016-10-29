@extends('partials.layout')

@section('content')

<div class="container">
    <h3>Create your word here</h3>
    <form action="/word/store" method="post">

        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

        <div class="col-md-10 col-md-offset-1">
            <h4 style="float:left;">Spelling Input :</h4><br/>
            <input type="text" class="form-control" name="spelling" />
        </div>

        <div class="col-md-10 col-md-offset-1">
            <h4 style="float:left;">Part of Speech Input :</h4><br/>
            <input type="text" class="form-control" name="part_of_speech" />
        </div>

        <div class="col-md-10 col-md-offset-1">
            <h4 style="float:left;">Pronunciation Input :</h4><br/>
            <input type="text" class="form-control" name="pronunciation" />
        </div>

        <div class="col-md-10 col-md-offset-1">
            <h4 style="float:left;">Meaning Input :</h4><br/>
            <input type="text" class="form-control" name="meaning" />
        </div>

        <div class="col-md-12" style="margin:10px 0px;">
            <button type="submit" name="submit" class="btn btn-primary">
                submit
            </button>
            <button type="button" class="btn btn-danger">
                cancel
            </button>
        </div>
    </form>
</div>
@endsection