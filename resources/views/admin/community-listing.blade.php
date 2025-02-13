@include('admin.inc.header')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Community Listings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Community Listings</li>
        </ol>
    </nav>
</div>
    <section >
        <table class="table datatable">
            <thead>
                <th>So.No</th>
                <th>Community Listing Name</th>
                <th>Community Listing State</th>
                <th>Community Listing Image</th>
                <th>Community Listing Description</th>  
                <th>Community Listing Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($communitylisting as $row)
                    <tr>
                        <td> {{$loop->iteration}}</td>
                        <td> {{$row->community_listing_name}}</td>
                        <td> {{$row->community_listing_state}}</td>
                        <td><img src="{{ asset('storage/community/'.$row->community_listing_image) }}" width="100px" height="100px" alt="Listing Image"></td> 
                        <td> {{$row->community_listing_description}}</td>
                        <td> {{$row->community_listing_status}}</td>
                        <td>
                            <button class="btn btn-secondary edit" data-description="{{$row->community_listing_description}}" data-name="{{$row->community_listing_name}}" data-id="{{$row->community_listing_id}}" 
                                    data-status="{{$row->community_listing_status}}" data-bs-toggle="modal" data-bs-target="#community_category_editModal"> <i class="bi bi-pencil-square"></i>
                            </button>
                            <a href="{{ url('admin/delete/community-listing/'.$row->community_listing_id) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </section>

  {{--   Modal  --}}

    <div class="modal fade" id="community_category_editModal" tabindex="-1" aria-labelledby="categoryEditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryEditModalLabel">Edit Listing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="edit_id">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="edit_name">
                        </div>
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit_status" class="form-label">Status</label>
                            <select class="form-control" id="edit_status">
                                <option value="enable">Enable</option>
                                <option value="disable">Disable</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</main>
@include('admin.inc.footer')



