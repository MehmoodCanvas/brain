@include('admin.inc.header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Community Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Community Page</a></li>
          <li class="breadcrumb-item active">Community Page</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Community Page</h5>
              <form action="{{ url('admin/update-communitypage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Community Page Banner Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="communitypages_banner_image">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Community Page Section One Main Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="communitypages_sec_one_main_heading" value="{{$communitypage->communitypages_sec_one_main_heading}}" placeholder="Enter Category Section One Main Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Community Page Section One Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="communitypages_sec_one_main_heading_text" value="{{$communitypage->communitypages_sec_one_main_heading_text}}" placeholder="Enter Community Page Section One Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Community Page Section One Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="communitypages_sec_one_main_heading_button_text" value="{{$communitypage->communitypages_sec_one_main_heading_button_text}}" placeholder="Enter Community Page Section One Button Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Community Page Section One Button Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="communitypages_sec_one_main_heading_button_link" value="{{$communitypage->communitypages_sec_one_main_heading_button_link}}" placeholder="Enter Community Page Section One Button Link">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Community Page Section Two Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="communitypages_sec_two_heading" value="{{$communitypage->communitypages_sec_two_heading}}" placeholder="Enter Community Page Section Two Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Community Page Section Two Heading Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="communitypages_sec_two_heading_text" value="{{$communitypage->communitypages_sec_two_heading_text}}" placeholder="Enter Community Page Section Two Heading Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="submit" value="Save Community Page" class="btn btn-success">
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