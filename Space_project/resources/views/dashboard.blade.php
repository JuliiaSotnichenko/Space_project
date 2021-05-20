<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account details</title>
</head>

<body>
    <ul>
        <h1>Account details:</h1>
        @auth
        <li>First name: {{$user->first_name}}</li>
        <li>Last name: {{$user->last_name}}</li>
        <li>Country: {{$user->country}}</li>
        <li>Passport: {{$user->pass_port_number}}</li>
        <li>Email: {{$user->email}}</li>

        <a href="update/user" class="text-sm text-gray-700 underline">Edit</a>
        <a href="logout" class="text-sm text-gray-700 underline">Logout</a>

        <h1>Booking details:</h1>

        <li>Payment: {{ $booking->payment }}</li>
        <li>Package: {{ $booking->package }}</li>
        <li>Date of creation: {{ $booking->created_at }}</li>
        <li>Last updated: {{ $booking->updated_at}}</li>

        <!--Hidden section for paid users-->
        @if ($booking->payment == 'done' )
        <h2>Flight Info</h2>




        <li>Depart: {{ $flight->depart_date}} at {{ $flight->depart_time}}</li>
        <li>Arrival: {{ $flight->arrival_date}} at {{ $flight->arrival_time}}</li>
        <li>Status :{{ $flight->status}}</li>
        <li>Itinerary :{{ $flight->itinerary}}</li>
        <li>Location :{{ $flight->location}}</li>
        <li>Flight ref. :{{ $flight->fly_ref}}</li>






        <div>
            <p>


            </p>


        </div>

        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $flight->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org">pirate bay</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 600px;
                    }
                </style><a href="https://www.embedgooglemap.net">google map html generator</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 600px;
                    }
                </style>
            </div>
        </div>
        <div>
            <!-- weather widget start -->
            <div id="m-booked-weather-bl250-33656">
                <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:160px;" id="width1">
                    <div class="booked-wzs-250-175_in">
                        <div class="booked-wzs-250-175-data">
                            <div class="booked-wzs-250-175-left-img wrz-18"> </div>
                            <div class="booked-wzs-250-175-right">
                                <div class="booked-wzs-day-deck">
                                    <div class="booked-wzs-day-val">
                                        <div class="booked-wzs-day-number"><span class="plus">+</span>11</div>
                                        <div class="booked-wzs-day-dergee">
                                            <div class="booked-wzs-day-dergee-val">&deg;</div>
                                            <div class="booked-wzs-day-dergee-name">C</div>
                                        </div>
                                    </div>
                                    <div class="booked-wzs-day">
                                        <div class="booked-wzs-day-d">H: <span class="plus">+</span>13&deg;</div>
                                        <div class="booked-wzs-day-n">L: <span class="plus">+</span>4&deg;</div>
                                    </div>
                                </div>
                                <div class="booked-wzs-250-175-info">
                                    <div class="booked-wzs-250-175-city smolest">Luxembourg </div>
                                    <div class="booked-wzs-250-175-date">Mercredi, 19 Mai</div>
                                    <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div>
                                </div>
                            </div>
                        </div>
                        <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250">
                            <tr>
                                <td>Jeu.</td>
                                <td>Ven.</td>
                                <td>Sam.</td>
                                <td>Dim.</td>
                                <td>Lun.</td>
                                <td>Mar.</td>
                            </tr>
                            <tr>
                                <td class="week-day-ico">
                                    <div class="wrz-sml wrzs-03"></div>
                                </td>
                                <td class="week-day-ico">
                                    <div class="wrz-sml wrzs-18"></div>
                                </td>
                                <td class="week-day-ico">
                                    <div class="wrz-sml wrzs-18"></div>
                                </td>
                                <td class="week-day-ico">
                                    <div class="wrz-sml wrzs-18"></div>
                                </td>
                                <td class="week-day-ico">
                                    <div class="wrz-sml wrzs-18"></div>
                                </td>
                                <td class="week-day-ico">
                                    <div class="wrz-sml wrzs-18"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="week-day-val"><span class="plus">+</span>13&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>13&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>11&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>12&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>12&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>13&deg;</td>
                            </tr>
                            <tr>
                                <td class="week-day-val"><span class="plus">+</span>5&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>9&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>6&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>5&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>7&deg;</td>
                                <td class="week-day-val"><span class="plus">+</span>5&deg;</td>
                            </tr>
                        </table> </a>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                var css_file = document.createElement("link");
                var widgetUrl = location.href;
                css_file.setAttribute("rel", "stylesheet");
                css_file.setAttribute("type", "text/css");
                css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1');
                document.getElementsByTagName("head")[0].appendChild(css_file);

                function setWidgetData_33656(data) {
                    if (typeof(data) != 'undefined' && data.results.length > 0) {
                        for (var i = 0; i < data.results.length; ++i) {
                            var objMainBlock = document.getElementById('m-booked-weather-bl250-33656');
                            if (objMainBlock !== null) {
                                var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                                objMainBlock.innerHTML = data.results[i].html_code;
                                if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                            }
                        }
                    } else {
                        alert('data=undefined||data.results is empty');
                    }
                }
                var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18320;type=3;scode=124;ltid=3458;domid=581;anc_id=63253;countday=undefined;cmetric=1;wlangID=3;color=137AE9;wwidth=160;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
                widgetSrc += ';ref=' + widgetUrl;
                widgetSrc += ';rand_id=33656';
                widgetSrc += ';wstrackId=441581020';
                var weatherBookedScript = document.createElement("script");
                weatherBookedScript.setAttribute("type", "text/javascript");
                weatherBookedScript.src = widgetSrc;
                document.body.appendChild(weatherBookedScript)
            </script><!-- weather widget end -->
        </div>







        @endif

        @endauth

    </ul>