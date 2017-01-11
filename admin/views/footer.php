<footer>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../bower_components/material-design-lite/material.min.js"></script>
    <script async type="text/javascript" src="../js/common.js"></script>
    <script async>
        $('.delete-article').click(function (e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete article from database?')) {
                window.location.href = $(this).attr('href');
            }
        });

    </script>
</footer>
