<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Update Student</h2>
    <form action="{{route('Students.update' , $students->id )}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="{{$students->name}}" required><br><br>

        <label for="number">number:</label>
        <input type="text" id="number" name="number"  value="{{$students->number}}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  value="{{$students->email}}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
