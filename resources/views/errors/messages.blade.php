
<div class="text-center">
    @if(Session::has('success'))
        <div class="alert alert-success">

            <div class="message success"><em> {!! mb_strtoupper( session('success','UTF-8') )!!}</em></div>

        </div>

    @endif
    @if(Session::has('alert'))
            <div class="alert alert-danger">
        <div class="message error"><em> {!! mb_strtoupper(session('alert','UTF-8')) !!}</em></div>
                </div>
    @endif
</div>