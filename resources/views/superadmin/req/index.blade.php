@extends('layouts.master')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Sub-Category View</div>
            <div class="card-body">
                @if (session('delete'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('delete') }}
                    </div>
                @endif
<table class="table" id="usertable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date</th>
        <th scope="col">Hospital</th>
        <th scope="col">Need Amount</th>
        <th scope="col">Problem</th>
        <th scope="col">Relationship</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
        @foreach (App\RequestBlood::all() as $key=>$item)
      <tr>
      <th>{{ App\RequestBlood::paginate()->firstItem()+$key  }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->created_at ? $item->created_at->diffForHumans() : 'N/A'  }}</td>
        <td>{{ $item->hospital_name }}</td>
        <td>{{ $item->amount }}</td>
        <td>{{ $item->problem }}</td>
        <td>{{ $item->relationship }}</td>
        <td>{{ $item->bloodgroup }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ $item->address }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
            </div>
            </div>
            </div>
            </div>
            </div>
@endsection
@section('footer_js')
<script>
    $(document).ready( function () {
    $('#usertable').DataTable();
});
</script>
@endsection
