@extends('flowers.master')
@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{$message}}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center">
        <b>Danh sach loai hoa</b>
    </h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <a href="{{ route('flowers.create') }}" class="btn btn-success "><b>Tao moi</b></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th scope="col">Flower ID</th>
                <th scope="col">Name</th>
                <th scope="col">Mo ta</th>
                <th scope="col">Image url</th>
            </tr>
            @if(count($flowers) > 0)
                @foreach($flowers as $flower)
                    <tr>
                        <td>{{$flower->flower_id}}</td>
                        <td>{{$flower->name}}</td>
                        <td>{{$flower->description}}</td>
                        <td>{{$flower->image_url}}</td>
                        <td>
                            <form action="{{ route('flowers.destroy', $flower->flower_id) }}" method="POST" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('flowers.show', $flower->flower_id) }}" class="btn btn-primary">Xem chi tiet</a>
                                <a href="{{ route('flowers.edit', $flower->flower_id) }}" class="btn btn-warning">Sua</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Xoa" >
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">No data found</td>
                </tr>
            @endif
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function confirmDelete() {
        return confirm('Ban co chac chan muon xoa hoa nay?');
    }
</script>
@endsection