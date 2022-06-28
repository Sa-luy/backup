@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('phone.store') }}" method="post">
    @csrf
    <p>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        {{ $errors->first('name') }}
    </p>
    <p>
        <input type="email" name="email" value="{{ old('email') }}">
        <br>
        {{ $errors->first('email') }}
    </p>


    <input type="submit" value="Add">
</form>
N