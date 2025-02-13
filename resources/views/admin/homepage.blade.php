@include('admin.inc.header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Homepage</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Homepage</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Homepage</h5>
              <form action="{{ url('admin/update-homepage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="homepage_image">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_text" value="{{$homepage->homepage_text}}" placeholder="Enter Text">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section One Banner Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_heading" value="{{$homepage->homepage_section_heading}}" placeholder="Enter Homepage Section One Banner Heading">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Two Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_two_heading" value="{{$homepage->homepage_section_two_heading}}" placeholder="Enter Homepage Section Two Heading">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Two Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_two_button_text" value="{{$homepage->homepage_section_two_button_text}}" placeholder="Enter Homepage Section Two Button Text">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Two Button Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_two_button_link" value="{{$homepage->homepage_section_two_button_link}}" placeholder="Enter Homepage Section Two Button Link">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Three Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_three_heading" value="{{$homepage->homepage_section_three_heading}}" placeholder="Enter Homepage Section Three Heading">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Three Sub-Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_three_sub_heading" value="{{$homepage->homepage_section_three_sub_heading}}" placeholder="Enter Homepage Section Three Sub-Heading">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Three Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_three_button_text" value="{{$homepage->homepage_section_three_button_text}}" placeholder="Enter Homepage Section Three Button Text">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Three Button Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_three_button_link" value="{{$homepage->homepage_section_three_button_link}}" placeholder="Enter Homepage Section Three Button Link">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Four Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_4_heading" value="{{$homepage->homepage_section_four_heading}}" placeholder="Enter Homepage Section Four Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Four Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_4_description" value="{{$homepage->homepage_section_four_description}}" placeholder="Enter Homepage Section Four Description">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Four Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_4_button_text" value="{{$homepage->homepage_section_four_button_text}}" placeholder="Enter Homepage Section Four Button Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Four Button Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_4_button_link" value="{{$homepage->homepage_section_four_button_link}}" placeholder="Enter Homepage Section Four Button Link">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Five Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_5_heading" value="{{$homepage->homepage_section_five_heading}}" placeholder="Enter Homepage Section Five Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Five Sub-Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_5_sub_heading" value="{{$homepage->homepage_section_five_sub_heading}}" placeholder="Enter Homepage Section Five Sub-Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Five Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_5_button_text" value="{{$homepage->homepage_section_five_button_text}}" placeholder="Enter Homepage Section Five Button Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Five Button Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_5_button_link" value="{{$homepage->homepage_section_five_button_link}}" placeholder="Enter Homepage Section Five Button Link">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Six Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_6_heading" value="{{$homepage->homepage_section_six_heading}}" placeholder="Enter Homepage Section Six Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Six Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_6_text" value="{{$homepage->homepage_section_six_text}}" placeholder="Enter Homepage Section Six Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Seven Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_7_heading" value="{{$homepage->homepage_section_seven_heading}}" placeholder="Enter Homepage Section Seven Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Eight Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_8_heading" value="{{$homepage->homepage_section_eight_heading}}" placeholder="Enter Homepage Section Eight Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Nine Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_9_heading" value="{{$homepage->homepage_section_nine_heading}}" placeholder="Enter Homepage Section Nine Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Nine Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_9_text" value="{{$homepage->homepage_section_nine_text}}" placeholder="Enter Homepage Section Nine Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Nine Button Text</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_9_button_text" value="{{$homepage->homepage_section_nine_button_text}}" placeholder="Enter Homepage Section Nine Button Text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Homepage Section Nine Button Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="homepage_section_9_button_link" value="{{$homepage->homepage_section_nine_button_link}}" placeholder="Enter Homepage Section Nine Button Link">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="submit" value="Save Homepage" class="btn btn-success">
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