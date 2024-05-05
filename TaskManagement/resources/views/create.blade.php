<h1>Create Task</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('store') }}" method="post">
  @csrf
  <label for="title">Title:</label>
  <input type="text" name="title" id="title" required>
  <br>
  <label for="description">Description:</label>
  <textarea name="description" id="description"></textarea>
  <br>
  <button type="submit">Create Task</button>
</form>