<!DOCTYPE html>
<html>
  <head> 
  <base href = "/public">
    @include('admin.css')

    <style type = "text/css">
        lable{
            display: inline-block;
            width: 200px;
        }

        .div_deg{
            padding-top:30px;
        }

        .div_center{
            text-align: left;
            padding-top: 40px;
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class ="div_center">
                    <h1 style = "font-size: 30px; font-weight: bold;">Mail send to {{ optional($bookings)->username }}</h1>
                    <form action="" method="Post">
                        @csrf
                        <div class = "div_deg">
                            <lable>
                                Greeting
                            </lable>
                            <input type = "text" name = "greeting">
                        </div>

                        <div class = "div_deg">
                            <lable>
                                Mail body
                            </lable>
                            <textarea name = "body"></textarea>
                        </div>

                        <div class = "div_deg">
                            <lable>
                                Action url
                            </lable>
                            <input type = "text" name = "action_url">
                        </div>

                        <div class = "div_deg">
                            <lable>
                                End line
                               
                            </lable>
                            <input type = "text" name = "endline">
                            
                        </div>

                        <div class = "div_deg">
                        <input class = "btn btn-primary" type = "submit" value = "Send">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


      @include('admin.js')
      
  </body>
</html>