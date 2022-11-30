@extends('layouts.app')
@section('content')

<div class="container">
@foreach ($user as $users)

    <div class="row">
      <div class="col-3">
          <div class="card sha">
            <img src="https://img.apksum.com/93/com.mda.black.wallpapers.hd.dark.background/5.0/icon.png" class="card-img-top" alt="...">
              <div class="card-body">
                <ul class="list-group">
                @if (Auth::user())


                @else <li class="list-group-item">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-success">Message</button>
                            <button type="button" class="btn btn-outline-primary">Follow</button>
                        </div>
                    </li>
                @endif
                    <li class="list-group-item">{{ $users->name }}</li>
                    <li class="list-group-item">{{ $users->email }}</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
              </div>
          </div>
      </div>


      <div class="col-9">
        <div class="card sha">
            <img src="https://img.apksum.com/93/com.mda.black.wallpapers.hd.dark.background/5.0/icon.png" style="height: 248px;" alt="...">
            <div class="card-body">
                djfhskdjf
            </div>
        </div>
      </div>
    </div>

    @endforeach
  </div>

@endsection
