@extends('layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="mt-2">
    <div class="edit_model_heading">
        <h5 class="text-center">Create {{ucfirst($model)}}</h5>
    </div>
    <br>
    <div class="view_button">
        <a href="{{url('admin/'.$model)}}" class="btn btn-primary btn-sm">View {{ucfirst($model)}}</a>
    </div>
    <form action="{{url('admin/'.$model)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @forelse($columns as $column)

            <div class="form-group {{ $errors->has($column) ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3">
                <label for="{{$column}}" class="control-label">{{ucfirst(str_replace('_',' ',$column))}}</label>
                <input type="text" class="form-control" name="{{$column}}" id="{{$column}}" placeholder="{{ucfirst(str_replace('_',' ',$column))}}" value="{{old($column)}}">
                @if ($errors->has($column))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first($column) }}</strong>
                </span>
                @endif
            </div>

            @empty
            @endforelse

            @if($model=='product')
            @include('layouts.data.thumbnail')
            @include('layouts.product.partial')
            @endif

            @if($model=='user')
            @include('layouts.data.thumbnail')
            @endif

            @if($model=='slider')
            @include('layouts.data.thumbnail')
            @endif

            @if($model=='contact')
            @include('layouts.data.thumbnail')
            @endif

            @if($model=='course')
            @include('layouts.data.thumbnail')
            @include('layouts.data.description')
            @endif

            @if($model=='support')
            @include('layouts.data.thumbnail')
            @include('layouts.data.description')
            @endif

            @if($model=='about')
            @include('layouts.data.thumbnail')
            @include('layouts.data.description')
            @endif

            @if($model=='service')
            @include('layouts.data.thumbnail')
            @include('layouts.data.description')
            @endif

            @if($model=='category')
            @include('layouts.category.partial')
            @endif

            <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-5" style="order: 20;">
                <input type="submit" class="form-control btn btn-success" value="Submit">
            </div>
        </div>
    </form>
</div>
@endsection
@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // tinymce.init({
    //     selector: 'textarea'
    // });
    $("#parent_id").select2({
        placeholder: "Select One",
        allowClear: true
    })
    $("#division_id").select2({
        placeholder: "Select One",
        allowClear: true
    })
    $("#district_id").select2({
        placeholder: "Select a Country",
        allowClear: true
    })
    $("#checking_place_id").select2({
        placeholder: "Select a District",
        allowClear: true
    })
</script>
<script>
  var editor_config = {
    path_absolute : "{{URL::to('/')}}/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection