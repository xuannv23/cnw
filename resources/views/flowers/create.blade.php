@extends('flowers.master')
@section('content')
@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif
<div class="card">
    <div class="card-header">Them moi </div>
    <div class="card-body">
        <form method="POST" action = "{{ route('flowers.store') }} " enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Name</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="name" ></div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Description</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="description"></div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Image URL</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="image_url"></div>
            </div>
            <div class="text-center">
                <a href="{{route('flowers.index')}}" class="btn btn-secondary">Quay lai</a>
                <input type="submit" class="btn btn-primary" value='Them'></input>
            </div>
        </form>
    </div>
</div>
@endsection