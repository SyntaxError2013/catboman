<!DOCTYPE html>
<html lang="en" class="yui3-js-enabled wf-omnespro-n2-active wf-omnespro-n3-active wf-proximanova-n1-active wf-proximanova-n4-active wf-proximanova-n7-active wf-active">

    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="A layout example that shows off a responsive photo gallery.">

        <title>Pensieve</title>

        <link href='http://fonts.googleapis.com/css?family=Asul' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="assets/css/pure-min.css">

        <link rel="stylesheet" href="assets/css/gallery.css">

        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/posts.css">
        <script src="//cdn.sdslabs.co.in/cdnjs/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="feeds.js"></script>

        <link rel="stylesheet" href="assets/css/posts.css">

        <script src="//cdn.sdslabs.co.in/cdnjs/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

        <script src="feeds.js"></script>

    </head>

    <body>

        <div>
            <div class="header">
                <div class="pure-menu pure-menu-open pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-selected"><a href="/">Home</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                    <ul style="float:right;">
                      <li><a href="" id="disconnect">Sign Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="pure-g-r" id="gConnect" style="display:none;">
              <button class="g-signin"
                  data-scope="https://www.googleapis.com/auth/plus.login"
                  data-requestvisibleactions="http://schemas.google.com/AddActivity"
                  data-clientId="695004088748-bhblgrp63ndtpc3kj36ku0usdjaek7cn.apps.googleusercontent.com"
                  data-accesstype="offline"
                  data-callback="onSignInCallback"
                  data-theme="dark"
                  data-cookiepolicy="single_host_origin">
              </button>
            </div>
            <div class="pure-g-r">
                <div class="pure-u-1-5 translucent-sidebar">
                  <div class="pure-g-r" style="content-align:center;">
                    <a class="heading-side" href="">Pensieve</a>
                  </div>
                  <div id="authOps">
                    <div id="profile"></div>
                    <!--<div id="visiblePeople"></div>
                    <pre id="authResult"></pre>-->
                  </div>
                  <div class="pure-button">Download this album</div>
                </div>
                <div class="pure-u-4-5 grid gplus2">
                    <div class="pure-u-1-3 photo-box">
                        <!--<a href="http://www.flickr.com/photos/95572727@N00/4070581709/">
                            <img src="http://farm3.staticflickr.com/2447/4070581709_1204f25e3b.jpg" alt="Photo of a Bamboo forest in Kyoto.">
                        </a>

                        <aside class="photo-box-caption">
                            The Bamboo Forest, Kyoto
                            <span>
                                by <a href="http://www.flickr.com/photos/95572727@N00/4070581709/">Stuck in Customs</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                            </span>
                        </aside>-->
                    </div>

                    <div class="pure-u-1-3 photo-box">
                        <a href="http://www.flickr.com/photos/ecstaticist/4015614533/">
                            <img src="http://farm3.staticflickr.com/2785/4015614533_3e04ac2c7d.jpg" alt="Photo of Dahlia taken using an HDR technique.">
                        </a>

                        <aside class="photo-box-caption">
                            HDR Dahlia
                            <span>
                                by <a href="http://www.flickr.com/photos/ecstaticist/4015614533/">ecstaticist</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                            </span>
                        </aside>
                    </div>

                    <div class="pure-u-1-3 photo-box">
                        <a href="http://www.flickr.com/photos/blmiers2/6159637428/">
                            <img src="http://farm7.staticflickr.com/6151/6159637428_6bffb5bce1.jpg" alt="Photo of a misty morning sunrise in Alaska.">
                        </a>

                        <aside class="photo-box-caption">
                            Misty Morning Sunrise, Alaska
                            <span>
                                by <a href="http://www.flickr.com/photos/blmiers2/6159637428/">blmiers2</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                            </span>
                        </aside>
                    </div>

                    <div class="pure-u-2-3 text-box">
                        <div class="l-box">
                            <h1 class="text-box-head">G+ Status</h1>
                            <p class="text-box-subhead">Date/Plus one's etc.</p>
                        </div>
                    </div>

                    <div class="pure-u-1-3 photo-box">
                        <a href="http://www.flickr.com/photos/blmiers2/6167391543/">
                            <img src="http://farm7.staticflickr.com/6171/6167391543_395a7cabfd.jpg" alt="Photo of a mountain in Alaska's Denali.">
                        </a>

                        <aside class="photo-box-caption">
                            Mountain, Alaska's Denali
                            <span>
                                by <a href="http://www.flickr.com/photos/blmiers2/6159637428/">blmiers2</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                            </span>
                        </aside>
                    </div>

                    <div class="pure-u-2-3 photo-box">
                        <a href="http://www.flickr.com/photos/jjjohn/2120309884/">
                            <img src="http://farm3.staticflickr.com/2109/2120309884_de48fdb9fe.jpg" alt="Photo of Earth's sky.">
                        </a>

                        <aside class="photo-box-caption">
                            Fire, Air, Earth and Water
                            <span>
                                by <a href="http://www.flickr.com/photos/jjjohn/2120309884/">jjjohn</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                            </span>
                        </aside>
                    </div>

                    <div class="pure-u-1-3 photo-box">
                        <a href="http://www.flickr.com/photos/betta_design/2086852016/">
                            <img src="http://farm3.staticflickr.com/2388/2086852016_5a58dd1881.jpg" alt="Photo of the Taj Mahal at sunset.">
                        </a>

                        <aside class="photo-box-caption">
                            Taj Mahal at sunset
                            <span>
                                by <a href="http://www.flickr.com/photos/betta_design/2086852016/">betta_design</a> / <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a>
                            </span>
                        </aside>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="g-plusone" style="float:left;" data-href="" data-annotation="inline" data-width="300">
                </div>
            </div>
        </div>  
        <div class="gplus"></div>
        <div class="gplus2"></div>
    </body>
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>

 <!--       <script src="http://yui.yahooapis.com/3.12.0/build/yui/yui-min.js"></script> -->

        <div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div>

        <script>
            YUI().use('node-base', 'node-event-delegate', function (Y) {
                // This just makes sure that the href="#" attached to the <a> elements
                // don't scroll you back up the page.
                Y.one('body').delegate('click', function (e) {
                    e.preventDefault();
                }, 'a[href="#"]');
            });
        </script>
                <!--<script>
                        $(function() {
        //                        $('.gplus').kycoGooglePlusFeed('114986089777689431996');

                                $('.gplus2').kycoGooglePlusFeed({
                                        id: '114986089777689431996',
                                        feedPosts: 20, // Feed posts to show on load
                                        postsIncrement: 1, // Number of feed posts to show on "Show more" button click
                                        maxPosts: 20, // Max number of posts to pull before "Show more" will go to Google+, cannot excced 20 because of Google API in use
                                        profileImageSize: 150, // Max is 250
                                        lang: 'en'
                                });
                        });
                </script>-->
        <script type="text/javascript">
