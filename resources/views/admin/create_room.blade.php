<!DOCTYPE html>
<html>
  <head> 
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
                    <h1 style = "font-size: 30px; font-weight: bold;">Add Room</h1>
                    <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class = "div_deg">
                            <lable>
                                Room Title
                            </lable>
                            <input type = "text" name = "title">
                        </div>

                        <div class = "div_deg">
                            <lable>
                                Description
                            </lable>
                            <textarea name = "description"></textarea>
                        </div>

                        <div class = "div_deg">
                            <lable>
                                Price
                            </lable>
                            <input type = "number" name = "price">
                        </div>

                        <div class = "div_deg">
                            <lable>
                                Room Type
                            </lable>
                            <select name = "type">
                                <option value = "fullboard">Full Board</option>
                                <option value = "halfboard">Half Board</option>
                                <option value = "roomonly">Room Only</option>

                            </select>
                        </div>

                        <div>
                            <lable>
                                Free Wifi
                            </lable>
                            <select name = "wifi">
                                <option selected value = "yes">Yes</option>
                                <option value = "no">No</option>

                            </select>
                        </div>

                        <div class = "div_deg">
                            <lable>
                                Upload Image
                            </lable>
                            <input type = "file" name = "image">
                        </div>

                        <div class = "div_deg">
                        <input class = "btn btn-primary" type = "submit" value = "Add Room">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


      @include('admin.js')
      
  </body>
</html>