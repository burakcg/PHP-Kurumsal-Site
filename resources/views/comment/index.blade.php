<h1>asdfdg</h1>

@auth
<form action="{{route('addComment')}}" method="POST">
    @csrf
    <input type="hidden" name="content_id" value="1" />
    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" />
    <textarea name="text"></textarea>
    <button type="submit">Yorum Yap</button>
</form>
@endauth
