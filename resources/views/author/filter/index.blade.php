@extends('layouts.master')
@section('content')

<div class="container py-4">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">Doner</div>
<div class="card-body">
<form action="{{url('search-doner')}}" method="GET">
<div class="input-group">
    <select name="zilla_id" class="form-control">
        @foreach(App\Zilla::all() as $item)
        <option value="{{$item->id}}">{{$item->zilla_name}}</option>
    @endforeach
    </select>
    <select name="thana_id" class="form-control" id="">
        <option value=""></option>
    </select>
    <input type="text" aria-label="First name" class="form-control">
    <input type="submit" value="Find!" class="btn btn-outline-success">
</div>
</form>

{{-- @foreach (App\User::all() as $user) --}}
<div class="col-md-6 justify-content-center py-4">
    <div class="d-flex flex-row">
          <div class="p-0 w-25">
          {{-- <img src="/user/{{$user->avatar}}" class="img-thumbnail border-0" />
          </div>
          <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
          <h4 class="text-primary">{{$user->name}}</h4>
          <h5 class="text-info">{{ $user->bloodgroup }}</h5>
          <h5 class="text-info">{{ $user->phone }}</h5>
        </div> --}}
    </div>
</div>
{{-- @endforeach --}}




</div>
</div>
</div>
</div>
@endsection
@section('footer_js')
<script type="text/javascript">
    $(document).ready(function ()
    {
        $('select[name="zilla_id"]').on('change',function(){
            var thanaID = $(this).val();
            if(thanaID)
            {
                $.ajax({
                    url : 'thanaC/' +thanaID, 
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                    console.log(data);
                    $('select[name="thana_id"]').empty();
                    $.each(data, function(key,value){
                        //$('select[name="subcategory_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        $('select[name="thana_id"]').append('<option value="'+value.id+'">'+value.thana_name+'</option>');
                    });
                    }
                });
            }
            else
            {
                $('select[name="thana_id"]').empty();
            }
        });
    });
</script>
@endsection
