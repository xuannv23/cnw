@extends('flowers.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thong tin Flower chi tiet</b></div>
            <div class="col col-md-6">
                <a href="{{ route('flowers.index') }}" class="btn btn-success btn-sm float-end"><b>Xem tat ca danh sach</b></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label  class="col-sm-2 col-label-form"><b>Flower ID</b></label>
            <div class="col-sm-10">
                {{$flower->flower_id}}
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-label-form"><b>Name Flower</b></label>
            <div class="col-sm-10">
                {{$flower->name}}
            </div>
        </div>
        <div class="row mb-4">
            <label  class="col-sm-2 col-label-form"><b>Availability</b></label>
            <div class="col-sm-10">
                {{$flower->description}}
            </div>
        </div>
        <div class="row mb-4">
            <label  class="col-sm-2 col-label-form"><b>Image URL</b></label>
            <div class="col-sm-10">
                {{$flower->image_url}}
            </div>
        </div>
        <a href="{{route('flowers.index')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</div>

@endsection('content')