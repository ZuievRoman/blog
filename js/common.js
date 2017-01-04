$('.delete-article').click(function (e) {
    e.preventDefault();
    if (confirm('Are you sure you want to delete article from database?')) {
        window.location.href = $(this).attr('href');
    }
});
