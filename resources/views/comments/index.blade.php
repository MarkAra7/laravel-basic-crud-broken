index.blade.php file content

{{-- display a list of comments in laravel blade view --}}
@foreach ($comments as $comment)

<ul>
    <li>{{$comment->content}}</li>
</ul>
@endforeach
{{-- create a link back to create form --}}