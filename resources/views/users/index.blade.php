<style type="text/css">
    body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}

.datatable-container {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #f0f0f0;
}

table {
  width: 100%;
  max-width: 800px;
  border-collapse: collapse;
  border: 1px solid #ddd;
  background-color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

thead {
  background-color: #f2f2f2;
}

h2 {
  margin-bottom: 20px;
  font-size: 24px;
  font-weight: bold;
}

body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}

.button-container {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3;
}

</style>
<!DOCTYPE html>
<html>
<head>
  <title>Full-Screen Datatable Example</title>
  <link rel="stylesheet">
</head>
<body>

<div class="datatable-container">
  <h2>Sample Datatable</h2>
<a href="{{ route('users.create') }}" class="btn">Add Users</a>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
      <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->email }}</td>
        <td><a href="{{ route('users.edit',$d->id) }}" class="btn">Edit</a> <a href="{{ route('users.destroy',$d->id) }}" class="btn">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
