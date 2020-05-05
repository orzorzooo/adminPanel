@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'Export',
'page_description' => '報表輸出系統'
])
@slot('page_title_actions')
@endcomponent


@endsection