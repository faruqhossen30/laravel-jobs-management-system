@extends('userend.layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Circular</a></li>
        <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('circular.create')}}" type="button" class="btn btn-inverse-primary btn-icon-text">
                    <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                    Create
                </a>
               {{-- filter --}}

               <span><h6 class="py-4">Filter</h6></span>

               <select class="form-select w-25" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
               {{-- filter end --}}
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Author
                                </th>
                                <th>
                                    Create at
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($circulars as $circular)
                            <tr>
                                <td>
                                    {{$circulars->firstItem() + $loop->index}}
                                </td>
                                <td>
                                    {{$circular->title}}
                                </td>
                                <td>
                                    {{$circular->user_id}}
                                </td>
                                <td>
                                    {{$circular->created_at->format('d M Y')}}
                                </td>
                                <td>
                                    <form action="{{route('circular.destroy', $circular->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Sure ! Delete circular ?')" class="btn btn-danger btn-xs btn-icon">
                                            <i data-feather="trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('circular.edit', $circular->id)}}" type="button" class="btn btn-warning btn-xs btn-icon">
                                        <i data-feather="check-square"></i>
                                    </a>
                                    <a href="{{route('circular.show', $circular->id)}}" type="button" class="btn btn-success btn-xs btn-icon">
                                        <i data-feather="eye"></i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                   <div class="py-3">
                    {{$circulars->links()}}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('plugin-styles')
<!-- Plugin css import here -->
@endpush

@push('plugin-scripts')
<!-- Plugin js import here -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@push('custom-scripts')
<!-- Custom js here -->


@if (Session::has('create'))
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success'
        , title: 'Circular has been created!'
    })

</script>
@endif
@if (Session::has('update'))
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success'
        , title: 'Circular has been updated !'
    })

</script>
@endif
@if (Session::has('delete'))
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'warning'
        , title: 'Circular has been deleted !'
    })

</script>
@endif
@endpush
