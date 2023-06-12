<div class="mb-3">
    <input type="text" id="search" class="form-control" placeholder="Search products...">
</div>



<script>
    let timeout = null;

    // Function to handle the delayed search request
    function delayedSearch() {
        clearTimeout(timeout);
        console.log("data")
        timeout = setTimeout(function() {
            const searchTerm = $('#search').val();
            const url = '/search'

            // Perform AJAX request to fetch search results
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    search: searchTerm
                },
                success: function(response) {
                    $('#product-list').html(response);
                    $('#search').val('');
                },
                error: function() {
                    alert('An error occurred while performing the search.');
                }
            });
        }, 500);
    }

    $(document).ready(function() {
        // Bind the delayedSearch function to the input's keyup event
        $('#search').on('keyup', delayedSearch);
    });
</script>