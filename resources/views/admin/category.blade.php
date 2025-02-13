@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div>

    <section>
      <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Category</a>
      <table class="table datatable">
        <thead>
            <th>S.No</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Category Image</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($category as $categories)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td>{{$categories->category_name}}</td>
            <td>{{$categories->category_description}}</td>
            <td> <img src="{{asset('storage/category/'.$categories->category_image)}}" alt="{{$categories->category_image}}"></td>            
            <td>
              <button class="btn btn-secondary edit" data-description="{{$categories->category_description}}" data-name="{{$categories->category_name}}" data-id="{{$categories->category_id}}" data-bs-toggle="modal" data-bs-target="#category_editModal"><i class="bi bi-pencil-square"></i></button>
              <a href="{{url('admin/delete/category/'.$categories->category_id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
        </div>
      </div>
    </section>

  </main>
@include('admin.inc.footer')
