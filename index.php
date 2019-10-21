<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Canecode switch Jquery Plugin</title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/canecode_switch.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/canecode_switch.css">
    </head>
    <body>
        <div class="description">
            <h1>Canecode switch Jquery Plugin</h1>
            <p>This is a simple plugin<br>
            it basicly takes a html select element and displays it as a "ipod-like" switch.<br>
            And as an extra, the switch can show/hide other elemens</p>
        </div>
        <h2>Working Demo:</h2>
        <div class="example">
            <input id="the_checkbox_id" type="checkbox" name="nobody_cares">
            <input type="textarea" class="this_shows_when_switch_is_off" placeholder="Switch is OFF">
            <input type="textarea" class="this_shows_when_switch_is_on" placeholder="Switch is ON">
            <script>
                var $ = jQuery;
                $(function(){
                    canecode_switch("#the_checkbox_id",".this_shows_when_switch_is_off", ".this_shows_when_switch_is_on");
                });
            </script>
        </div>
        <h2>Install:</h2>
        <div class="usage">
            <code>
                &lt;script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"&gt;&lt;/script&gt; <br>
                &lt;script src="js/canecode_switch.js" type="text/javascript"&gt;&lt;/script&gt; <br>
                &lt;link rel="stylesheet" type="text/css" href="css/canecode_switch.css"&gt;
            </code>
        </div>
        <h2>Use:</h2>
        <div class="usage">
            <code>

                &lt;input id="the_checkbox_id" type="checkbox" name="nobody_cares"&gt; <br>
                &lt;input type="textarea" class="this_shows_when_switch_is_off" placeholder="Swhitch is OFF"&gt; <br>
                &lt;input type="textarea" class="this_shows_when_switch_is_on" placeholder="Swhitch is ON"&gt; <br><br>
                &lt;script&gt; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;var $ = jQuery; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;$(function(){ <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;canecode_switch("#the_checkbox_id",".this_shows_when_switch_is_off", ".this_shows_when_switch_is_on"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp;}); <br>
                &lt;/script&gt;

            </code>
        </div>
        <div class="description">
            <p>By <a target="_blank" href="http://migueldeveloper.pt">Miguel Bengala</a></p>
        </div>
    </body>
    <style>
        body{
            font-family: arial;
            padding:30px;
            background:#eee;
        }
        .usage{
            background:#fff;
            padding:20px;
            box-sizing: border-box;
        }
        input{
            width:100%;
            padding:4px;
            max-width: 400px;
            box-sizing: border-box;
        }
        .example{
            background:#fff;
            color:#409cf8;
            padding:20px;
            box-sizing: border-box;
        }
        .description, .example, .usage{
            margin-bottom:100px;
            max-width: 1000px;
        }
    </style>
</html>