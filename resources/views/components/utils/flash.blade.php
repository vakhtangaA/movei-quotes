@if ($message = Session::get('status'))
<div
    class="absolute p-4 text-white bg-blue-700 rounded-md bottom-8 right-8"
    data-expires="2000"
>
    <strong>{{ $message }}</strong>
</div>
@endif
