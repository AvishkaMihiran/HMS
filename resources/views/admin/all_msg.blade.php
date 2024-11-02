<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <base href = "/public">
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
                            <th class = "th_deg">User Name</th>
                            <th class = "th_deg">Email</th>
                            <th class = "th_deg">Send Mail</th>
                            
                        </tr>
                       
                      @foreach($users as $item)
                        <tr class = "tr_deg">
                            <td class = "td_deg">{{ optional($item)->name }}</td>
                            <td class = "td_deg">{{ optional($item)->email }}</td>


                            <td>
                                <a class = "btn btn-success" href = "{{url('send_mail',$item->id)}}">SEND</a>
                            </td>
                        </tr>
                       

                        @endforeach

                  
                    </table>
            
            </div>

        </div>

    </div>


      @include('admin.js')
      
  </body>
</html>