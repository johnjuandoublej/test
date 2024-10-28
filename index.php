<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Bookstore Management</h2>
        <form id="bookForm" class="mb-4">
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="number" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="copyright">Copyright</label>
                <input type="number" class="form-control" id="copyright" name="copyright" required>
            </div>
            <div class="form-group">
                <label for="edition">Edition</label>
                <input type="text" class="form-control" id="edition" name="edition" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="addBook()">Add</button>
            <button type="button" class="btn btn-secondary" onclick="searchBook()">Search</button>
            <button type="button" class="btn btn-info" onclick="editBook()">Edit</button>
            <button type="button" class="btn btn-danger" onclick="deleteBook()">Delete</button>
        </form>
        <div id="prompt" class="mb-4"></div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Copyright</th>
                    <th>Edition</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody id="bookList"></tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
