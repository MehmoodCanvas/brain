
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

var counter = 1; 

$(document).ready(function(){
    $('#clone_btn').on('click', function(){
        var answerParent = $('.answer_parent');
        var answerClone = $('.answer_clone');

        if (answerParent.length && answerClone.length) {
            var clone = answerParent.clone().removeClass('answer_parent'); 
            clone.find('input[type="text"]').val(''); 
            clone.find('button').remove(); 

            var radio = clone.find('input[type="radio"]');
            var label = clone.find('label[for^="radio"]');

            radio.attr('id', 'radio' + counter);
            radio.val(counter);
            label.attr('for', 'radio' + counter);

            answerClone.append(clone); 
            counter++; 
        } else {
            console.error('Required elements are missing in the DOM.');
        }
    });
});

</script>
<script>
$(document).ready(function () {
  $('.edit').on('click', function () {
    var id = $(this).data('id');
    counter = 1;
    $('#question_update').attr('action', '');
    $('#questions_question').val('');
    $('#questions_category').val('').change();
    $('.answer_parent_edit').not(':first').remove(); 
    $('.answer_parent_edit input[type="text"]').val('');
    $('.answer_parent_edit input[type="radio"]').prop('checked', false);

    $.ajax({
      url: '{{ url("admin/edit-question") }}/' + id,
      type: 'GET',
      success: function (response) {
        console.log(response.questions_category);
        $('#question_update').attr('action', '{{ url("admin/update-question") }}/' + id);
        $('#questions_question').val(response.questions_question);
        $('#questions_category').val(String(response.questions_category)).change();

        try {
          var answers = JSON.parse(response.questions_answer);
          var correctIndex = response.questions_correct_answer;

          if (Array.isArray(answers)) {
            $.each(answers, function (index, answer) {
              if (index === 0) {
                var firstAnswer = $('.answer_parent_edit');
                firstAnswer.find('input[type="text"]').val(answer);
                firstAnswer.find('input[type="radio"]').val(index).prop('checked', index == correctIndex);
              
                var radio = firstAnswer.find('input[type="radio"]');
                var label = firstAnswer.find('label');
                radio.attr('id', 'radio' + counter);
                radio.attr('name', 'questions_correct_answer');
                label.attr('for', 'radio' + counter);
                counter++;
              } else {
                var clone = $('.answer_parent_edit').first().clone();
              
                clone.find('input[type="text"]').val(answer);
                clone.find('input[type="radio"]').val(index).prop('checked', index == correctIndex);
              
                var radio = clone.find('input[type="radio"]');
                var label = clone.find('label');
              
                radio.attr('id', 'radio' + counter);
                radio.attr('name', 'questions_correct_answer');
                label.attr('for', 'radio' + counter);
              
                $('.answer_parent_edit').last().after(clone);
                counter++;
              }
            });
          } else {
            console.error('questions_answer is not a valid array:', answers);
          }
        } catch (e) {
          console.error('Error parsing questions_answer JSON:', e);
        }
      },
      error: function (xhr, status, error) {
        console.error('Error fetching question data:', error);
        alert('An error occurred while fetching question data. Please try again.');
      }
    });
  });

  $(document).on('click', '#clone_btn_edit', function () {
    var clone = $('.answer_parent_edit').first().clone();

    clone.find('input[type="text"]').val('');
    clone.find('input[type="radio"]').prop('checked', false);

    var radio = clone.find('input[type="radio"]');
    var label = clone.find('label');

    radio.attr('id', 'radio' + counter);
    radio.attr('name', 'questions_correct_answer');
    label.attr('for', 'radio' + counter);

    $('.answer_parent_edit').last().after(clone);
    counter++;
  });
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