

<div class="modal fade" id="editexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form  action="{{url('admin/update-question/')}}" id="question_update" method='post' enctype="multipart/form-data" >
          @csrf
          @method('PUT')
          <section class="section">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Update Question</h5>
                        <div id='slideupload' class="row mb-3">
                          <label for="inputText" class="col-sm-12 col-form-label">Question</label>
                          <div class="col-sm-12">
                            <input type="text"  name='questions_question' id="questions_question" class="form-control">
                          </div>
                          <label for="inputText" class="col-sm-12 col-form-label">Answer</label>
                          <div class="col-sm-12">
                            <input type="text"  name='questions_answer' id="questions_answer" class="form-control">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <input type="submit" value="Update Question" class='btn btn-success'>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form  action="{{url('admin/post-category/')}}" method='post' enctype="multipart/form-data" >
          @csrf
          <section class="section">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Add Category</h5>
                        <div id='slideupload' class="row mb-3">
                          <label for="inputText" class="col-sm-12 col-form-label">Category Name</label>
                          <div class="col-sm-12">
                            <input type="text"  name='categories_name' class="form-control" required>
                          </div>
                          <label for="inputText" class="col-sm-12 col-form-label">Category Description</label>
                          <div class="col-sm-12">
                            <input type="text"  name='categories_description' class="form-control">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <input type="submit" value="Submit New Category" class='btn btn-success'>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </div>
</div>
<!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Brain</span></strong>. All Rights Reserved
    </div>
    </div>
  </footer>
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}" defer></script>
  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/admin/js/main.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/multi/image-uploader.min.js')}}"></script>
  <script>
$('.edit').on('click', function() {
    var id = $(this).data('id');
    $('#question_update').attr('action', '{{url('admin/update-question')}}' + '/' +id);
    $('#questions_question').val($(this).data('question'));
    $('#questions_answer').val($(this).data('answer'));
});
  </script>
  <script>
        $('.input-images').imageUploader();
        $('.input-images2').imageUploader2();
   </script>


<script>
    function downloadpdf(){
      document.getElementsByClassName("download_btn")[0].innerHTML='Downloading...';
    var element = document.getElementById('invoice-print');
  var opt = {
  margin:       0,
  filename:     'invoice.pdf',
  image:        { type: 'jpeg', quality: 1 },
  html2canvas:  { scale: 2 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
};

html2pdf().set(opt).from(element).save().then(function () {
  document.getElementsByClassName("download_btn")[0].innerHTML = 'Completed';
}).catch(function (error) {
  document.getElementsByClassName("download_btn")[0].innerHTML = 'Error In Downloading Invoice, Please Reload';
});

    };

</script>
<script type="text/javascript">
  $('.btn-danger').on('click', function () {
      return confirm('Are you sure?');
  });
</script>

<script>
  $(document).ready(function(){
      $('.edit').on('click', function(){
          let id = $(this).data('id');
          let name = $(this).data('name');
          let description = $(this).data('description');
          let status = $(this).data('status');

          $('#edit_id').val(id);
          $('#edit_name').val(name);
          $('#edit_description').val(description);
          $('#edit_status').val(status); 
      });

      $('#editForm').on('submit', function(e){
          e.preventDefault();
          let id = $('#edit_id').val();
          let name = $('#edit_name').val();
          let description = $('#edit_description').val();
          let status = $('#edit_status').val();

          $.ajax({
              url: "/admin/update-community-listing/" + id,  
              type: "POST",
              data: {
                  _token: "{{ csrf_token() }}",
                  name: name,
                  description: description,
                  status: status
              },
              success: function(response){
                  alert('Listing Updated Successfully!');
                  location.reload(); 
              }
          });
      });
  });
</script>
<script>
  
  $(document).ready(function(){
      $('.edit').on('click', function(){
          let id = $(this).data('id');
          let name = $(this).data('name');
          let description = $(this).data('description');
          let status = $(this).data('status');

          $('#edit_id').val(id);
          $('#edit_name').val(name);
          $('#edit_description').val(description);
          $('#edit_status').val(status); 
      });

      $('#editForm').on('submit', function(e){
          e.preventDefault();
          let id = $('#edit_id').val();
          let name = $('#edit_name').val();
          let description = $('#edit_description').val();
          let status = $('#edit_status').val();

          $.ajax({
              url: "/admin/update-listing/" + id,  
              type: "POST",
              data: {
                  _token: "{{ csrf_token() }}",
                  name: name,
                  description: description,
                  status: status
              },
              success: function(response){
                  alert('Listing Updated Successfully!');
                  location.reload(); 
              }
          });
      });
  });
</script>
</body>

</html>