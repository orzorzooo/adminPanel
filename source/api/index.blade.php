@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'API',
'page_description' => 'API列表'
])
@slot('page_title_actions')
@endcomponent


@endsection