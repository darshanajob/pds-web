@extends('layouts.siteI')
@extends('layouts.atest')
@section('menuLocation')
	<!-- Page location -->
	<section id="subintro">
		<div class="container">
			<div class="row">
				<div class="span8">
					<ul class="breadcrumb">
						<li>&nbsp;&nbsp;&nbsp;<a href="/en/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active"> {{ __('Photo Gallery') }} </li>
					</ul>
				</div>
				<div class="span4">
					<div class="search">
					  <form class="input-append">
						<input class="search-form" id="appendedPrependedInput" type="text" placeholder="{{ __('Search here..') }}" />
						<button class="btn btn-inverse" type="submit">{{ __('Search') }}</button>
					  </form>
					</div>
				</div>
            </div>





        </div>


    </section>
    
            
      
             
       

        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                   
                  
                </header> 
                <div class="page-content">    
                    <div class="page-row">
                          
                        
                    </div>
                    <div class="row page-row">
                        @if($galary_image)

            @foreach($galary_image as $galary_image)
 
 <?php     $imagesss = explode('|', $galary_image->img); ?>
                     {!! Form::open(['method'=>'POST','class' => 'form-horizontal','action'=>array('publicImage@store',app()->getLocale()),'files'=>true]) !!}
                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="album-cover">
                                
                                <a href=""><img class="img-responsive"  height="100" width="100" src="/img/{{$imagesss[0]}}" alt="" /></a>
                                <div class="desc">
                                    <h4><small><a href="">{{$galary_image->name}}</a></small></h4>
                                    <p>{{$galary_image->des}}</p>
                                </div>
                            </div>
                        
                         <input type="hidden" id="custId" name="custId" value="{{$galary_image->id}}">
                         
                    <div class="desc">
                    {!! Form::submit('Check More ',['class'=>'btn btn-outline btn-primary']) !!}
                    
                    </div>
            
                {!! Form::close() !!}   
</div>
                    @endforeach
          
                @endif
                        
                       
                        
                    </div><!--//page-row-->
                    
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->

        
                
@stop




@section('content')

@stop
