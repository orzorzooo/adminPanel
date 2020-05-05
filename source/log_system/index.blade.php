@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'Log',
'page_description' => 'Log系統'
])
@slot('page_title_actions')
@endcomponent


@endsection