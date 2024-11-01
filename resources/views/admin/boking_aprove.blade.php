<!DOCTYPE html>
<html>
  <head> 
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

        .tr_deg{
            border: 3px solid white;
        }

        .td_deg{
            padding: 10px;
            
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                
                    
                    <table class ="table_deg">
                        <tr class = "tr_deg">
                            <th class = "th_deg">User Id</th>
                            <th class = "th_deg">Package</th>
                            <th class = "th_deg">Rooms</th>
                            <th class = "th_deg">Check In</th>
                            <th class = "th_deg">Check Out</th>
                            <th class = "th_deg">Status</th>
                            <th class = "th_deg">Delete</th>
                            <th class = "th_deg">Status Update</th>
                        </tr>
                     @if($bookings->isEmpty())
                         <tr class = "tr_deg">
                            <td colspan="6">No rooms available.</td>
                        </tr>
                    @else
                      @foreach($bookings as $item)
                        <tr class = "tr_deg">
                            <td class = "td_deg">{{ optional($item)->user_id }}</td>
                            <td>{{ optional($item)->package }}</td>
                            <td>{{ optional($item)->rooms}}</td>
                            <td>{{ optional($item)->check_in_date}}</td>
                            <td>{{ optional($item)->check_out_date }}</td>
                           <td>{{ optional($item)->status}}</td>

                            <td>
                                <a onclick = "return confirm('Are you sure to delete this');" class = "btn btn-danger" href = "{{url('boking_delete', $item->id)}}">Delete</a>
                            </td>

                            <td>
                                <span style = "padding-bottom: 8px;">
                                 <a class = "btn btn-success" href = "{{url('boking_aproved', $item->id)}}">Aprove</a>

                                </span>
                                 <a class = "btn btn-warning" href = "{{url('boking_Reject', $item->id)}}">Reject</a>

                            
                            </td>
                        </tr>
                       

                        @endforeach

                        @endif
                    </table>
            
            </div>

        </div>

    </div>


      @include('admin.js')
      
  </body>
</html>