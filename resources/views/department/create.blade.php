@extends('layouts.app')
@section('content')
<div class="container">
    <form action="" method="POST">
        @csrf

        <div class="mb-3">
            <label for="dep_name" class="form-group">Department name:</label>
            <input type="text" name="dep_name" id="dep_name" class="form-control" validate>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection