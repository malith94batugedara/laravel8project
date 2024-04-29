<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books | Books Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>

     <div class="container mt-4">
           <h1 class="text-center">All Books</h1><a href="{{ route('book.create') }}" class="btn btn-success float-end">Add New Book</a><br/><br/><br/>
           @if(session('status'))
             <div class="alert alert-success">
                 {{ session('status') }}
             </div>
           @endif
           <table class="table table-dark table-bordered">
                 <thead>
                    <tr>
                        <th>Book Id</th>
                        <th>Book Name</th>
                        <th>Book Author</th>
                        <th>Book Type</th>
                        <th>Book Price</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($books as $book)
                        
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->book_name}}</td>
                        <td>{{$book->book_author}}</td>
                        <td>{{$book->book_type}}</td>
                        <td>{{$book->book_price}}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                 </tbody>
           </table>
           
     </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>