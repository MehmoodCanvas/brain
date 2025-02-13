@include('admin.inc.header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>About Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">About Page</a></li>
          <li class="breadcrumb-item active">About Page</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit About Page</h5>
              <form action="{{ url('admin/update-aboutpage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Banner Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="aboutpages_banner_image">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section One Main Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_one_main_heading" value="{{$aboutpage->aboutpages_sec_one_main_heading}}" placeholder="Enter About Page Section One Main Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section One Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_one_main_heading_text" value="{{$aboutpage->aboutpages_sec_one_main_heading_text}}" placeholder="Enter About Page Section One Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Two Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_two_heading" value="{{$aboutpage->aboutpages_sec_two_heading}}" placeholder="Enter About Page Section Two Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Two Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="aboutpages_sec_two_image">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Two Image Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_two_image_name" value="{{$aboutpage->aboutpages_sec_two_image_name}}" placeholder="Enter About Page Section Two Image Headingg">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Two Image Heading Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_two_image_text" value="{{$aboutpage->aboutpages_sec_two_image_text}}" placeholder="Enter About Page Section Two Image Heading Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Three Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="aboutpages_sec_three_image">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Three Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_three_image_name" value="{{$aboutpage->aboutpages_sec_three_image_name}}" placeholder="Enter About Page Section Three Image">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Three Heading Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_three_image_text" value="{{$aboutpage->aboutpages_sec_three_image_text}}" placeholder="Enter About Page Section Three Heading Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Four Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_four_heading" value="{{$aboutpage->aboutpages_sec_four_heading}}" placeholder="Enter About Page Section Four Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Four Image Heading</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="aboutpages_sec_four_heading_image">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Four Heading Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_four_heading_image_text" value="{{$aboutpage->aboutpages_sec_four_heading_image_text}}" placeholder="Enter About Page Section Four Heading Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Five Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_five_heading" value="{{$aboutpage->aboutpages_sec_five_heading}}" placeholder="Enter About Page Section Five Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Five Heading Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_five_heading_text" value="{{$aboutpage->aboutpages_sec_five_heading_text}}" placeholder="Enter About Page Section Five Heading Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Six Heading One</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_six_heading_one" value="{{$aboutpage->aboutpages_sec_six_heading_one}}" placeholder="Enter About Page Section Six Heading One">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Six Heading Two</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_six_heading_two" value="{{$aboutpage->aboutpages_sec_six_heading_two}}" placeholder="Enter About Page Section Six Heading Two">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">About Page Section Six Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="aboutpages_sec_six_button_text" value="{{$aboutpage->aboutpages_sec_six_button_text}}" placeholder="Enter About Page Section Six Button Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="submit" value="Save About Page" class="btn btn-success">
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