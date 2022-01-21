<?php
session_start();
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <title> إضافة so </title>
    <link rel="stylesheet" href="assets/css/sty.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="ms-icon.png">


    <script>
        var DARK_THEME = document.getElementById('dark_theme');
        var HEAD = document.getElementsByTagName('head')[0];
        var CURRENT_THEME = 'light';


        const AAA = "#181F25";
        const BBB = '#EFF1F2';
    </script>
    <script>
        var CURRENT_THEME = 'dark';
    </script>


</head>

<body onload="pageloaded()">

    <div class="sidebar-main-container" id="sidebar">
        <a href="" class="noSelect">
            <img class='sidebar-logo' src="" alt="">
        </a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <a id="courses" href="home.php" class="sidebar-item-container noSelect">
            <div class="sidebar-item-title">
                المواد
            </div>
            <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
              </svg>


            <a id="addcourse" href="add.php" class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                    أضف مادة
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>

            






           











    </div>

    <div class="overlay stopScroll noSelect" id="overlay" onclick="close_sidebar()"></div>



    <div class="body">





        <div class="searchbar-container-bg searchbar-container-bg-tras" id="formCont">

            <form id="searchFrom" method="GET" action="">
                <div id="cancelSearch" onclick="hideSearchResult()">
                    <svg viewBox="0 0 24 24" width="25" height="22" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                </div>

                <input id="searchInput" type="text" placeholder="البحث بالأسم" autocomplete="off" name="name">
                <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
            </form>

            <div class="visits_count_search">
                جامعة الملك سعود
            </div>
            <div class="logo-sidebar-button-cont">
                <a href="" class="noSelect mobile-search-logo">
                    <img src="" alt="">
                </a>
                <div class="sidebar-button" onclick="open_sidebar()">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </div>
            </div>


        </div>




        <form action="addsoconnect.php" method="POST" class="main-card" id="">




            <input id="collage_type" type="text" name="collage_type" value="" hidden>
            <div id="collegeTypesNames" class="inputs">
                <label>الكليات</label>
                <div class="options noSelect">
                    <div onclick="getCollegesByTypeId(1,'الكليات العلمية',this)" class="option noSelect">
                        الكليات العلمية
                    </div>
                   
                </div>
            </div>

            <input id="collage" type="text" name="collage" hidden value="">
            <div id="collegesNames" class="inputs">
            </div>


            <input id="section_input" type="text" name="section" hidden value="">
            <div id="sectionsNames" class="inputs">
            </div>
            <div class="inputs1">
                <label>SO</label>
                <input onkeyup="name_change()" id="student_outcome" type="text" name="student_outcome" value="" required placeholder="So  " autocomplete="off">

            </div>
            <div class="inputs1">
                <label>SO</label>
                <input onkeyup="name_change()" id="student_outcome1" type="text" name="student_outcome1" value=""  placeholder="So  " autocomplete="off">

            </div>
          
            <button id="submitBTN" class="delete-filter-button">
                         أضف 
                     </button>
        </form>
    </div>
   
    <footer>



    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        openConsoleUrl = "https://www.google.com"
    </script>
    <script>
        (function() {
            try {
                var $_console$$ = console;
                Object.defineProperty(window, "console", {
                    get: function() {
                        if ($_console$$._commandLineAPI)
                            throw "Sorry, for security reasons, the script console is deactivated on unirate.xyz";
                        return $_console$$
                    },
                    set: function($val$$) {
                        $_console$$ = $val$$
                    }
                })
            } catch ($ignore$$) {}
        })();
    </script>
    <script>
        document.addEventListener('keydown', function() {
            if (event.keyCode == 123) {
                //   alert("You Can not Do This! 5");
                window.location.href = openConsoleUrl;
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                //   alert("You Can not Do This! 4");
                window.location.href = openConsoleUrl;
                return false;
            } else if (event.ctrlKey && event.keyCode == 85) {
                //   alert("You Can not Do This! 3");
                window.location.href = openConsoleUrl;
                return false;
            }
        }, false);

        if (document.addEventListener) {
            document.addEventListener('contextmenu', function(e) {
                // alert("You Can not Do This! 2");
                e.preventDefault();
                window.location.href = openConsoleUrl;
            }, false);
        } else {
            document.attachEvent('oncontextmenu', function() {
                //   alert("You Can not Do This! 1");
                window.event.returnValue = false;
                window.location.href = openConsoleUrl;
            });
        }
    </script>
    <script>
        const addMaximumScaleToMetaViewport = () => {
            const el = document.querySelector('meta[name=viewport]');

            if (el !== null) {
                let content = el.getAttribute('content');
                let re = /maximum\-scale=[0-9\.]+/g;

                if (re.test(content)) {
                    content = content.replace(re, 'maximum-scale=1.0');
                } else {
                    content = [content, 'maximum-scale=1.0'].join(', ')
                }

                el.setAttribute('content', content);
            }
        };

        const disableIosTextFieldZoom = addMaximumScaleToMetaViewport;

        // https://stackoverflow.com/questions/9038625/detect-if-device-is-ios/9039885#9039885
        const checkIsIOS = () =>
            /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

        if (checkIsIOS()) {
            disableIosTextFieldZoom();
        }
    </script>
   

   
   <script>
        var COLLEGES_DATA = [{
            "id": 1,
            "name": "\u0643\u0644\u064a\u0629 \u0639\u0644\u0648\u0645 \u0627\u0644\u062d\u0627\u0633\u0628 \u0648\u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a",
            "collegeType_id": 1
        
        }]
        
        var SECTIONS_DATA = [{
            "id": 1,
            "name": "\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u062d\u0627\u0633\u0628",
            "college_id": 1
        }, {
            "id": 2,
            "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u062d\u0627\u0633\u0628",
            "college_id": 1
        }, {
            "id": 3,
            "name": "\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0628\u0631\u0645\u062c\u064a\u0627\u062a",
            "college_id": 1
        }, {
            "id": 4,
            "name": "\u0646\u0638\u0645 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a",
            "college_id": 1
        },  {
            "id": 8,
            "name": "\u062a\u0642\u0646\u064a\u0629 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a",
            "college_id": 1
        
        }]
    </script>
 
 <script src="addsub.js"></script>
 <script src="main.js"></script>

</body>

</html>