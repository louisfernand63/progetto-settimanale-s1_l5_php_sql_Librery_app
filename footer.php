foot
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.querySelectorAll('.author-name').forEach(item => {
        item.addEventListener('click', event => {
            const authorId = event.currentTarget.getAttribute('data-author-id');

            fetch(`books.php?author_id=${author_id}`)
                .then(response => response.json())
                .then(books => {

                    console.log(books);
                })
                .catch(error => {
                    console.error('Error fetching books:', error);
                });
        });
    });
</script>

</body>

</html>