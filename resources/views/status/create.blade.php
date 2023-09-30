@extends('layouts.app')
@section('content')
<div class="container">
    @csrf

    <form action="" method="post">
        <div class="mb-3">
            <label for="status_name" class="form-group">Status name:</label>
            <input type="text" id="status_name" id="status_name" class="form-control" validate>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection