@if(count($errors))
    <div class="card">
        <ul class="list-group list-group-flush">
            @foreach($errors->all() as $error)
                <li class="list-group-item">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif