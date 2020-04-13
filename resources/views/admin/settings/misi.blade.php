@extends('template_backend.home')
@section('sub-judul','Edit Visi & Misi')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div>

  @endif

  <form action="{{ route('setting.update', $settings->id ) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
      <div class="form-group">
          <label>Edit Visi</label>
          <textarea class="form-control" name="visi" id="visi">{{ $settings->visi }}</textarea>
      </div>
  <div class="form-group">
      <label>Edit Misi</label>
      <textarea class="form-control" name="misi" id="misi">{{ $settings->misi }}</textarea>
  </div>
  <div class="form-group">
      <button class="btn btn-primary btn-block">Update Misi</button>
  </div>

  </form>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script >
  CKEDITOR.replace( 'misi' );
  CKEDITOR.replace( 'visi' );


</script>
@endsection
