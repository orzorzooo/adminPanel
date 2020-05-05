@extends('_layouts.layout')

@section('content')
@component('_components.page_title',[
'page_title' => 'Dashboard',
'page_description' => 'Some Description Here'
])
@slot('page_title_actions')
@endcomponent


@endsection
{{-- 
@extends('_layouts.master')

@section('body')
<h1>test</h1>
@endsection --}}