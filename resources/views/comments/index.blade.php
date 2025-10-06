{{-- display a list of comments in laravel blade view --}}
@foreach ($comments as $comment)

<ul>
    <li>{{$comment->content}}</li>
    <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn-danger">Delete</button>
    </form>
</ul>
@endforeach

<a href="/comments/create">Make Comment</a>
{{-- create a link back to create form --}}