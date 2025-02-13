@include('admin.inc.header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Category Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Category Page</a></li>
          <li class="breadcrumb-item active">Category Page</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Category Page</h5>
              <form action="{{ url('admin/update-categorypage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Category Page Banner Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="categorypages_image">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Category Section One Main Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="categorypages_sec_one_main_heading" value="{{$categorypage->categorypages_sec_one_main_heading}}" placeholder="Enter Category Section One Main Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Category Section One Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="categorypages_sec_one_text" value="{{$categorypage->categorypages_sec_one_text}}" placeholder="Enter Category Section One Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Category Section Two Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="categorypages_sec_two_heading" value="{{$categorypage->categorypages_sec_two_heading}}" placeholder="Enter Category Section Two Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="submit" value="Save Category Page" class="btn btn-success">
                    </div>
                </div>
            </form>
            
              <!-- End General Form Elements -->
            </div>
          </div>
        </div>
      </div>
    </section>

   

  </main><!-- End #main -->
@include('admin.inc.footer')    