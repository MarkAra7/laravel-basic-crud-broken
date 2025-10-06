{{-- display a list of comments in laravel blade view --}}
@foreach ($comments as $comment)

<ul>
    <li>{{$comment->content}}</li>
</ul>
@endforeach

<a href="/comments/create">Make Comment</a>
{{-- create a link back to create form --}}