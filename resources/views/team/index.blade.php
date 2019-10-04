@extends('layouts.app')

@section('content')
    <div class="">
        <nav-component></nav-component>
        <team-member-component :leader="{{ json_encode($leader) }}"></team-member-component>
    </div>
@endsection
