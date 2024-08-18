
  <h1>Edit Post</h1>
  <form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}" required>
    <label for="description">Content:</label>
    <textarea name="description" id="description" required>{{ $post->description }}</textarea>
    <button type="submit">Update</button>
  </form>

