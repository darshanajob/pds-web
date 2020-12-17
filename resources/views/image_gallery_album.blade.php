@extends('layouts.siteI')
@extends('layouts.atest')
@section('menuLocation')
          <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">{{$images->name}}</h1>
                    <div class="breadcrumbs pull-right">
                      
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">     
                    <div class="row page-row">
                         <?php     $imagesss = explode('|', $images->img); ?>
  @foreach($imagesss as $img)
                      <a class="prettyphoto col-md-3 col-sm-3 col-xs-6"   height="100" width="100" rel="prettyPhoto[gallery]" title="Lorem ipsum dolor sit amet" href="/img/{{$img}}')}}"><img class="img-responsive img-thumbnail" src="/img/{{$img}}" alt="" /></a>
                                 @endforeach
                       
                                                      
                    </div><!--//page-row-->
                </div><!--//page-content--> 
            </div><!--//page--> 
             </div>
            @stop