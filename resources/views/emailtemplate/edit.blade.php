<!DOCTYPE html>
<html>
<head>
    <title>Edit EmailTemplate</title>
</head>
<body>
    <h1>Edit EmailTemplate</h1>
    <form action="{{ route('emailtemplates.update', $emailtemplate->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Subject:</label>
        <input type="text" id="name" name="subject" value="{{ $emailtemplate->subject }}" required>
        <br>
        <label for="email">Content:</label>
        <textarea name="content" required>{{ $emailtemplate->content }}</textarea>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
