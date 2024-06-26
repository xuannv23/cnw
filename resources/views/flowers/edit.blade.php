@extends('flowers.master')

@section('content')

<div class="card">
    <div class="card-header">Sua thong tin Room</div>
    <div class="card-body">
        <form method="POST" action = "{{ route('flowers.update', $flower->flower_id) }} " enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Name</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="name" value="{{$flower->name}}"></div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Description</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="description" value="{{$flower->description}}"></div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-label-form">Image URL</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="image_url" value="{{$flower->image_url}}"></div>
            </div>
            <div class="text-center">
                <a href="{{route('flowers.index')}}" class="btn btn-secondary">Quay lai</a>
                <input type="submit" class="btn btn-primary" value='Sua'></input>
            </div>
        </form>
    </div>
</div>

@endsection
