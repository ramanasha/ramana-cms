<table border="1">
@foreach ($posts as $post)
<tr>
<td>{{$post->id}}</td>
<td>{{$post->title}}</td>
<td>{{$post->description}}</td>
<td>{{$post->user->name}}</td>
</tr>
@endforeach
</table>