@extends('layouts.admin-main')
@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Item</a>
        </div>
    </div>
    <hr>
    @foreach($items as $item)
        <div class="row">
            <div class="col-md-12">
                <p><strong>{{ $item->name }}</strong>
                    <a href="{{ route('admin.edit', ['id' => $item->id]) }}">Edit</a></p>
                    <a href="{{ route('admin.delete', ['id' => $item->id]) }}">Delete</a></p>
            </div>
        </div>
    @endforeach

@endsection