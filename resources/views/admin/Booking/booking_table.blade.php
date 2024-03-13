<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Statistics</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Total Bookings</th>
                            <th>Pending Bookings</th>
                            <th>Approved Bookings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ratings_category/total"><span
                                        class="btn btn-success waves-effect waves-light">{{ $totalBookings }}</span></a>
                            </td>
                            <td><a href="/ratings_category/pending"><span
                                        class="btn btn-danger waves-effect waves-light">{{ $pendingBookings }}</span></a>
                            </td>
                            <td><a href="/ratings_category/approved"><span
                                        class="btn btn-success waves-effect waves-light">{{ $approvedBookings }}</span></a>
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
                <h4 class="card-title">Bookings</h4>
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
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Tour</th>
                            </tr>
                        </thead>
                        <tbody id="ratingsTableBody">
                            @foreach ($bookings as $booking)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{$booking->firstname}} {{$booking->lastname}}</td>
                                    <td>{{ $booking->phone_no }}</td>
                                    <td>{{ $booking->email }}</td>
                                    <td>
                                        <a href="/admin-tour-detail/{{$booking->tour->id}}">{{ $booking->tour->name }}</a>
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
                url: '/fetchSimilarBookings/' + input,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Handle the response here
                    console.log(response.bookings);

                    // Assuming ratingsTableBody is the ID of your table body where you want to display ratings
                    var ratingsTableBody = document.getElementById('ratingsTableBody');

                    // Clear existing content
                    ratingsTableBody.innerHTML = '';

                    // Iterate over the ratings array
                    response.bookings.forEach(function(booking, index) {
                        // Create a new row for each rating
                        var row = document.createElement('tr');

                        // Set the content for each cell in the row
                        row.innerHTML = '<th scope="row">' + (index + 1) + '</th>' +
                            '<td>' + booking.firstname +''+ booking.firstname +'</td>' +
                            '<td>' + booking.email + '</td>' +
                            '<td><a href="/admin-tour-detail/' + booking.tour.id + '">' + booking.tour.name + '</a></td>' +
                            '<td>' +
                            '<p class="card-text">' +
                            '@if ($booking->status != 'approved')' +
                            '<a href="/update_rating/' + booking.id +
                            '" class="btn btn-success waves-effect waves-light">Approve</a>' +
                            '@endif' +
                            '@if ($booking->status == 'approved')' +
                            '<a href="/update_rating/' + booking.id +
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
