@extends('layout')

@section('content')
    <div class="contnent">
        <form action="{{route('create')}}" method="POST">
            {{ csrf_field() }}
            <label>
                URL:
                <input type="text" name="url">
            </label>
            <button type="submit">
                Shorten URL
            </button>
        </form>
    </div>
@endsection