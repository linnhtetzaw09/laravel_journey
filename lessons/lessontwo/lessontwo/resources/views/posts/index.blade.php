@extends('layouts.adminindex')
@section('content')

    <!-- start content area -->

    <div class="container-fluid">
        
        <div class="col-md-12">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm rounded-0">Create</a>
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
                    @foreach($posts as $idx => $post)
                        <tr>
                            <td>
                                <input type="checkbox" name="singlechecks" class="form-check-input singlechecks" value="{{$post->id}}">
                            </td>
                            <td>{{ ++$idx }}</td>
                            <td>{{ $leave->stage->name }}</td>
                            <td>{{ $leave['user']['name'] }}</td>
                            <td>{{ $leave->created_at->format('d M Y') }}</td>
                            <td>{{ $leave->updated_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}" class="text-info me-2"><i class="fas fa-pen"></i></a>
                                <a href="javascript:void(0);" class="text-danger delete-btn" data-idx="{{ $idx }}"><i class="fas fa-trash-alt"></i></a>

                                <form id="formdelete-{{ $idx }}" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: none;">
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
