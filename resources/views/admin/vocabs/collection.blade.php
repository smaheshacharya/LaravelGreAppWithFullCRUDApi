
@extends('layouts.app')
@section('content')
@if(count($vocabs) > 0)
        <div class="row justify-content-center">
            <div class="col-md-5">
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                    @foreach($vocabs as $vocab)
                              <div class="swiper-slide">
                                  
                <div  class="card" style="width:350px; height:auto;">
                <div class="card-header">{{$vocab->title }} &nbsp;<i id="vol" class="fas fa-volume-up"></i><i id="heart" class="far fa-heart"></i></div>
                <audio src="" hidden class="speech" ></audio>
                    <div style="height:auto; padding:50px;" class="card-body">
                     {!!$vocab->brief!!}
                    <hr>
                    Mnemonics: <i style="font-family:Arial, Helvetica, sans-serif">{!!$vocab->mnemonics!!}</i>
                     <br><br> 
                     <span style="font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                     eg. &nbsp{!!$vocab->example!!}
                    </span>
                    </div>
                <div class="card-footer">
                    @auth
                    @if(Auth::user()->id ==1 || Auth::user()->id ==3)
                    <a href="{{url('vocab/')}}/{{$vocab->id}}/edit" class="btn btn-primary btn-sm form-control" style="opacity:.8; background-color:blue; margin-bottom:10px;">Edit</a>
                    
                    {!!Form::open(['action'=>['VocabController@destroy',$vocab->id], 'method'=>'POST'])!!}
			         {{Form::hidden('_method','DELETE')}}
			             {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger form-control'])}}

        {!!Form::close()!!}
                
                 @endif
                 
                 @endauth
                 <i id="check" class="fas fa-check-circle fa-lg"></i><br> I know this word.
                </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        
            </div>
        </div>
        
    @else
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                 <h4>No Words Found !</h4>
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">

    $(document).ready(function () {
        $('#vol').on('click',function(e){
            e.preventDefault();
            var users = {!! json_encode($vocab->toArray()) !!};
            var text = users['title'];
            text = encodeURIComponent(text);
            var url = "https://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&tl=en&q="+ text;
            $('audio').attr('src',url).get(0).play();
           
        });
  });
  $('.btn-danger').on('click',function(){
    alert("Are you sure !");
  });

</script>

@endsection









