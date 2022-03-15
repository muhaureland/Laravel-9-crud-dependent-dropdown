@extends('template.main')
@section('container')
<div class="container my-5">
    <h1 class="fs-5 fw-bold my-4 text-center">How to Create Dependent Dropdown in Laravel</h1>
    <div class="row">
        <form action="{{ route('satuan.store') }}" method="post">
            @csrf
            @include('satuan._form')
        </form>
    </div>
</div>
@endsection