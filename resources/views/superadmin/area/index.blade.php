@extends('layouts.master')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Area View</div>
                {{-- <a href="{{url('category-trash')}}">Trash</a> --}}
                <div class="card-body">
                    @if (session('delete'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('delete') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Zilla Name</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php id serial vabe dekhate $s1 = 1 othoba $loop->index+1 @endphp --}}
                            @foreach (App\Zilla::all() as $key => $item)
                            <tr>
                                <td>{{ App\Zilla::paginate()->firstItem()+$key }}</td>
                                <td>{{ $item->zilla_name }}</td>
                                <td>{{ $item->created_at ? $item->created_at->diffForHumans() : 'N/A' }}</td>
                                <td>
                                    <a href="{{url('category-edit')}}/{{$item->id}}" class="btn btn-info">Edit</a>
                                    <a href="{{url('category-delete')}}/{{$item->id}}" class="btn btn-danger">Delete</a>
                                    <a href="{{url('category-view')}}/{{$item->id}}" class="btn btn-secondary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $zillas->links() }} --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Category</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message')}}
                        </div>
                    @endif

                    <form action="{{ url('/ZillaInsert')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="categoryInput">Zilla Name</label>
                            <input type="text" name="zilla_name" class="form-control @error('zilla_name') is-invalid @enderror" id="zilla_name" placeholder="Enter Zilla">
                            @error('zilla_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                             </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
