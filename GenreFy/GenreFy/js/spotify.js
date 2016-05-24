// find template and compile it
var preview = document.getElementById('preview'),
    playingCssClass = 'playing',
    audioObject = null,
    apiKey = "YL4VORSBNQUETY5YM",
    styles = ["rock", "hiphop", "techno", "jazz", "classic", "country"],
    currentId = "",
    currentGenre = 0,
    currentSong = 1,
    scores = [];
    numberOfSongs = 4;
    currentSession = new Score(styles[currentGenre], 0);

    function Score(name, score) {
        this.name = name;
        this.score = score;
    };

jQuery.ajaxSettings.traditional = true;

$(document).ready(function () {
    $("#accept_button").hide();
    $("#decline_button").hide();
    $("#currentGenre").hide();
    var fetchTracks = function (albumId, callback) {
        $.ajax({
            url: 'https://api.spotify.com/v1/tracks/' + albumId,
            success: function (response) {
                callback(response);
            }
        });
    };

    var searchAlbums = function (style) {
        $.ajax({
            url: 'http://developer.echonest.com/api/v4/playlist/static?',
            data: {
                api_key: apiKey,
                format: "json",
                results: "25",
                style: style,
                bucket: ["id:spotify", "tracks", "id:7digital-US"],
                type: "artist-description"
            },
            success: function (response) {
                var index = Math.floor(response["response"]["songs"].length * Math.random());
                
                    currentId = response["response"]["songs"][index]["tracks"][0]["foreign_id"].split("track:")[1];

                fetchTracks(currentId, function (data) {
                    if (data.preview_url != null)
                    {
                        $(preview).css({ backgroundImage: "url(" + data.album.images[1].url + ")", height: data.album.images[1].height, width: data.album.images[1].width });
                        $("#currentSong").html(response["response"]["songs"][index]["artist_name"] + " - " + response["response"]["songs"][index]["title"]);
                    }
                    else
                        searchAlbums(styles[currentGenre]);
                });
            }
        });
    };

    preview.addEventListener('click', function (e) {
        var target = e.target;
        if (target !== null) {
            if (target.classList.contains(playingCssClass)) {
                audioObject.pause();
            }
            else {
                if (audioObject) {
                    audioObject.pause();
                }

                fetchTracks(currentId, function (data) {
                        audioObject = new Audio(data.preview_url);
                    audioObject.play();
                    target.classList.add(playingCssClass);
                    audioObject.addEventListener('ended', function () {
                        target.classList.remove(playingCssClass);
                    });
                    audioObject.addEventListener('pause', function () {
                        target.classList.remove(playingCssClass);
                    });
                });
            }
        }
    });

    document.getElementById('start-form').addEventListener('submit', function (e) {
        e.preventDefault();
        startGame();
        searchAlbums(styles[currentGenre]);
    }, false);

    document.getElementById('accept-form').addEventListener('submit', function (e) {
        e.preventDefault();
        likeSong();
    }, false);

    document.getElementById('decline-form').addEventListener('submit', function (e) {
        e.preventDefault();
        dislikeSong();
    }, false);

    function startGame() {
        $("#start_button").hide();
        $("#accept_button").show();
        $("#decline_button").show();
        $("#currentGenre").show();
    }

    function likeSong()
    {
        currentSession.score++;
        PlayNext();
    }

    function dislikeSong()
    {
        if (currentSession.score > 0)
            currentSession.score--;

        PlayNext();
    }

    function PlayNext()
    {
        if (currentGenre <= styles.length - 1) {
            if (currentSong >= numberOfSongs) {
                scores.push(currentSession);
                currentGenre++;
                currentSession = new Score(styles[currentGenre], 0);
                //console.log(scores);
                currentSong = 0;
            }
            currentSong++;
            searchAlbums(styles[currentGenre]);
        }
        else
        {
            InsertIntoDatabase();
        }
    }

    function InsertIntoDatabase()
    {
        $.ajax({
            type: "post",
            url: "http://project.cmi.hr.nl/2014_2015/spotify_mt1c_t5/GenreFy/custom/post.php",
            data: { rock: scores[0].score, hiphop: scores[1].score, techno: scores[2].score, jazz: scores[3].score, classic: scores[4].score, country: scores[5].score } ,
            success: function (data) {
               // console.log(data);
               // console.log(this.url);
                window.location.replace("http://project.cmi.hr.nl/2014_2015/spotify_mt1c_t5/GenreFy/pages/last_session.php");
            },
            error: function (XMLHttpRequest, textStatus, errorThrown, data) {
              //  console.log(this.url);
                alert("Status: " + textStatus); alert("Error: " + errorThrown);
               // console.log(XMLHttpRequest);
            }
        });
    }
});