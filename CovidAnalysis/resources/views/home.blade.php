@extends('layouts.app')

@section('content')
    <div class="jumbotron action-wrap">
        <video autoplay="" muted="" loop="" class="videobg">
            <source src="{{asset ('movie/COVID19_full.mp4') }}" type="video/mp4">
        </video>
        <div class="video-cover"></div>
        <div class="action-message">
            <span>blabalalal</span>
            <em>aaaaaaaaa</em>
        </div>
    </div>
    <div class="container about-wrap" id="about-covid">
        <div class="row">
            <div class="col-12 col-sm-4 cap-item based-wrap">
                 Based on sentiment analysis of tweets between 19 December 2019 and April 2021.
            </div>
            <div class="col-12 col-sm-8 cap-item description-based-wrap">
                Working with the bigger data set tweets about COVID-19 (coronavirus), we put the results on the global maps and made many statistics about it.
            </div>
        </div>
    </div>
    <div class="container-fluid temporary-offers-wrap">
        <div class="row">
            <div class="col-12 col-sm-6 cap-item" >
                <a href="#statistics-wrap">Statistics</a>
            </div>
            <div class="col-12 col-sm-6 cap-item">
                <a href="#map-wrap" >Map</a>
            </div>
        </div>
    </div>
    <div class="container about-wrap" id="map-wrap">
        <div class="row filters-title">
            <h1>The most words used from <a href="https://github.com/thepanacealab/covid19_twitter/blob/master/COVID_19_dataset_Tutorial.ipynb">dataset</a></h1>
        </div>
    </div>
    <div class="container about-wrap" id="statistics-wrap">
        <div class="row filters-title">
            <h1>Statistics</h1>
        </div>
        <div class="row filters-subtitle">
            <h2>Usage COVID19/CORONAVIRUS words over time</h2>
            <p>The figure shows a comparison of words popularity over time for the two most popular words #coronavirus and #covid19.</p>
        </div>
        <div class="row filters-subtitle">
            <h2>Usage VACCINE hashtag over time</h2>
            <p>The figure shows a frequency of the word #vaccine.</p>
        </div>
        <div class="row filters-subtitle">
            <h2>Entities over time</h2>
            <p>The table shows the top five entities (confidence level -2) and their frequency per month in the TweetsCOV19 dataset since the beginning of 2020.- de <a href="https://data.gesis.org/tweetscov19/">editat</a></p>
        </div>
    </div>
    <div class="container about-wrap" id="map-wrap">
        <div class="row filters-title">
            <h1>Map</h1>
            <p>The following map shows the approximated geolocation distribution of TweetsCOV19 tweets at a global scale.</p>
        </div>
    </div>
@endsection
