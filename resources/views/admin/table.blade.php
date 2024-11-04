<!DOCTYPE html>
<html>
  <head> 
    <base href = '/public'>
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    @include('admin.slidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
    <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!--<div class="col-lg-6">-->
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Basic Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                        <th>Room Title</th>
                            <th>Packge Type</th>
                            <th>Description</th>
                            <th>Wifi</th>
                            <th>Price</th>
                            <th>Total Room</th>
                            <th>Available Room</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                      
                      @foreach($data as $item)
                        <tr>
                            <td>{{ optional($item)->room_title }}</td>
                            <td>{{ optional($item)->room_type }}</td>
                            <td>{{ optional($item)->description }}</td>
                            <td>{{ optional($item)->wifi }}</td>
                            <td>{{ optional($item)->price }}$</td>
                            <td>{{ optional($item)->total_rooms }}</td>
                            <td>{{ optional($item)->available }}</td>
                            
                        </tr>
                       

                        @endforeach

                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
            <div class="row">
              <!--<div class="col-lg-6">-->
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Striped Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped">
                      <thead>
                      <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quntity</th>
                            <th>Total Price</th>
                            
                            
                        </tr>
                      </thead>
                      <tbody>
                      
                      @foreach($orders as $item)
                        <tr>
                            <td>{{ optional($item)->item_name}}</td>
                            <td>{{ optional($item)->price}}</td>
                            <td>{{ optional($item)->quantity}}</td>
                            <td>{{ optional($item)->total}}</td>
                          
                        </tr>
                       

                        @endforeach

                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
            <div class="row">
              <!--<div class="col-lg-6">-->
              
                <div class="block">
                  <div class="title"><strong>Striped table with hover effect</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter       </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
            <div class="row">
              <!--<div class="col-lg-6">-->
              
                <div class="block">
                  <div class="title"><strong>Compact Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter      </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
</div>
</div>
      @include('admin.js')
      
  </body>
</html>