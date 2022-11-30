@extends('layouts.master')
@section('content')

<div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Sub-Category View</div>
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
                                <th scope="col">Thana Name</th>
                                <th scope="col">Zilla Name</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php id serial vabe dekhate $s1 = 1 othoba $loop->index+1 @endphp --}}
                            @forelse ($thanas as $key => $subcat)
                            <tr>
                                <td>{{ $thanas->firstItem()+$key }}</td>
                                <td>{{ $subcat->thana_name }}</td>
                                <td>{{ $subcat->zilla->zilla_name}}</td>
                                <td>{{ $subcat->created_at ? $subcat->created_at->diffForHumans() : 'N/A' }}</td>
                                <td>
                                    <a href="{{url('category-edit')}}/{{$subcat->id}}" class="btn btn-info">Edit</a>
                                    <a href="{{url('category-delete')}}/{{$subcat->id}}" class="btn btn-danger">Delete</a>
                                    <a href="{{url('category-view')}}/{{$subcat->id}}" class="btn btn-secondary">View</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="20" class="text-center">
                                    No data found
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $thanas->links() }}
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

                    <form action="{{ url('/ThanaPost')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="categoryInput">Zilla Name</label>
                        <select name="zilla_id" class="form-control">
                            <option>Select One</option>
                            @foreach(App\Zilla::all() as $item)
                                <option value="{{$item->id}}">{{$item->zilla_name}}</option>
                            @endforeach
                        </select>
                        @error('zilla_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categoryInput">Thana Name</label>
                        <input type="text" name="thana_name" class="form-control @error('thana_name') is-invalid @enderror" id="thana_name" placeholder="Enter Thana">
                        @error('thana_name')
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
















