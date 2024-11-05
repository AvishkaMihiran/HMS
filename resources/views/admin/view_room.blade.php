<!DOCTYPE html>
<html>
  <head> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @include('admin.css')

    <style type = "text/css">
        
        .table_deg{
            border: 2px solid white;
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg{
            background-color: darkred;
            padding: 15px;
        }
        .th_deg1{
            background-color: darkred;
            padding: 15px;
            width: 25%;
        }

        .tr_deg{
            border: 3px solid white;
        }

        .td_deg{
            padding: 10px;

            
        }
        .td_deg1{
            padding: 10px;
            width: 25%;
            
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
             
            <a onclick = "return confirm('Are you sure to delete this');" class = "btn btn-danger" href = "">Delete All Selected</a> 
            
                    <table class ="table_deg">
                        <tr class = "tr_deg">
                        <th class = "th_deg1"><input type = "checkbox" name = "ids" id = "select_all_ids"></th>
                            <th class = "th_deg">Room Title</th>
                            <th class = "th_deg">Packge Type</th>
                            <th class = "th_deg">Description</th>
                            <th class = "th_deg">Wifi</th>
                            <th class = "th_deg">Price</th>
                            <th class = "th_deg">Total Room</th>
                            <th class = "th_deg">Available Room</th>
                            <th class = "th_deg">Delete</th>
                            <th class = "th_deg">Update</th>
                        </tr>
                     @if($data->isEmpty())
                         <tr class = "tr_deg">
                            <td colspan="6">No rooms available.</td>
                        </tr>
                    @else
                      @foreach($data as $item)
                        <tr id = "room_ids{{optional($item)->id}}">
                        <td class = "td_deg1"><input type = "checkbox" name = "ids" id = "select_all_ids" value = "{{ optional($item)->room_id }}"></td>
                            <td class = "td_deg">{{ optional($item)->room_title }}</td>
                            <td class = "td_deg">{{ optional($item)->room_type }}</td>
                            <td class = "td_deg">{{ optional($item)->description }}</td>
                            <td class = "td_deg">{{ optional($item)->wifi }}</td>
                            <td class = "td_deg">{{ optional($item)->price }}$</td>
                            <td class = "td_deg">{{ optional($item)->total_rooms }}</td>
                            <td class = "td_deg">{{ optional($item)->available }}</td>
                            
                            

                            <td>
                                <a onclick = "return confirm('Are you sure to delete this');" class = "btn btn-danger" href = "{{url('room_delete', $item->id)}}">Delete</a>
                            </td>

                            <td>
                                <a class = "btn btn-warning" href = "{{url('update_room', $item->id)}}">Update</a>
                            </td>
                        </tr>
                       

                        @endforeach

                        @endif
                    </table>
            
            </div>

        </div>

    </div>

    <script>
    $(document).ready(function() {
        // Select or Deselect all checkboxes
        $("#select_all_ids").click(function() {
            $('.checkbox_ids').prop('checked', $(this).prop('checked'));
        });

        // Update "Select All" checkbox based on individual checkbox selection
        $(".checkbox_ids").click(function() {
            if ($('.checkbox_ids:checked').length === $('.checkbox_ids').length) {
                $("#select_all_ids").prop('checked', true);
            } else {
                $("#select_all_ids").prop('checked', false);
            }
        });

        // Delete selected records when "Delete All Selected" button is clicked
        $('#deleteAllSelectedRecord').click(function(e) {
            e.preventDefault();

            // Get all selected checkbox values
            var all_ids = [];
            $('input:checkbox[name=ids]:checked').each(function() {
                all_ids.push($(this).val());
            });

            if (all_ids.length > 0) {
                if (confirm("Are you sure you want to delete the selected records?")) {
                    $.ajax({
                        url: "{{ route('admin.delete') }}", // Ensure this route exists in your routes file
                        type: "POST", // Using POST with _method for DELETE
                        data: {
                            ids: all_ids,
                            _method: 'DELETE', // Spoof the DELETE method
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                $.each(all_ids, function(key, val) {
                                    $('#room_ids' + val).remove();
                                });
                                alert("Selected records have been deleted successfully.");
                            } else {
                                alert("An error occurred: " + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred while deleting the records: " + error);
                        }
                    });
                }
            } else {
                alert("Please select at least one record to delete.");
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Select or Deselect all checkboxes
        $("#select_all_ids").click(function() {
            $('.checkbox_ids').prop('checked', $(this).prop('checked'));
        });

        // Update "Select All" checkbox based on individual checkbox selection
        $(".checkbox_ids").click(function() {
            if ($('.checkbox_ids:checked').length === $('.checkbox_ids').length) {
                $("#select_all_ids").prop('checked', true);
            } else {
                $("#select_all_ids").prop('checked', false);
            }
        });

        // Delete selected records when "Delete All Selected" button is clicked
        $('#deleteAllSelectedRecord').click(function(e) {
            e.preventDefault();

            // Get all selected checkbox values
            var all_ids = [];
            $('input:checkbox[name=ids]:checked').each(function() {
                all_ids.push($(this).val());
            });

            if (all_ids.length > 0) {
                if (confirm("Are you sure you want to delete the selected records?")) {
                    $.ajax({
                        url: "{{ route('admin.delete') }}", // Ensure this route exists in your routes file
                        type: "POST", // Using POST with _method for DELETE
                        data: {
                            ids: all_ids,
                            _method: 'DELETE', // Spoof the DELETE method
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                $.each(all_ids, function(key, val) {
                                    $('#room_ids' + val).remove();
                                });
                                alert("Selected records have been deleted successfully.");
                            } else {
                                alert("An error occurred: " + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred while deleting the records: " + error);
                        }
                    });
                }
            } else {
                alert("Please select at least one record to delete.");
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Select or Deselect all checkboxes
        $("#select_all_ids").click(function() {
            $('.checkbox_ids').prop('checked', $(this).prop('checked'));
        });

        // Update "Select All" checkbox based on individual checkbox selection
        $(".checkbox_ids").click(function() {
            if ($('.checkbox_ids:checked').length === $('.checkbox_ids').length) {
                $("#select_all_ids").prop('checked', true);
            } else {
                $("#select_all_ids").prop('checked', false);
            }
        });

        // Delete selected records when "Delete All Selected" button is clicked
        $('#deleteAllSelectedRecord').click(function(e) {
            e.preventDefault();

            // Get all selected checkbox values
            var all_ids = [];
            $('input:checkbox[name=ids]:checked').each(function() {
                all_ids.push($(this).val());
            });

            if (all_ids.length > 0) {
                if (confirm("Are you sure you want to delete the selected records?")) {
                    $.ajax({
                        url: "{{ route('admin.delete') }}", // Ensure this route exists in your routes file
                        type: "POST", // Using POST with _method for DELETE
                        data: {
                            ids: all_ids,
                            _method: 'DELETE', // Spoof the DELETE method
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                $.each(all_ids, function(key, val) {
                                    $('#room_ids' + val).remove();
                                });
                                alert("Selected records have been deleted successfully.");
                            } else {
                                alert("An error occurred: " + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred while deleting the records: " + error);
                        }
                    });
                }
            } else {
                alert("Please select at least one record to delete.");
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Select or Deselect all checkboxes
        $("#select_all_ids").click(function() {
            $('.checkbox_ids').prop('checked', $(this).prop('checked'));
        });

        // Update "Select All" checkbox based on individual checkbox selection
        $(".checkbox_ids").click(function() {
            if ($('.checkbox_ids:checked').length === $('.checkbox_ids').length) {
                $("#select_all_ids").prop('checked', true);
            } else {
                $("#select_all_ids").prop('checked', false);
            }
        });

        // Delete selected records when "Delete All Selected" button is clicked
        $('#deleteAllSelectedRecord').click(function(e) {
            e.preventDefault();

            // Get all selected checkbox values
            var all_ids = [];
            $('input:checkbox[name=ids]:checked').each(function() {
                all_ids.push($(this).val());
            });

            if (all_ids.length > 0) {
                if (confirm("Are you sure you want to delete the selected records?")) {
                    $.ajax({
                        url: "{{ route('admin.delete') }}", // Ensure this route exists in your routes file
                        type: "POST", // Using POST with _method for DELETE
                        data: {
                            ids: all_ids,
                            _method: 'DELETE', // Spoof the DELETE method
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                $.each(all_ids, function(key, val) {
                                    $('#room_ids' + val).remove();
                                });
                                alert("Selected records have been deleted successfully.");
                            } else {
                                alert("An error occurred: " + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred while deleting the records: " + error);
                        }
                    });
                }
            } else {
                alert("Please select at least one record to delete.");
            }
        });
    });
</script>



      @include('admin.js')
      
  </body>
</html>