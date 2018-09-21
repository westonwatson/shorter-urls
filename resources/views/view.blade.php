@extends('layout')

@section('content')
    <div class="contnent">
        Link: {{ $link->id }}
    </div>
    <div class="content">
        <a href="{{ $short_url }}">{{ $short_url }}</a>
        &nbsp;
        <span class="click" data-clipboard-text="{{ $short_url }}">(COPY LINK)</span>
    </div>
@endsection