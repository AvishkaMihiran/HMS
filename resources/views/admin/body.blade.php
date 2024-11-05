<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>Users</strong>
                    </div>
                    <div class="number dashtext-1">{{$total_user}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Bookings</strong>
                    </div>
                    <div class="number dashtext-2">{{$total_booking}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Orders</strong>
                    </div>
                    <div class="number dashtext-3">{{$total_order}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              
        </section>

        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div>
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Room Booked Table</strong></div>
                  <div> 
                    <table class="table">
                      <thead>
                        <tr>
                        <th>#</th>
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
                        <td>{{ optional($item)->id }}</td>
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
              <div>
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Resturant Ordered Table</strong></div>
                  <div> 
                    <table class="table table-striped">
                      <thead>
                      <tr>
                            <th>#</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quntity</th>
                            <th>Total Price</th>
                            
                            
                        </tr>
                      </thead>
                      <tbody>
                      
                      @foreach($orders as $item)
                        <tr>
                        <td>{{ optional($item)->id }}</td>
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
              </div>
            </div>
          </div>
          <table class="table">
                      <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                            <th>email</th>
                            <th>User Type</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                      
                      @foreach($data as $item)
                        <tr>
                        <td>{{ optional($item)->id }}</td>
                            <td>{{ optional($item)->room_title }}</td>
                            <td>{{ optional($item)->room_type }}</td>
                            <td>{{ optional($item)->description }}</td>
                            
                        </tr>
                       

                        @endforeach

                        
                      </tbody>
                    </table>
                    </div>
                </div>
              </div>
              </div>
            </div>
          </div>
                    
        </section>