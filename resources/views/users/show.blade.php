@extends("layouts.default")
@section("title", $user->name)
@section("content")
  @include("shared._messages")
  <div class="gravatar">
    @include("shared._user_info", ["user" => $user])
  </div>
@stop