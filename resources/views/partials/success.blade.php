@if(session()->has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss></button>
    <span class="aria-hidden">&times;</span>
    <strong>
    {!! session()->get('success') !!}
    </strong>
</div>
@endif