@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Promo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Promo</li>
        </ol>
      </nav>
    </div>

    <section>
    <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2"">Add New Promo</a>
      <table class="table datatable">
        <thead>
            <th>S.No</th>
            <th>Promo Name</th>
            <th>Promo Discount</th>
            <th>Promo Date</th>
            <th>Action</th>
        </thead>
        <tbody>
          @foreach($promo as $cat)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td> {{$cat->coupons_name}}</td>
            <td> {{$cat->coupons_discount}}%</td>
            <td> {{$cat->coupons_date}}</td>
            <td><a data-bs-toggle="modal" data-bs-target="#promo_edit_modal""  class="btn btn-secondary"><i class="bi bi-pencil-square"></i><a href="{{url('admin/delete/promo/'.$cat->coupons_id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div><!-- End Left side columns -->

      
      </div>
    </section>

  </main><!-- End #main -->
@include('admin.inc.footer')