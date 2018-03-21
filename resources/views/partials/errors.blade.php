<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-lg-9 col-lg-offset-1">
            @if (count($errors)>0)
                <div class="alert alert-danger alert-dismissable">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>