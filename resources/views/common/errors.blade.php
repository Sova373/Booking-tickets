@if (!empty($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <strong> Something going wrong!</strong>
        <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif