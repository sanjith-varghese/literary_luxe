<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img.book-image {
            max-width: 100px;
            max-height: 100px;
            border-radius: 5px;
        }

        .edit-link, .delete-link {
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .edit-link:hover, .delete-link:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

<h2>Book Library</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Book Name</th>
    <th>Description</th>
    <th>Author Name</th>
    <th>Publisher Name</th>
    <th>Book Cover</th>
    <th>Actions</th>
  </tr>

  @foreach($data as $value)
  <tr>
    <td>{{$value->id}}</td>
    <td>{{$value->bookname}}</td>
    <td>{{$value->description}}</td>
    <td>{{$value->authorname}}</td>
    <td>{{$value->publishername}}</td>
    <td><img src="/bookimg/{{$value->inputFileUpload}}" alt="Book Cover" class="book-image"></td>
    <td>
        <a href="/edit/{{$value->id}}" class="edit-link">Edit</a>
        <a href="/studentdelete/{{$value->id}}" class="delete-link">Delete</a>
    </td>
  </tr>
  @endforeach

</table>

</body>
</html>
