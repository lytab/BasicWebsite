@if (count($errors)>0)
                        
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
                            
            <strong>{{$error}}</strong><br>
        @endforeach
        <a href="{{url()->current()}}" class="alert-link"><i class="glyphicon glyphicon-repeat"></i> </a>
    </div>
@endif
@if (session('status'))
                        
    <div class="alert alert-success" role="alert">
                            
            <strong>{{session('status')}}</strong>
    </div>
@endif