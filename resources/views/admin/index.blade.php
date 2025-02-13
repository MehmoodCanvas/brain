@include('admin.inc.header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

              
                <div class="card-body">
                  <h5 class="card-title">Users <span>| All Over</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{1}}</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

               
                <div class="card-body">
                  <h5 class="card-title">Questions <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{1}}</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>


                

              </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

               
                <div class="card-body">
                  <h5 class="card-title"># <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$1</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>


                

              </div>
            </div><!-- End Revenue Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">


                <div class="card-body">
                  <h5 class="card-title">Reports <span></span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>
                  {{-- <script async>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [@foreach($vendor as $vendors){{$vendors->member_id}}@if($loop->iteration >1),@endif @endforeach],
                        },
                      ],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script> --}}
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Order <span>| Latest</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Order Price</th>

                      </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach ($community as $communities)
                      <tr>
                        <th scope="row"><a href="#">#{{$loop->iteration}}</a></th>
                        <td>{{$communities->order_invoice_id}}</td>
                        <td>{{$communities->order_full_name}}</td>
                        <td><a href="{{url('admin/order-detail/'.$orderss->order_invoice_id)}}" class="text-primary">{{$communities->order_email}}</a></td>
                        <td>${{$communities->order_total_amount}}</td>
                      </tr>     
                      @endforeach --}}
                     

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                
                </div>

                {{-- <div class="card-body">
                  <h5 class="card-title">Recent Commissions <span>| Latest</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Artist Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Commission</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($commissiondata as $commissions)
                      <tr>
                        <th scope="row"><a href="#">#{{$loop->iteration}}</a></th>
                        <td>{{$commissions->artist_first_name}} {{$commissions->artist_last_name}}</td>
                        <td><a href="{{url('admin/order-detail/'.$commissions->order_invoice_id)}}" class="text-primary">{{$orderss->order_email}}</a></td>
                        <td>${{$commissions->commission_price}}</td>
                      </tr>     
                      @endforeach
                     

                    </tbody>
                  </table>

                </div> --}}

              </div>
            </div><!-- End Recent Sales -->


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

 @include('admin.inc.footer')