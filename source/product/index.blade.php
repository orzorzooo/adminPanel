@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'product',
'page_description' => '商品列表'
])
@slot('page_title_actions')
@endcomponent


@endsection