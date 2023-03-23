@extends('template.dashboard')

@section('content'),


<main>
        <div class="card">
  <div class="card-body">
      
      <form action="{{url('/admin/'.$blogs->id)}}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blogs->id}}" id="id" />
        <label>Blogtitle</label></br>
        <input type="text" name="lead" id="name" value="{{$blogs->blogtitle}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="heading" id="name" value="{{$blogs->blogdescription}}" class="form-control"></br>
        <label>Postedby</label></br>
        <input type="text" name="post" id="name" value="{{$blogs->postedby}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="desc" id="name" value="{{$blogs->date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
    </main>

@endsection