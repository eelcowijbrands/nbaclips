@extends('layout')

@section('content')

    <h1 class="text-center">{{ $NBA }}</h1>

<div id="divRss"></div>

<script>
$('#divRss').FeedEk ( {
    FeedUrl : 'http://www.espn.com/espn/rss/nba/news',
    MaxCount : 5,
    ShowDesc : true,
    ShowPubDate:true,
    TitleLinkTarget:'_blank'
  } );
</script>

@endsection