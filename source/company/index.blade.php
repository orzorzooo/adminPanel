@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'Company',
'page_description' => '廠商列表'
])
@slot('page_title_actions')
@endcomponent


@endsection