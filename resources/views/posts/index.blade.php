<h1>All Posts</h1>
<a href="{{ route('posts.create') }}">Create New Post</a>
<ul>
  @foreach ($posts as $post)
    <li>


    </li>
  @endforeach
</ul>

<h1>
  all posts here
</h1>

<table border>
  <tr>
    <th>post id</th>
    <th>post title</th>
    <th>post content</th>
    <th>post edit</th>
    <th>post delete</th>
  </tr>

  @foreach($posts as $post)
    <tr>
      <td>
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
      </td>
      <td>
        {{$post->title}}
      </td>
      <td>
        {{$post->description}}
      </td>
      <td>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
      </td>
      <td>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>
