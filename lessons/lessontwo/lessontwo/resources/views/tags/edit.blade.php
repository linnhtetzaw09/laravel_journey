@extends('layouts.adminindex')

@section('content')

<!-- start content area -->

<div class="container-fluid">
    <div class="col-md-12">

        <form action="{{ route('tags.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-4">
                    <div class="row">

                        <div class="col-md-12 form-group mb-3">
                            <label class="gallery" for="image">Image
                                @if($leave->image)
                                    <img src="{{ asset($leave->image) }}" alt="{{ $leave->slug }}" class="img-thumbnail" width="100" height="100"/>
                                @else
                                    <span>Choose images</span>
                                @endif
                            </label> 
                            <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0" hidden/>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="startdate">Start Date <span class="text-danger">*</span></label> 
                            <input type="date" name="startdate" id="startdate" class="form-control form-control-sm rounded-0" value="{{old('startdate', $leave->startdate)}}"/>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="enddate">End Date <span class="text-danger">*</span></label> 
                            <input type="date" name="enddate" id="enddate" class="form-control form-control-sm rounded-0" value="{{old('enddate', $leave->enddate)}}"/>
                        </div>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-12 form-group mb-3">
                            <label for="title">Title <span class="text-danger">*</span></label> 
                            <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" placeholder="Enter Leave Title" value="{{old('title', $tag->name)}}"/>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="post_id">Class <span class="text-danger">*</span></label>
                            <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                                @foreach($posts as $post)
                                    <option value="{{ $post->id }}"
                                        @if($post['id'] === $leave['post_id'])
                                            selected
                                        @endif
                                    >{{ $post->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="tag">Tag <span class="text-danger">*</span></label>
                            <select name="tag" id="tag" class="form-control form-control-sm rounded-0">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        @if($tag['id'] === $leave['tag'])
                                            selected
                                        @endif
                                    >{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12 form-group mb-3">
                            <label for="content">Content <span class="text-danger">*</span></label> 
                            <textarea name="content" id="content" class="form-control form-control-sm rounded-0" rows="5" placeholder="Say Something ...">{{old('title', $leave->content)}}</textarea>
                        </div>

                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="{{ route('tags.index') }}" class="btn btn-secondary btn-sm rounded-0">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                        </div>

                    </div>
                </div>

            </div>

        </form>
    </div>

</div>

<!-- end content area -->

@endsection

@section('css')
<style type="text/css">

    .gallery{
        width: 100%;
        background-color: #eee;
        color: #aaa;
        text-align: center;
        padding: 10px;
    }

    .gallery.removetext span{
        display: none;
    }

    .gallery img{
        width: 100px;
        height: 100px;
        border: 2px dashed #aaa;
        border-radius: 4px;
        object-fit: cover;
        padding: 5px;
        margin: 0 5px;
    }

</style>
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){

        // Start Profile Preview
        let previewimages = function(input, output){
            if(input.files){
                let totalfiles = input.files.length;
                if(totalfiles > 0){
                    $(output).addClass("removetext");
                }else{
                    $(output).removeClass("removetext");
                }

                for(let x = 0; x < totalfiles; x++){
                    let filereader = new FileReader();
                    filereader.readAsDataURL(input.files[x]);

                    filereader.onload = function(e){
                        $(output).html("");
                        $($.parseHTML("<img>")).attr("src", e.target.result).appendTo(output);
                    }
                }
            }
        }

        $("#image").change(function(){
            previewimages(this, "label.gallery");
        })
    });
</script>

@endsection
