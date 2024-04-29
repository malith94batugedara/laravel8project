<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Books | Books Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Add New Book</h1><a href="{{ route('book.index') }}" class="btn btn-success float-end">All Books</a><br/><br/><br/>
          @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                              <div> {{ $error }} </div>
                            @endforeach
                        </div>
          @endif
          <form action="{{ route('book.store') }}" method="post">
            @csrf
              <label>Book Name</label>
              <input type="text" name="bookname" class="form-control" placeholder="Enter Book Name"/><br/>

              <label>Book Author</label>
              <input type="text" name="bookauth" class="form-control" placeholder="Enter Book Author Name"/><br/>

              <label>Book Type</label>
              <select name="booktype" class="form-control">
                   <option>---Choose Book Type---</option>
                   <option value="novel">Novel</option>
                   <option value="boigraphy">Biography</option>
                   <option value="fiction">Fiction</option>
              </select><br/>

              <label>Book Price</label>
              <input type="text" name="bookprice" class="form-control" placeholder="Enter Book Price"/><br/>

              <input type="submit" class="btn btn-success" value="Save"/>
              <button type="reset" class="btn btn-warning">Reset</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>