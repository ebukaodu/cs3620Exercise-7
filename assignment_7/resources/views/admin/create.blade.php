@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.create') }}" method="post">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="content">Detail</label>
                    <input type="text" class="form-control" id="detail" name="detail">
                </div>
                <div class="form-group">
                    <label for="content">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                @foreach($tags as $tag)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection