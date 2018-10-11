@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div>
<pages-loop></pages-loop>
@include('partials.info')
<posts-loop></posts-loop>
</div>
@endsection
