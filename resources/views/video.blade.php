@extends('layout')

@section('content')

<div id="divRss"></div>

<script>
$('#divRss').FeedEk ( {
    FeedUrl : 'http://www.nba.com/topvideo/rss.xml',
    MaxCount : 10,
    ShowPubDate:true,
    TitleLinkTarget:'_blank'
  } );
</script>

@endsection