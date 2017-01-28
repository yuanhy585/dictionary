@extends('partials.layout')

@section('content')
    <div class="visible-print text-center">
{{--        {!! QrCode::size(100)->generate('https://www.baidu.com'); !!}--}}
        {!! QrCode::size(100)->encoding('utf-8')->color(255,0,255)->backgroundColor(255,255,0)
        ->generate('你好，Laravel学院！'); !!}

        <p>
            Scan me to return to the original page.
        </p>
    </div>
@stop

