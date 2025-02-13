@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Vendor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Vendor</li>
        </ol>
      </nav>
    </div>

    <section >
      <table class="table datatable">
        <thead>
            <th>So.No</th>
            <th>Vendor Name</th>
            <th>Vendor Email</th>
            <th>Vendor Designation</th>
            <th>Vendor Location</th>
            <th>Vendor Status</th>
            <th>Action</th>
        </thead>
        <tbody>
          @foreach($vendor as $vendors)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td> {{$vendors->member_name}}</td>
            <td> {{$vendors->member_email}}</td>
            <td> {{$vendors->member_designation}}</td>
            <td> {{$vendors->member_location}}</td>
            <td> {{$vendors->member_status}}</td>            
            <td><a href='{{url('admin/vendor/view/'.$vendors->member_id)}}' class="btn btn-success"><i class="bi bi-eye"></i></a><a href="{{url('admin/delete/vendor/'.$vendors->member_id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div><!-- End Left side columns -->

      
      </div>
    </section>

  </main><!-- End #main -->
@include('admin.inc.footer')