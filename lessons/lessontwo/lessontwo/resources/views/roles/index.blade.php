@extends('layouts.adminindex')
@section('content')

    <!-- start content area -->

    <div class="container-fluid">
        
        <div class="col-md-12">
            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm rounded-0">Create</a>
        </div>

        <hr>

        <div class="col-md-12">
            <div class="row">

                <div class="col-md-2 mb-2">
                    <a href="javascript:void(0);" id="bulkdelete-btn" class="btn btn-danger btn-sm rounded-0">Bulk Delete</a>
                </div>

                <div class="col-md-10">
                    <form action="" method="">
           
                    <div class="row justify-content-end">

                    <div class="col-md-2 col-sm-6 mb-2">
                        <div class="input-group">
                            <input type="text" name="filtername" id="filtername" class="form-control form-control-sm rounded-0" placeholder="Search ... " />
                            <button type="submit" id="search-btn" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-12">
            <table id="mytable" class="table table-sm table-hover border">
                <thead>
                    <th>
                        <input type="checkbox" name="selectalls" id="selectalls" class="form-check-input selectalls" />
                    </th>
                    <th>No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </thead>
                <tbody>
                    @foreach($roles as $idx => $role)
                        <tr>
                            <td>
                                <input type="checkbox" name="singlechecks" class="form-check-input singlechecks" value="">
                            </td>
                            <td>{{ $idx + 1 }}</td>
                            <td><img src="{{asset($role->image)}}" class="rounded-circle me-2" width="20" height="20" alt=""/><a href="{{route('roles.show',$role->id)}}"></a>{{ $role->name }}</td>
                            <!-- <td>{{ $role->name }}</td> -->
                            <td>{{ $role->status->name ?? 'N/A' }}</td>
                            <td>{{ $role->user?->name ?? 'N/A' }}</td>
                            <td>{{ $role->created_at->format('d M Y') }}</td>
                            <td>{{ $role->updated_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('roles.edit', $role->id) }}" class="text-info me-2"><i class="fas fa-pen"></i></a>
                                <a href="javascript:void(0);" class="text-danger delete-btn" data-idx="{{ $idx }}"><i class="fas fa-trash-alt"></i></a>

                                <form id="formdelete-{{ $idx }}" action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    <!-- end content area -->

@endsection

@section('css')
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function() {

        // Single Delete
        $('.delete-btn').click(function() {
            const idx = $(this).data('idx');
            const form = $('#formdelete-' + idx);

            // Confirmation dialog
            if (confirm('Are you sure you want to delete this role?')) {
                form.submit();
            }
        });

        // Bulk Delete
        $('#selectalls').click(function() {
            $('.singlechecks').prop('checked', $(this).prop('checked'));
        });
    });
</script>

@endsection
