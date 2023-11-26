
@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Error!</h4> {{Session::get('error')}}
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Berhasil!</h4> {{Session::get('success')}}
</div>
@endif

{{-- @if(Session::has('success'))
    toastr.success('{{Session::get('success')}}');

@endif --}}

@if(Session::has('alert'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-warning"></i> <b>Alert!</b></h4>{{Session::get('alert')}}
</div>
@endif