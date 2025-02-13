@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Categorys</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Category</h5>

              <!-- General Form Elements -->
              <form action="{{url('admin/edit-category/'.$category->category_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$category->category_name}}" name='category_name' placeholder="Write Category Name"> 
                  </div>
                </div>





         
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Commission</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$category->category_commission}}"  name='category_commission' placeholder="Write Text"> 
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm-10">
                      <input type="submit" value="Edit Category" class='btn btn-success'>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>
      </div>
    </section>

   

  </main><!-- End #main -->
@include('admin.inc.footer')      