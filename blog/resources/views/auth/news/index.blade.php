@extends('layouts/app')
@section('content')
<div class="container">
    <form method="POST" action="/home/news/store">
        <div class="form-group">
            <label for="img">IMG</label>
            <input type="text" class="form-control" id="img"  neame="title">

          </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" neame="title">

        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input type="text" class="form-control" id="content" name="content">
        </div>

        <button type="text" class="btn btn-primary">Submit</button>
      </form>

</div>

@endsection
