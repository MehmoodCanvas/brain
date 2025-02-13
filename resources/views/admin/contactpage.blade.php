@include('admin.inc.header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Contact Page</a></li>
          <li class="breadcrumb-item active">Contact Page</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Contact Page</h5>
              <form action="{{ url('admin/update-contactpage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Contact Page Banner Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="contactpages_banner_image">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Contact Page Section One Main Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="contactpages_main_heading" value="{{$contactpage->contactpages_main_heading}}" placeholder="Enter Contact Page Section One Main Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Contact Page Section One Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="contactpages_main_heading_text" value="{{$contactpage->contactpages_main_heading_text}}" placeholder="Enter Contact Page Section One Main Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Contact Page Section One Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="contactpages_button_text" value="{{$contactpage->contactpages_button_text}}" placeholder="Enter Contact Page Section One Main Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="submit" value="Save Contact Page" class="btn btn-success">
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