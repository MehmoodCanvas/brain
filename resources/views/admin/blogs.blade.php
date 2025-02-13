@include('admin.inc.header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>New Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/allblogs')}}">Blog Page</a></li>
          <li class="breadcrumb-item active">Blogs</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Blogs</h5>
              <form action="{{ url('admin/update-blogs') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Blogs Banner Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control"  name="blogs_image">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Blogs Main Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="blogs_heading"  placeholder="Enter Blogs Main Heading">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Blogs Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="blogs_description"  placeholder="Enter Blogs Description">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Blogs Slug</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="blogs_slug" placeholder="Auto-Generated" id="blogs_slug" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="submit" value="Publish Blog" class="btn btn-success">
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>

   

  </main><!-- End #main -->
@include('admin.inc.footer')    
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let headingInput = document.querySelector('input[name="blogs_heading"]');
        let slugInput = document.querySelector('input[name="blogs_slug"]');
        
        function generateSlug(text) {
            return text
                .toLowerCase()
                .replace(/ /g, '-') 
                .replace(/[^\w-]+/g, '');  
        }
        if (headingInput.value) {
            slugInput.value = generateSlug(headingInput.value);
        }
        headingInput.addEventListener("keyup", function() {
            slugInput.value = generateSlug(headingInput.value);
        });
    });
</script>

