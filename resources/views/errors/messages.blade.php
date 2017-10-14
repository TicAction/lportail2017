
<div class="text-center">
    @if(Session::has('success'))
        <div class="alert alert-success">

            <div class="message success"><em> {!! session('success') !!}</em></div>

        </div>

    @endif
    @if(Session::has('alert'))
            <div class="alert alert-danger">
        <div class="message error"><em> {!! session('alert') !!}</em></div>
                </div>
    @endif
</div>