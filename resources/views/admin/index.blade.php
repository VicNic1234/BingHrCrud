@extends('layouts.master')
@section('title')
<title> Binghr – all users </title>
@endsection
@section('styles')
@endsection
@section('content')
<div class="row">
    <div class="row row-sm">
        <div class="col-lg-12">
            @include('Includes.messages')
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <span class="float-right">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add User</button>
                        </span>
                        <p class="text-muted card-sub-title">Exporting data from a table can often be a key part of a complex application. The Buttons extension for DataTables provides three plug-ins that provide overlapping functionality for data export:</p>
                    </div>
                    <div class="table-responsive  export-table">
                        <table id="file-datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">Name</th>
                                    <th class="border-bottom-0"></th>
                                    <th class="border-bottom-0">Created date</th>
                                    <th class="border-bottom-0">Role</th>
                                    <th class="border-bottom-0">Action</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td>System Architect</td>
                                        <td>{{  date('F d, Y h:i:s a',strtotime($user->created_at))}}</td>
                                        <td>{{ $user->role_type }}</td>
                                        <td><a href="#" class="action-icon edit-user" data-id="${index}"
                                            data-toggle="modal" data-target=".update-user">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit edit-svg"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </a>
                                        <a href="#" class="action-icon delete-user" data-id="{{ $user->id }}" onclick="deleteID(this);"  data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </a></td>
                                       
                                    </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">
               
                <div class="card-header"><h3 class="card-title">Custom Validation</h3></div>
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate="" _lpchecked="1" method="POST" action="{{route('user.add.user')}}">
                        @csrf
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Employe ID</label>
                            <input  type="text" class="form-control" id="validationCustom01" name="employe_id" placeholder="bing001" required=""/>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">First name</label> 
                            <input type="text" class="form-control" id="validationCustom02" name="first_name" placeholder="Otto" required="" />
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Last name</label> 
                            <input type="text" class="form-control" id="validationCustom02" name="last_name" placeholder="Ottolast" required="" />
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Email ID</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span> 
                                    <input type="text" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required="" />
                                <div class="invalid-feedback">Please enter valid email.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Mobile no</label>
                            <div class="input-group has-validation">
                                 <input type="text" class="form-control" id="validationCustomUsername"  name="mobile_no" aria-describedby="inputGroupPrepend" required="" />
                                <div class="invalid-feedback">Please enter mobile no.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Select role type</label>
                            <div class="input-group has-validation">
                                <select class="form-select border" id="validationCustom04"  name="role_type" required="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option>CEO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">username</label> 
                            <input type="text" class="form-control" id="validationCustom03" name="username" required="" />
                            <div class="invalid-feedback">Please provide a valid city.</div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">password</label>
                            <input type="password" class="form-control" id="validationCustom03" name="password" required="" />
                            <div class="invalid-feedback">Please enter password.</div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">confirm password</label>
                            <input type="password" class="form-control" id="validationCustom03" name="password_confirmation" required="" />
                            <div class="invalid-feedback">Please enter password.</div>
                        </div>
                        <div class="col-12">
                            <p>module permission</p>
                        </div>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add user</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
            
        </div>
        
      </div>
    </div>
  </div>

  <!-- Delte Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModaldropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Delete user</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('user.delete.user')}}" method="POST">
            @csrf
            <div class="modal-body">
                <p style="color:red">This action can not be revsered</p>
            <input type="hidden" id="id_to_be_deleted" name="id">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Understood</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection

@section('scripts')
		<script src="/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="/assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
		<script src="/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
		<script src="/assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="/assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="/assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
		<script src="/assets/js/table-data.js"></script>
       
        <script type="text/javascript">
            function deleteID(elem){
              var check = $(elem).attr('data-id');
                  //alert(check)
                  $('#id_to_be_deleted').val(check);
                  $('#deleteModal').modal('show');
            }
        </script>
        <script type="text/javascript">
            function viewForEdit(elem)
                {
                    $.ajax({
                        url:`{{route('admin.delete-leads')}}`,
                        type: 'GET',
                        dataType: 'JSON',
                        data: { id:id.getAttribute('data-id') },
                        success: function(data){
                            console.log(data)
                            if(data.success)

                            // {
                            //     $('#date').html(data.data.created_at);
                            //     $('#name').html(data.data.name);
                            //     $('#corp').html(data.data.name);
                            //     $('#cp').html(data.data.contact_person);
                            //     $('#email').html(data.data.email);
                            //     $('#phone').html(data.data.phone_number);
                            //     $('#link').attr('href', 'dashboard/xlsx/' + data.data.id);
                            //     $('#link2').attr('href', 'dashboard/edit/' + data.data.id);
                            //     $('#myModal2').modal('show');
                            // }
                        }
                    });
                }
        </script>
@endsection