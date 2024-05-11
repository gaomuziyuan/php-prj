@extends("layouts.app")

@section("content")
<h1>Upload a File</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="fileUpload">Choose a file:</label>
    <input type="file" id="fileUpload" name="document">
    <button type="submit">Upload</button>
</form>
@endsection
