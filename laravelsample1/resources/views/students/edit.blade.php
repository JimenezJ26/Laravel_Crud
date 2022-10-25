@extends('students.layout')
@section('content')
<div class="card" style="margin:50px;">
    <div class="card-header"><h2>Edit Student</h2></div>
    <div class="card-body">

    <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id"/></br>
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"/>
        <label>Address</label>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"/>
        <label>Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"/>
</br>
               <input type="submit" value="Update" class="btn btn-success"/>
    </form>

    </div>
</div>

@stop