var helper = (function() {
  var authResult = undefined;

  return {
    /**
     * Hides the sign-in button and connects the server-side app after
     * the user successfully signs in.
     *
     * @param {Object} authResult An Object which contains the access token and
     *   other authentication information.
     */
    onSignInCallback: function(authResult) {
      $('#authResult').html('Auth Result:<br/>');
      for (var field in authResult) {
        $('#authResult').append(' ' + field + ': ' + authResult[field] + '<br/>');
      }
      if (authResult['access_token']) {
        // The user is signed in
        this.authResult = authResult;
        helper.connectServer();
        // After we load the Google+ API, render the profile data from Google+.
        gapi.client.load('plus','v1',this.renderProfile);
      } else if (authResult['error']) {
        // There was an error, which means the user is not signed in.
        // As an example, you can troubleshoot by writing to the console:
        console.log('There was an error: ' + authResult['error']);
        $('#authResult').append('Logged out');
        $('#authOps').hide('slow');
        $('#gConnect').show();
      }
      console.log('authResult', authResult);
    },
    /**
     * Retrieves and renders the authenticated user's Google+ profile.
     */
    renderProfile: function() {
      var request = gapi.client.plus.people.get( {'userId' : 'me'} );
      var activities = gapi.client.plus.activities.list( {'userId' : 'me'}, "public" );
      activities.execute( function(act) {
          console.log($(act));
          $('#profile').append($(act));
      });
      request.execute( function(profile) {
          console.log(profile);
          $('#profile').empty();
          if (profile.error) {
            $('#profile').append(profile.error);
            return;
          }
          
          profile.image.url = profile.image.url.substr(0,profile.image.url.length-2);
          profile.image.url = profile.image.url + '250';
          var img = '<p><img src=\"' + profile.image.url + '\"></p>';
          $('#profile').append(
              $(img));
              //$('<p><img src="https://plus.google.com/s2/photos/profile/' + userId + '?sz=250"></p>'));
          $('#profile').append(
              $('<p>Hello ' + profile.displayName + '!<br />Tagline: ' +
              profile.tagline + '<br />About: ' + profile.aboutMe + '</p>'));
          if (profile.cover && profile.coverPhoto) {
            $('#profile').append(
                $('<p><img src=\"' + profile.cover.coverPhoto.url + '\"></p>'));
          }
        });
      $('#authOps').show('slow');
    },
    /**
     * Calls the server endpoint to disconnect the app for the user.
     */
    disconnectServer: function() {
      // Revoke the server tokens
      $.ajax({
        type: 'POST',
        url: window.location.href + '/disconnect',
        async: false,
        success: function(result) {
          console.log('revoke response: ' + result);
          $('#authOps').hide();
          $('#profile').empty();
          $('#visiblePeople').empty();
          $('#authResult').empty();
          $('#gConnect').show();
        },
        error: function(e) {
          console.log(e);
        }
      });
    },
    /**
     * Calls the server endpoint to connect the app for the user. The client
     * sends the one-time authorization code to the server and the server
     * exchanges the code for its own tokens to use for offline API access.
     * For more information, see:
     *   https://developers.google.com/+/web/signin/server-side-flow
     */
    connectServer: function() {
      console.log(this.authResult.code);
      $.ajax({
        type: 'POST',
        url: window.location.href + '/connect?state={{ STATE }}',
        contentType: 'application/octet-stream; charset=utf-8',
        success: function(result) {
          console.log(result);
          helper.people();
        },
        processData: false,
        data: this.authResult.code
      });
    },
    /**
     * Calls the server endpoint to get the list of people visible to this app.
     */
    people: function() {
      $.ajax({
        type: 'GET',
        url: window.location.href + '/people',
        contentType: 'application/octet-stream; charset=utf-8',
        success: function(result) {
          helper.appendCircled(result);
        },
        processData: false
      });
    },
    /**
     * Displays visible People retrieved from server.
     *
     * @param {Object} people A list of Google+ Person resources.
     */
    appendCircled: function(people) {
      $('#visiblePeople').empty();

      $('#visiblePeople').append('Number of people visible to this app: ' +
          people.totalItems + '<br/>');
      for (var personIndex in people.items) {
        person = people.items[personIndex];
        $('#visiblePeople').append('<img src="' + person.image.url + '">');
      }
    },
  };
})();

/**
 * Perform jQuery initialization and check to ensure that you updated your
 * client ID.
 */
$(document).ready(function() {
  $('#disconnect').click(helper.disconnectServer);
  if ($('[data-clientid="YOUR_CLIENT_ID"]').length > 0) {
    alert('This sample requires your OAuth credentials (client ID) ' +
        'from the Google APIs console:\n' +
        '    https://code.google.com/apis/console/#:access\n\n' +
        'Find and replace YOUR_CLIENT_ID with your client ID and ' +
        'YOUR_CLIENT_SECRET with your client secret in the project sources.'
    );
  }
});

/**
 * Calls the helper method that handles the authentication flow.
 *
 * @param {Object} authResult An Object which contains the access token and
 *   other authentication information.
 */
function onSignInCallback(authResult) {
  helper.onSignInCallback(authResult);
}
</script>
</html>