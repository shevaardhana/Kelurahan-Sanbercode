@extends('layouts.backend.master')

@section('title', 'Buat Tags')
@push('after-style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
@endpush

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Tambah Tags</h1>
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
        <form action="{{ route('tags.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <div class="form-group">
                <label for="news_id">Judul Berita</label>
                <select name="news_id" class="form-control" required>
                    <option value="">Pilih Judul Berita</option>
                    @foreach ($news as $berita)
                        <option value="{{ $berita->id }}">
                            {{ $berita->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tag_name">kategori</label>
                <input type="text" class="form-control" name="tag_name" placeholder="pisahkan dengan koma" 
                       value="{{ old('tag_name')}}" required>
            </div>            
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
     </div>
    </div>
</div>
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
