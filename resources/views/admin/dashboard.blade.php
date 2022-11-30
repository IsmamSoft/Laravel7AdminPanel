@extends('admin.master')

@section('content')

	<main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            <div class="row">
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Sales</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="truck"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">0</h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> 0% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Visitors</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">0</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 0% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Earnings</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="dollar-sign"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">$0</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 0% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Orders</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">0</h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> 0% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">
                       <div class="card-header">Lead</div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Location</th>
                                        <th class="d-none d-xl-table-cell">Start</th>
                                        <th class="d-none d-xl-table-cell">End</th>
                                        <th>Time</th>
                                        <th class="d-none d-md-table-cell">Assignee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach (App\Task::paginate(6) as $task)

                                <tr>
                                    <td>{{$task->task_place}}</td>
                                    <td class="d-none d-xl-table-cell">{{$task->task_start}}</td>
                                    <td class="d-none d-xl-table-cell">{{$task->task_end}}</td>
                                    <td>{{$task->task_time}}</td>
                                    <td class="d-none d-md-table-cell">{{$task->task_assign}}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-6 col-lg-6 col-xxl-7 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Products</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th class="d-none d-md-table-cell">Name</th>
                                    <th class="d-none d-xl-table-cell">Shop</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Customer::all() as $item)
                                <tr>
                                    <td>{{$item->product_number}}</td>
                                    <td class="d-none d-md-table-cell">{{$item->name}}</td>
                                    <td class="d-none d-xl-table-cell">{{$item->shop_name}}</td>
                                    <td><span class="badge bg-success">{{$item->status}}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-xxl-5 d-flex">
                    <div class="card flex-fill w-100">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Task</h5>
                        </div>
                        <div class="card-body d-flex w-100">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Location</th>
                                        <th class="d-none d-xl-table-cell">Start</th>
                                        <th class="d-none d-xl-table-cell">End</th>
                                        <th>Time</th>
                                        <th class="d-none d-md-table-cell">Assignee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach (App\Task::paginate(6) as $task)

                                <tr>
                                    <td>{{$task->task_place}}</td>
                                    <td class="d-none d-xl-table-cell">{{$task->task_start}}</td>
                                    <td class="d-none d-xl-table-cell">{{$task->task_end}}</td>
                                    <td>{{$task->task_time}}</td>
                                    <td class="d-none d-md-table-cell">{{$task->task_assign}}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6 col-lg-6 col-xxl-7 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Customer Table</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Customer Number</th>
                                    <th class="d-none d-md-table-cell">Name</th>
                                    <th class="d-none d-xl-table-cell">Phone</th>
                                    <th>Agent</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Contact::all() as $item)
                                <tr>
                                    <td>{{$item->contact_number}}</td>
                                    <td class="d-none d-md-table-cell">{{$item->name}}</td>
                                    <td class="d-none d-xl-table-cell">{{$item->phone}}</td>
                                    <td><span class="badge bg-success">{{$item->agent}}</span></td>
                                    <td><a href="http://"><i style="color: #000000;" class="fa-solid fa-eye"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-xxl-5 d-flex">
                    <div class="card flex-fill w-100">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Campaign</h5>
                        </div>
                        <div class="card-body d-flex w-100">
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="d-none d-xl-table-cell">Start Date</th>

                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- <tr>
                                        <td>Project Wombat</td>
                                        <td class="d-none d-xl-table-cell">01/01/2021</td>

                                        <td><span class="badge bg-warning">In progress</span></td>

                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



        <!-- Brand -->





<!-- Brand -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="#" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Brand Name</label>
                    <input type="text" name="brand" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>

        </form>


        <form action="#" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Brand Name</label>
                    <select class="form-control" name="brand_name" id="">

                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Status</label>
                    <select class="form-control" name="status" id="">
                        <option value="Brand New">Brand New</option>
                        <option value="Pre-Owned">Pre-Owned</option>
                    </select>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </form>
        </div>
      </div>
    </div>


    {{-- </div> --}}



    @endsection
