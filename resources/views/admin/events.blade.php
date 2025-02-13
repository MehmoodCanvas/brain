@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Events</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Events</li>
        </ol>
      </nav>
    </div>

    <section>
        <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#eventModel"">Add New Event</a>

      <table class="table datatable">
        <thead>
            <th>So.No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Location</th>
            <th>Date</th>
            <th>Action</th>
        </thead>
        <tbody>
          @foreach($events as $event)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td> {{$event->events_title}}</td>
            <td> {{$event->events_description}}</td>
            <td> {{$event->events_location}}</td>
            <td> {{$event->events_date_from}}</td>
            <td><a href='{{url('admin/event/view/'.$event->events_id)}}' class="btn btn-success"><i class="bi bi-eye"></i></a><a href="{{url('admin/delete/event/'.$event->events_id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div><!-- End Left side columns -->

      
      </div>
    </section>

  </main><!-- End #main -->
@include('admin.inc.footer')