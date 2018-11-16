@extends('layout')

@section('content')

    <!--<h1 class="text-center">{{ $NBA }}</h1>-->

<!-- The video -->
<video autoplay muted loop id="myVideo">
    <source src="/svg/videohypenba.mp4" type="video/mp4">
  </video>
  
  <!-- Optional: some overlay text to describe the video -->
  <div class="content">
    <h1>NBA Clips</h1>
    <p>CATCH THE LATEST NBA NEWS</p>
  </div>

<div id="divRss"></div>

<script>
$('#divRss').FeedEk ( {
    FeedUrl : 'http://www.espn.com/espn/rss/nba/news',
    MaxCount : 10,
    ShowDesc : true,
    ShowPubDate:true,
    TitleLinkTarget:'_blank'
  } );
</script>

@endsection