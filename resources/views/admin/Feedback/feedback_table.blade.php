
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="ratingsTableBody">
                            @foreach ($feedbacks as $feedback)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $feedback->name }}</td>
                                    <td>{{ $feedback->email }}</td>
                                    <td>{{ $feedback->phone }}</td>                                  
                                    <td>{{ $feedback->message }}</td>
                                    <td>
                                        <a href="/deleteFeedback/{{ $feedback->id }}" class="btn btn-danger waves-effect waves-light">
                                            <i class="fas fa-trash-alt"></i> <!-- Assuming you're using Font Awesome for icons -->
                                        </a>
                                        
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

</script>
