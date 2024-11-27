@extends('layouts.adminindex')
@section('content')

    <!-- start content area -->

    <div class="container-fluid">
        <div class="col-md-12">

            <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

                <div class="row align-items-end">

                    <div class="col-md-3 form-group">
                        <label for="image">Image</label> 
                        <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0"/>
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="name">Name <span class="text-danger">*</span></label> 
                        <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter Role Name"/>
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="status_id">Status</label>
                        <select name="status_id" id="status_id" class="form-control form-control-sm rounded-0">
                            @foreach($statuses as $status)
                                <option value="{{ $status['id'] }}">{{ $status['name'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3 form-group">
                        <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-sm rounded-0">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <!-- end content area -->

@endsection

@section('css')
@endsection

@section('scripts')

    <script type="text/javascript">

        $(document).ready(function(){

            // // Single Delete
            // $('.delete-btn').click(function(){
            //     const getidx = $(this).data('idx');
            //     // console.log(getidx);
            // })

            // // Bulk Delete
            // $('#selectalls').click(function(){
            //     $('.singlechecks').prop('checked',$(this).prop('checked'));
            // })

        });

    </script>

@endsection
