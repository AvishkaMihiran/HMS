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
                            <th class = "th_deg">Room Title</th>
                            <th class = "th_deg">Description</th>
                            <th class = "th_deg">Price</th>
                            <th class = "th_deg">Wifi</th>
                            <th class = "th_deg">Room Type</th>
                            <th class = "th_deg">Image</th>
                            <th class = "th_deg">Delete</th>
                        </tr>
                     @if($data->isEmpty())
                         <tr class = "tr_deg">
                            <td colspan="6">No rooms available.</td>
                        </tr>
                    @else
                      @foreach($data as $item)
                        <tr class = "tr_deg">
                            <td class = "td_deg">{{ optional($item)->room_title }}</td>
                            <td>{{ optional($item)->description }}</td>
                            <td>{{ optional($item)->price }}$</td>
                            <td>{{ optional($item)->wifi }}</td>
                            <td>{{ optional($item)->room_type }}</td>
                            <td>
                                <img width = "60" src = "{{ asset('room/'.$item->image) }}">
                            </td>

                            <td>
                                <a onclick = "return confirm('Are you sure to delete this');" class = "btn btn-danger" href = "{{url('room_delete', $item->id)}}">Delete</a>
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