@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Admins</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Admins</li>
        </ol>
      </nav>
    </div>

    <section>
      <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#adminModels"">Add New Admin</a>

      <table class="table datatable">
        <thead>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Designation</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($admins as $admin)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td>{{$admin->name }}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->designation}}</td>
            <td>{{$admin->country}}</td>
            <td>{{$admin->phone}}</td>
            <td>
              {{-- <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button> --}}
              <a href="{{url('admin/delete/admin/'.$admin->id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div><!-- End Left side columns -->

      
      </div>
    </section>

  </main><!-- End #main -->
@include('admin.inc.footer')