
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(\Illuminate\Support\Facades\Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('error') }}
    </div>
@endif
