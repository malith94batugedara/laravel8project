<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Books | Books Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Edit Book</h1><a href="{{ route('book.index') }}" class="btn btn-success float-end">All Books</a><br/><br/><br/>
          @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                              <div> {{ $error }} </div>
                            @endforeach
                        </div>
          @endif
          <form action="{{ route('book.update',$book->id) }}" method="post">
            @csrf
              <label>Book Name</label>
              <input type="text" name="bookname" value="{{ $book->book_name }}" class="form-control" placeholder="Enter Book Name"/><br/>

              <label>Book Author</label>
              <input type="text" name="bookauth" value="{{ $book->book_author }}" class="form-control" placeholder="Enter Book Author Name"/><br/>

              <label>Book Type</label>
              <select name="booktype" class="form-control">
                   <option>---Choose Book Type---</option>
                   <option value="novel" {{ $book->book_type == 'novel' ? 'selected' : '' ;}}>Novel</option>
                   <option value="boigraphy" {{ $book->book_type == 'boigraphy' ? 'selected' : '' ;}}>Biography</option>
                   <option value="fiction" {{ $book->book_type == 'fiction' ? 'selected' : '' ;}}>Fiction</option>
              </select><br/>

              <label>Book Price</label>
              <input type="text" name="bookprice" value="{{ $book->book_price }}" class="form-control" placeholder="Enter Book Price"/><br/>

              <input type="submit" class="btn btn-success" value="Update"/>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>