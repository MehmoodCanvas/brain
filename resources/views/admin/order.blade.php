@include('admin.inc.header')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>All Orders</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Orders</li>
        </ol>
      </nav>
    </div>
    <section>
      <table class="table datatable">
        <thead>
            <th>Order.No</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Phone</th>
            <th>Order Status</th>
            <th>Action</th>
        </thead>
        <tbody>
          @foreach($order as $orders)
          <tr>
            <td> {{$orders->order_invoice_id}}</td>
            <td> {{$orders->order_full_name}}</td>
            <td> {{$orders->order_email}}</td>
            <td> {{$orders->order_phone_number}}</td>
            <td> {{$orders->order_status}}</td>
            <td><a href='{{url('admin/order-detail/'.$orders->order_invoice_id)}}' class="btn btn-success"><i class="bi bi-eye"></i></a><a href="{{url('admin/delete/order/'.$orders->order_id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div>
        <!-- End Left side columns -->

      
      </div>
    </section>

  </main><!-- End #main -->
@include('admin.inc.footer')