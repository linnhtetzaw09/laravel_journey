
@extends('layouts.adminindex')
@section('content')

    <!-- start content area -->

    <div class="container-fluid">
        <div class="col-md-12">
            <form action="{{ route('statuses.store') }}" method="POST">
            <!-- {{ csrf_field() }} -->
              @csrf

                <div class="row align-items-end">

                    <div class="col-md-6 form-group">
                        <label for="name">Name <span class="text-danger">*</span></label> 
                        <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter your status Name" />
                    </div>

                    <div class="col-md-6 form-group">
                        <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                    </div>

                </div>
            </form>
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
                            <input type="text" name="filtername" id="filtername" class="form-control form-control-sm rounded-0
                            " placeholder="Search ... " />
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
                    <th>By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </thead>
                <tbody>
                    @foreach($statuses as $idx=>$status)
                        <tr>
                            <td>
                                <input type="checkbox" name="singlechecks" class="form-check-input singlechecks" value="{{$status->id}}" />
                            </td>
                            <td>{{ ++$idx }}</td>
                            <td>{{ $status->name }}</td>
                            <!-- <td>{{ $status->user['name'] }}</td> -->
                            <td>{{ $status ['user']['name'] }}</td>
                            <td>{{ $status->created_at->format('d M Y') }}</td>
                            <td>{{ $status->updated_at->format('d M Y') }}</td>
                            <td>
                                <a href="javascript:void(0);" class="text-info me-2"><i class="fas fa-pen"></i></a>
                                <a href="javascript:void(0);" class="text-danger delete-btn" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>
                                <form id="formdelete-{{$idx}}" action="{{route('statuses.destroy', $status->id)}}" method="POST">
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

        $(document).ready(function(){
            // console.log("hi");

            // Single Delete
            $(".delete-btn").click(function(){
                const getidx = $(this).data('idx');
                // console.log(getidx);

                if(confirm(`Are u sure to delete ${getidx}`)){
                    $('#formdelete-'+getidx).submit();
                    return true;
                } else{
                    return false;
                }
            });
            // Single Delete

            // Bulk Delete
            $('#selectalls').click(function(){
                $('.singlechecks').prop('checked',$(this).prop('checked'));
            });
            // Bulk Delete


        });

    </script>
@endsection