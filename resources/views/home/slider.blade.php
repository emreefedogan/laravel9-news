<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 tn-left">

                <div class="row tn-slider">
                    @foreach($sliderdata as $rs)
                        @if($rs->status=='True')
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{Storage::url($rs->image)}}" height="350px" />
                            <div class="tn-title">
                                <a href="{{route('news',['id'=>$rs->id])}}">{{$rs->title}}</a>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach

                </div>
            </div>





    <div class="col-md-6 tn-right">
                <div class="container">

                <div class="row">

                    @foreach($sliderdata as $rs)
                        @if($rs->status=='True')
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{Storage::url($rs->image)}}" height="175px" />
                            <div class="tn-title">
                                <a href="{{route('news',['id'=>$rs->id])}}">{{$rs->title}}</a>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
                </div>
</div>
<!-- Top News End-->
</div>

</div>
</div>
