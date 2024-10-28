function addBook() {
    let formData = $('#bookForm').serialize();
    $.post('add.php', formData, function(data) {
        $('#prompt').html(data);
        loadBooks();
    });
}

function searchBook() {
    let isbn = $('#isbn').val();
    $.get('search.php', {isbn: isbn}, function(data) {
        let book = JSON.parse(data);
        if (book) {
            $('#title').val(book.Title);
            $('#copyright').val(book.Copyright);
            $('#edition').val(book.Edition);
            $('#price').val(book.Price);
            $('#quantity').val(book.Quantity);
        } else {
            $('#prompt').html('No record found');
        }
    });
}

function editBook() {
    let formData = $('#bookForm').serialize();
    $.post('edit.php', formData, function(data) {
        $('#prompt').html(data);
        loadBooks();
    });
}

function deleteBook() {
    let isbn = $('#isbn').val();
    $.post('delete.php', {isbn: isbn}, function(data) {
        $('#prompt').html(data);
        loadBooks();
    });
}

function loadBooks() {
    $.get('list.php', function(data) {
        $('#bookList').html(data);
    });
}

$(document).ready(function() {
    loadBooks();
});
