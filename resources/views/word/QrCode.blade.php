@extends('partials.layout')

@section('content')
    <div class="visible-print text-center">
        {!! QrCode::size(100)->generate('https://www.baidu.com'); !!}
        <p>
            Scan me to return to hte original page.
        </p>
    </div>
@stop

