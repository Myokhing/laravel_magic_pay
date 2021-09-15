@extends('backend.layouts.app')
@section('title', 'Create Admin User')
@section('admin-user-active', 'mm-active')
   @section('content') 
   <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-users icon-gradient bg-mean-fruit"></i></div>
            <div>Create Admin User</div>
    
        </div>
    </div>
    </div>
    
    <div class="content pt-3">
          <div class="card">
             <div class="card-body">
            <form action="{{ route('admin.admin-user.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="phone">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-secondary mr-2 back-btn">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
             </div>
          </div>
    </div>
@endsection
@section('scripts')
    
<script>
   $(document).ready(function() {
    
});
</script>
@endsection