<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-237419179-1">
  </script>
  <script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-237419179-1');
  </script>

  <link rel="stylesheet" href="{{ asset('admin/css/app.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <style>
      .sidebar-item{
          font-size: 18px;
      }
  </style>
</head>
<body>


    <div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{url('/')}}">
               <span class="align-middle">Admin</span>
                </a>
				<ul class="sidebar-nav">
					<li class="sidebar-item">{{-- <li class="sidebar-item active"> --}}
                        <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                        <i class="fa-solid fa-gauge align-middle"></i><span class="align-middle">Dashboard</span>
                        </a>
					</li>


					<li class="sidebar-item">
						<a href="{{route('admin.customers')}}" class="sidebar-link collapsed">
							<i class="fa-solid fa-bars-progress"></i><span class="align-middle">Customer</span>
						</a>

					</li>






					<li class="sidebar-item">
						<a data-bs-target="#seo" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="fa-solid fa-folder-tree align-middle"></i><span class="align-middle">SEO</span>
						</a>
						<ul id="seo" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							{{-- <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.seo')}}"><i class="fa-solid fa-circle"></i> Google</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.seo')}}"><i class="fa-solid fa-circle"></i> Bing</a></li> --}}
						</ul>
					</li>

                    <li class="sidebar-item">
						<a data-bs-target="#Site" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="fa-solid fa-sitemap align-middle"></i> <span class="align-middle">Site</span>
						</a>
						<ul id="Site" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							{{-- <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.address')}}"><i class="fa-solid fa-circle"></i> Address</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.faq')}}"><i class="fa-solid fa-circle"></i> FAQ</a></li> --}}
						</ul>
					</li>
				</ul>
			</div>
		</nav>


		<div class="main">
			<nav class="navbar navbar-expand fixed-top navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
                </a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#task">
                                Add Task
                            </button>
                        </li>

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">0</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									0 New Notifications
								</div>
								<div class="list-group">

								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <span class="text-dark">{{Auth::user()->name}}</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">


                                <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">

                    @yield('content')

			</main>
        </div>






<div class="modal fade" id="task" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Task For</label>

                    @php
                        $users = App\User::where('urole', 'author')->get();
                    @endphp
                    <select name="task_assign" class="form-control">
                        @foreach ($users as $user)
                         <option value="{{$user->name}}">{{$user->name}}</option>
                        {{-- <input type="text" name="task_assign" class="form-control"> --}}
                        @endforeach
                    </select>

                  </div>

                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Task Start</label>
                    <input type="date" name="task_start" class="form-control">
                  </div>

                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Task End</label>
                    <input type="date" name="task_end" class="form-control">
                  </div>

                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Task Time</label>
                    <input type="time" name="task_time" class="form-control">
                  </div>

                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Task</label>
                    <textarea name="task_work" class="form-control"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Task Location</label>
                    <input type="text" name="task_place" class="form-control">
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </form>
        </div>
      </div>
    </div>








<script src="{{ url('admin/js/app.js')}}"></script>

@yield('footer_js')
<!-- overlayScrollbars -->
<script>
    function myFunction() {
        if(!confirm("Confirm Delete?"))
        event.preventDefault();
    }
</script>
</body>
</html>
