@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Questions</li>
        </ol>
      </nav>
    </div>

    <section >
      <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Question</a>
      <table class="table datatable">
        <thead>
            <th>So.No</th>
            <th>Question</th>
            <th>Answers</th>
            <th>Correct Answer</th>
            <th>Category</th>
            <th>Action</th>
        </thead>
        <tbody>
          @foreach($questions as $question)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td> {{$question->questions_question}}</td>
            <td> {{$question->questions_answer}}</td>     
            <td> {{$question->questions_correct_answer}}</td>  
            <td> {{$question->categories_name}}</td>        

            <td><a class="btn btn-success edit" data-id="{{$question->questions_id}}" data-answer="{{$question->questions_answer}}" data-question="{{$question->questions_question}}" data-bs-toggle="modal" data-bs-target="#editexampleModal" ><i class="bi bi-pencil-square"></i></a><a href="{{url('admin/delete/question/'.$question->questions_id)}}" class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div><!-- End Left side columns -->

      
      </div>
    </section>

  </main><!-- End #main -->
@include('admin.inc.footer')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form  action="{{url('admin/post-question/')}}" method='post' enctype="multipart/form-data" >
          @csrf
          <section class="section">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Add Question</h5>
                        <div id='slideupload' class="row mb-3">
                          <div class="col-sm-12">
                            <label for="inputText" class="col-sm-12 col-form-label">Question</label>
                            <input type="text"  name='questions_question' class="form-control">
                          </div>
                          <div class="col-sm-12">
                            <label for="inputText" class="col-sm-12 col-form-label">Question</label>
                            <select name="questions_category" id="questions_category" class="form-control">
                              <option >Select Question Category</option>
                              @foreach($categories as $category)
                              <option value="{{$category->categories_id}}">{{$category->categories_name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-sm-12 answer_parent">
                            <div class="ans_input_wrap">
                              <label for="inputText" class="col-sm-12 col-form-label">Answer</label>
                              <input type="radio" class="radio-button__input" id="radio0" name="questions_correct_answer" value="0">
                              <label class="radio-button__label" for="radio0">
                                <span class="radio-button__custom"></span>
                              </label>
                              <input type="text"  name='questions_answer[]' class="form-control">
                              <button id="clone_btn" type="button"><i class="bi bi-plus"></i></button>
                            </div>
                          </div>
                        </div>
                        <div class="answer_clone"></div>
                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <input type="submit" value="Submit New Question" class='btn btn-success'>
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
