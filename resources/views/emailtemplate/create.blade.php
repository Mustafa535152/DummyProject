<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h1>Add Email Template</h1>
    <form action="{{ route('emailtemplates.store') }}" method="POST">
        @csrf
        <label for="name">subject:</label>
        <input type="text" id="subject" name="subject" required>
        <br>
        <label for="email">Content:</label>
        <textarea name="content" required></textarea>
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
