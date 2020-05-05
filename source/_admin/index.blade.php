@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'Admin',
'page_description' => '管理者權限設定'
])
@slot('page_title_actions')
@endcomponent


@endsection