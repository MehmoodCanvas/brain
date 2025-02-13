@include('admin.inc.header')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>All Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Blogs</a></li>
          <li class="breadcrumb-item active">Blogs</li>
        </ol>
    </nav>
</div>
<a class="btn btn-success" href="{{url('admin/blogs')}}">Add New Blog</a>

    <section >
        <table class="table datatable">
            <thead>
                <th>So.No</th>
                <th>Blog Name</th>
                <th>Blog Description</th>
                <th>Blog Image</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($blogs as $row)
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td> {{$row->blogs_heading}}</td>
                        <td> {{$row->blogs_description}}</td>
                        <td><img src="{{ asset('storage/blogs/'.$row->blogs_image) }}" width="100px" height="100px" alt="Blog Image"></td>   
                        <td><a href='{{url('admin/all-blogs/view/'.$row->blogs_id )}}' class="btn btn-success"><i class="bi bi-eye"></i></a><a href="{{url('admin/delete/all-blogs/'.$row->blogs_id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a>
                            <button class="btn btn-secondary edit" data-description="{{$row->blogs_description}}" data-name="{{$row->blogs_heading}}" data-id="{{$row->blogs_id}}" data-bs-toggle="modal" data-bs-target="#category_editModal"><i class="bi bi-pencil-square"></i></button>
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