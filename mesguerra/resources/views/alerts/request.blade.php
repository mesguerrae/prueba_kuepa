@if(count($errors) > 0)

        @foreach($errors->all() as $error)
        <div class="alert {{ Session::get('alert-class', 'alert-danger') }}"y" role="alert">
             {!!$error!!}
        </div>
        @endforeach

@endif

