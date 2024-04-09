<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Statistics</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Total Reviews</th>
                            <th>Pending Reviews</th>
                            <th>Approved Reviews</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ratings_category/total"><span
                                        class="btn btn-success waves-effect waves-light">{{ $totalRatings }}</span></a>
                            </td>
                            <td><a href="/ratings_category/pending"><span
                                        class="btn btn-danger waves-effect waves-light">{{ $pendingRatings }}</span></a>
                            </td>
                            <td><a href="/ratings_category/approved"><span
                                        class="btn btn-success waves-effect waves-light">{{ $approvedRatings }}</span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="card-text"><small class="text-muted" id="lastUpdated"></small></p>
            </div>
        </div>
    </div>
</div>





<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Reviews</h4>
                <div class="table-responsive">
                    <div class="row mb-3 col-lg-6">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="search" placeholder="Sample Tour" id="example-search-input">
                        </div>
                    </div><br>
                    
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Ratings</th>
                                <th>Tour</th>
                                <th>Review</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="ratingsTableBody">
                            @foreach ($ratings as $rating)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $rating->name }}</td>
                                    <td>{{ $rating->email }}</td>
                                    <td>{{ $rating->rating }}</td>
                                    <td>
                                        <a href="/admin-tour-detail/{{$rating->tour->id}}">{{ $rating->tour->name }}</a>
                                    </td>                                    
                                    <td>{{ $rating->review }}</td>
                                    <td>
                                        <p class="card-text">
                                            {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                                            @if ($rating->status != 'approved')
                                                <a href="/update_rating/{{ $rating->id }}"
                                                    class="btn btn-success waves-effect waves-light">Approve</a>
                                            @endif
                                            @if ($rating->status == 'approved')
                                                <a href="/update_rating/{{ $rating->id }}"
                                                    class="btn btn-danger waves-effect waves-light">UnApprove</a>
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // Function to update last updated time
    function updateLastUpdatedTime() {
        var now = new Date();
        var hours = now.getHours().toString().padStart(2, '0');
        var minutes = now.getMinutes().toString().padStart(2, '0');
        var seconds = now.getSeconds().toString().padStart(2, '0');
        var lastUpdatedTime = hours + ':' + minutes + ':' + seconds;
        document.getElementById('lastUpdated').textContent = 'Last updated ' + lastUpdatedTime;
    }

    // Call the function to update last updated time
    updateLastUpdatedTime();



    $(document).ready(function() {
        $('#example-search-input').on('input', function() {
            var input = $(this).val();
            fetchSimilarReviews(input);
        });

        function fetchSimilarReviews(input) {
            $.ajax({
                url: '/fetchSimilarReviews/' + input,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Handle the response here
                    console.log(response.ratings);

                    // Assuming ratingsTableBody is the ID of your table body where you want to display ratings
                    var ratingsTableBody = document.getElementById('ratingsTableBody');

                    // Clear existing content
                    ratingsTableBody.innerHTML = '';

                    // Iterate over the ratings array
                    response.ratings.forEach(function(rating, index) {
                        // Create a new row for each rating
                        var row = document.createElement('tr');

                        // Set the content for each cell in the row
                        row.innerHTML = '<th scope="row">' + (index + 1) + '</th>' +
                            '<td>' + rating.name + '</td>' +
                            '<td>' + rating.email + '</td>' +
                            '<td>' + rating.rating + '</td>' +
                            '<td>' + rating.tour.name + '</td>' +
                            '<td>' + rating.review + '</td>' +
                            '<td>' +
                            '<p class="card-text">' +
                            '@if ($rating->status != 'approved')' +
                            '<a href="/update_rating/' + rating.id +
                            '" class="btn btn-success waves-effect waves-light">Approve</a>' +
                            '@endif' +
                            '@if ($rating->status == 'approved')' +
                            '<a href="/update_rating/' + rating.id +
                            '" class="btn btn-danger waves-effect waves-light">Unapprove</a>' +
                            '@endif' +
                            '</p>' +
                            '</td>';

                        // Append the row to the table body
                        ratingsTableBody.appendChild(row);
                    });
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        }
    });
</script>
