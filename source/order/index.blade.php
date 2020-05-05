@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'Order',
'page_description' => '訂單管理系統'
])
@slot('page_title_actions')
@endcomponent


@endsection