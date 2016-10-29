@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-offset-2"  style="text-align:left;">
            <h3 style="color:blue;text-align: center;">
                Information of a Word
            </h3>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    Spelling:
                </div>
                <div class="panel-body">
                    {{$word->spelling}}
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    pronunciation:
                </div>
                <div class="panel-body">
                    {{$word->pronunciation}}
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    meaning:
                </div>
                <div class="panel-body">
                    {{$word->meaning}}
                </div>
            </div>

            <div>
                <a type="button" class="btn btn-primary" href="/word">
                    Back to Wordlist
                </a>
            </div>
        </div>
    </div>
</div>
@endsection