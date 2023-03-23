@extends('template.dashboard')

@section('content'),


<main>
        <div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin')}}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="blogtitle" id="text" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="blogdescription" id="text" class="form-control"></br>
        <label>Post</label></br>
        <input type="text" name="postedby" id="text" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="paragraph" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
    </main>

@endsection