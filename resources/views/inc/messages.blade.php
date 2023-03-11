@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>

    </div>
@endif
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade in show" role="alert">
        <strong>Success!</strong> {{ session('status') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
