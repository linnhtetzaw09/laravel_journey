@extends("layouts.layout")

@section('title','Index Page')
@section('heading','My first Index Template')

@section('content')
<div>
    <h4>My template name is {{$hay}}</h4>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste hic, eius odio at quis officia doloremque iusto id voluptas qui dolorem enim omnis et, quasi minus. Natus sunt at expedita?
</div>
@endsection

{{--@section('footer','Thanks for using our Index Template')--}}

@section('footer')
<small>
    Copyright {{$getyear}}, Designed by ABC Co.,Ltd
</small>
@endsection