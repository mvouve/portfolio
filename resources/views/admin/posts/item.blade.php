<tr>
    <td>{{ $post->id }}</td>
    <td><strong>{{ $post->title }}</strong> <br><a href="{{ url('/admin/edit/' . $post->id) }}">Edit</a></td>
    <td>{{ $post->author->name }}</td>
    <td>{{ $post->published_at === null ? 'Draft':$post->published_at }}</td>
    <td>{{ $post->updated_at }}</td>
    <td>{{ $post->created_at }}</td>
</tr>