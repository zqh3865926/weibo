@extends('layouts.default')
@section('title','所有用户')
@section('content')
  <div class="row">
    <div class="offset-md-2 col-md-8">
      @foreach($users as $user)
        @include('users._user')
      @endforeach
      <div class="mt-3">
          {!! $users->render() !!}
      </div>
    </div>
  </div>
@stop
s