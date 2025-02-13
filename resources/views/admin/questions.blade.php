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
            <th>Question Name</th>
            <th>Answer Email</th>
            <th>Action</th>
        </thead>
        <tbody>
          @foreach($questions as $question)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td> {{$question->questions_question}}</td>
            <td> {{$question->questions_answer}}</td>        
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