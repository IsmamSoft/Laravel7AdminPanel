@extends('admin.master')

@section('content')
	<main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Customer</strong> <a href="{{route('admin.customers.new')}}" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Add Customer</a></h1>
            <div class="row">


                <div class="col-xl-12 col-xxl-12">
                    <div class="card flex-fill w-100">

                        <div class="card-body">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>Customer Number</th>
                                        <th class="d-none d-md-table-cell">Name</th>
                                        <th class="d-none d-xl-table-cell">Phone</th>
                                        <th class="d-none d-xl-table-cell">Email</th>
                                        <th>Agent</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Customer::all() as $item)
                                    <tr>
                                        <td>{{$item->contact_number}}</td>
                                        <td class="d-none d-md-table-cell">{{$item->name}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->phone}}</td>
                                        <td class="d-none d-xl-table-cell">{{$item->email}}</td>
                                        <td><span class="badge bg-success">{{$item->agent}}</span></td>
                                        <td><a href="http://"><i style="color: #000000;" class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="#"><i style="color: #000000;" class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><a href="http://"><i style="color: #000000;" class="fa-solid fa-trash-can"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </main>
@endsection
