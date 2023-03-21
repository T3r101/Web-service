@extends('template.dashboard')

@section('content'),


<main>
        <div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin')}}" method="post">
        {!! csrf_field() !!}
        <label>title</label></br>
        <input type="text" name="blogtitle" id="text" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="blogdescription" id="text" class="form-control"></br>
        <label>post</label></br>
        <input type="text" name="postedby" id="text" class="form-control"></br>
        <label>date</label></br>
        <input type="text" name="date" id="paragraph" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
    </main>

@endsection