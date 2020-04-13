@extends('template_backend.home')
@section('sub-judul','Settingan Blog')
@section('content')

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div>
	@endif

{{--	<a href="{{ route('post.create') }}" class="btn btn-info btn-sm" style="background-color: #2a2a72;--}}
{{--background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);">Tambah Post</a>--}}
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>Visi</th>
				<th>Misi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($settings as $result =>   $hasil)
			<tr>
				<td>
                    {!! $hasil->visi !!}
                </td>
				<td>
                    {!! $hasil->misi !!}
                </td>
			</tr>
                <tr>
                    <form action="{{ route('setting.destroy', $hasil->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <center><a href="{{ route('setting.edit', $hasil->id ) }}" class="btn btn-primary btn">Edit</a></center>
                        {{--                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>--}}
                    </form>
                </tr>
			@endforeach

		</tbody>
	</table>

@endsection
