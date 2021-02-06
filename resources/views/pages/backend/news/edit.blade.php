@extends('layouts.backend.master')

@section('title', 'Ubah Berita')

@push('after-style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
@endpush
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Berita  {{ $item->title }} </h1>
    </div>

    <!-- Munculkan error -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <!-- Card Form tambah berita -->
  <div class="card shadow">
    <div class="card-body">
        <form action="{{ route('news.update', $item->id) }}" method="POST" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}" required>
            </div>
            <div class="form-group">
                <label for="location">Lokasi</label>
                <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ $item->location }}" required>
            </div>
            <div class="form-group">
                <label for="descriptions">Deskripsi</label>              
                <textarea name="descriptions" id="descriptions" class="form-control my-editor">
                {{ $item->descriptions }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" class="form-control" name="date" placeholder="Tanggal Publish" value="{{ $item->date }}" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
     </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection

@push('after-scripts')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: 'textarea.my-editor',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endpush

