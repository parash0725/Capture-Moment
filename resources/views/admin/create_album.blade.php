@extends('admin.layout')

@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form method="post" action="{{route('admin.albums.save')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Album Title</label>
                    <input type="text" class="form-control" name="title"
                    >
                </div>
                <div class="form-group">
                    <label for="">Discription</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Cover Image</label>
                    <input type="file" name="cover_image" class="form-control">
                </div>
                <input type="submit" value="Save" name="save" class="btn btn-success">
            </form>
        </div>
    </div>
</section>

@endsection