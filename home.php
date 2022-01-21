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

    <link rel="icon" href="ms-icon.png">
    <title> إضافة مادة </title>
    <link rel="stylesheet" href="assets/css/sty.css">
    <link rel="stylesheet" href="assets/css/styles.css">



    <script>
        var DARK_THEME = document.getElementById('dark_theme');
        var HEAD = document.getElementsByTagName('head')[0];
        var CURRENT_THEME = 'light';


        const AAA = "#181F25";
        const BBB = '#EFF1F2';
    </script>
    

<style>
    .main-card-dr{
        background-color: #202731 !important;
    }

    .main-card-dr .name span{
        color: #e0e6ed !important;;
    }

    .main-card-dr .section {
        color: #a7afb8 !important;;
    }

    .main-card-dr .icons {
        color: #a7afb8 !important;;
    }

    .main-card-dr:hover{
        -webkit-box-shadow: 0px 10px 45px 0px rgba(0, 0, 0, 0.20) !important;
        -moz-box-shadow: 0px 10px 45px 0px rgba(0, 0, 0, 0.20) !important;
        box-shadow: 0px 10px 45px 0px rgba(0, 0, 0, 0.20) !important;
    }
 a, a:hover, a:focus, a:active {
    text-decoration: none !important;
    color:blue;
      
 }
</style>
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

        <a id="subjects" href="home.php" class="sidebar-item-container noSelect">
            <div class="sidebar-item-title">
                المواد
            </div>
            <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
              </svg>


            <a id="addsub" href="add.php" class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                    أضف مادة
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>
            <a id="addso" href="addSo.php"class="sidebar-item-container noSelect">
                <div class="sidebar-item-title">
                    أضف so
                </div>
                <svg class="sidebar-item-icon" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </a>
















    </div>

    <div class="overlay stopScroll noSelect" id="overlay" onclick="close_sidebar()"></div>





    <div class="body">


        <!-- <div class="filters-container">
            <div class="unactive-filters">

                <a href="index1.html" class="filter"> 
                    الكليات العلمية
                </a>
                <a href="" class="filter"> 
                    الكليات الصحية
                </a>
                <a href="" class="filter"> 
                    الكليات الإنسانية
                </a>
                <a href="" class="filter"> 
                    السنة الأولى المشتركة
                </a>

            </div>
        </div>
    -->

        <div class="searchbar-container-bg searchbar-container-bg-tras" id="formCont">

            <form id="searchFrom" method="GET" action="https://unirate.xyz/search/doctors">
                <div id="cancelSearch" onclick="hideSearchResult()">
                    <svg viewBox="0 0 24 24" width="25" height="22" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                </div>

                <input id="searchInput" type="text" placeholder="البحث بالأسم" autocomplete="off" name="name">
                <button onclick="document.location='subject.php'">
                                 <a href="subject.php" ><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> </a>
            </button>
            </form>


            <div class="logo-sidebar-button-cont">
                <a href="" class="noSelect mobile-search-logo">
                    <img src="" alt="">
                </a>
                <div class="sidebar-button" onclick="open_sidebar()">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </div>
            </div>


        </div>
        <div class="cards-list">
            
        <?php
        $conn=mysqli_connect("localhost","root","","ABET");
     $q2="select * from course";
     $run=mysqli_query($conn, $q2);
     while($row=mysqli_fetch_array($run))
     {
        $id =$row[0];
        $name =$row[1];
     ?>
     
   
 
     <a href="subject.php?id=<?php echo $id; ?>">
           
                <div class="card">
            
                    <div class="card_image">
                        <img src="free.jpeg"/> </div>
                        <div class="card_title title-black">
                         <p> <?php echo $name ; ?> </p>
                         
                    </div>
                    
                </div>
                </a>
       
        <?php } ?>
      
        </div>
        
        <footer>

            <div class="poli">

            </div>
          
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
                                throw "Sorry, for security reasons, the script console is deactivated ";
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
        <script src="main.js"></script>



        <script>
            var COLLEGES_DATA = [{
                "id": 1,
                "name": "\u0643\u0644\u064a\u0629 \u0639\u0644\u0648\u0645 \u0627\u0644\u062d\u0627\u0633\u0628 \u0648\u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a",
                "collegeType_id": 1
            }, {
                "id": 2,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0647\u0646\u062f\u0633\u0629",
                "collegeType_id": 1
            }, {
                "id": 3,
                "name": "\u0643\u0644\u064a\u0629 \u0639\u0644\u0648\u0645 \u0627\u0644\u0623\u063a\u0630\u064a\u0629 \u0648\u0627\u0644\u0632\u0631\u0627\u0639\u0629",
                "collegeType_id": 1
            }, {
                "id": 4,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0639\u0644\u0648\u0645",
                "collegeType_id": 1
            }, {
                "id": 5,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0639\u0645\u0627\u0631\u0629 \u0648\u0627\u0644\u062a\u062e\u0637\u064a\u0637",
                "collegeType_id": 1
            }, {
                "id": 6,
                "name": "\u0643\u0644\u064a\u0629 \u0625\u062f\u0627\u0631\u0629 \u0627\u0644\u0623\u0639\u0645\u0627\u0644",
                "collegeType_id": 1
            }, {
                "id": 11,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0637\u0628",
                "collegeType_id": 2
            }, {
                "id": 12,
                "name": "\u0643\u0644\u064a\u0629 \u0637\u0628 \u0627\u0644\u0623\u0633\u0646\u0627\u0646",
                "collegeType_id": 2
            }, {
                "id": 13,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0635\u064a\u062f\u0644\u0629",
                "collegeType_id": 2
            }, {
                "id": 14,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0639\u0644\u0648\u0645 \u0627\u0644\u0637\u0628\u064a\u0629 \u0627\u0644\u062a\u0637\u0628\u064a\u0642\u064a\u0629",
                "collegeType_id": 2
            }, {
                "id": 15,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u062a\u0645\u0631\u064a\u0636",
                "collegeType_id": 2
            }, {
                "id": 16,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u062d\u0642\u0648\u0642 \u0648\u0627\u0644\u0639\u0644\u0648\u0645 \u0627\u0644\u0633\u064a\u0627\u0633\u064a\u0629",
                "collegeType_id": 3
            }, {
                "id": 17,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0644\u063a\u0627\u062a \u0648\u0627\u0644\u062a\u0631\u062c\u0645\u0629",
                "collegeType_id": 3
            }, {
                "id": 18,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0622\u062f\u0627\u0628",
                "collegeType_id": 3
            }, {
                "id": 19,
                "name": "\u0645\u0639\u0647\u062f \u0627\u0644\u0644\u063a\u0648\u064a\u0627\u062a \u0627\u0644\u0639\u0631\u0628\u064a\u0629",
                "collegeType_id": 3
            }, {
                "id": 20,
                "name": "\u0643\u0644\u064a\u0629 \u0639\u0644\u0648\u0645 \u0627\u0644\u0631\u064a\u0627\u0636\u0629 \u0648\u0627\u0644\u0646\u0634\u0627\u0637 \u0627\u0644\u0628\u062f\u0646\u064a",
                "collegeType_id": 3
            }, {
                "id": 21,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u062a\u0631\u0628\u064a\u0629",
                "collegeType_id": 3
            }, {
                "id": 22,
                "name": "\u0643\u0644\u064a\u0629 \u0627\u0644\u0633\u064a\u0627\u062d\u0629 \u0648\u0627\u0644\u0622\u062b\u0627\u0631",
                "collegeType_id": 3
            }, {
                "id": 41,
                "name": "\u0627\u0644\u0633\u0646\u0629 \u0627\u0644\u0623\u0648\u0644\u0649 \u0627\u0644\u0645\u0634\u062a\u0631\u0643\u0629",
                "collegeType_id": 4
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
            }, {
                "id": 5,
                "name": "\u0627\u0644\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0643\u064a\u0645\u064a\u0627\u0626\u064a\u0629",
                "college_id": 2
            }, {
                "id": 6,
                "name": "\u0627\u0644\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0645\u062f\u0646\u064a\u0629",
                "college_id": 2
            }, {
                "id": 7,
                "name": "\u0627\u0644\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0639\u0627\u0645\u0629",
                "college_id": 2
            }, {
                "id": 8,
                "name": "\u062a\u0642\u0646\u064a\u0629 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a",
                "college_id": 1
            }, {
                "id": 9,
                "name": "\u0627\u0644\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0643\u0647\u0631\u0628\u0627\u0626\u064a\u0629",
                "college_id": 2
            }, {
                "id": 10,
                "name": "\u0627\u0644\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0645\u064a\u0643\u0627\u0646\u064a\u0643\u064a\u0629",
                "college_id": 2
            }, {
                "id": 11,
                "name": "\u0627\u0644\u062c\u064a\u0648\u0644\u0648\u062c\u064a\u0627 \u0648\u0627\u0644\u062c\u064a\u0648\u0641\u064a\u0632\u064a\u0627\u0621",
                "college_id": 4
            }, {
                "id": 12,
                "name": "\u0627\u0644\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0635\u0646\u0627\u0639\u064a\u0629",
                "college_id": 2
            }, {
                "id": 13,
                "name": "\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0628\u062a\u0631\u0648\u0644 \u0648\u0627\u0644\u063a\u0627\u0632 \u0627\u0644\u0637\u0628\u064a\u0639\u064a",
                "college_id": 2
            }, {
                "id": 14,
                "name": "\u0627\u0644\u0627\u062d\u0635\u0627\u0621 \u0648\u0627\u0644\u0628\u062d\u0648\u062b \u0627\u0644\u0639\u0645\u0644\u064a\u0627\u062a",
                "college_id": 4
            }, {
                "id": 15,
                "name": "\u0639\u0644\u0645 \u0627\u0644\u062d\u064a\u0648\u0627\u0646",
                "college_id": 4
            }, {
                "id": 16,
                "name": "\u0627\u0644\u0631\u064a\u0627\u0636\u064a\u0627\u062a",
                "college_id": 4
            }, {
                "id": 17,
                "name": "\u0627\u0644\u0625\u062f\u0627\u0631\u0629",
                "college_id": 6
            }, {
                "id": 18,
                "name": "\u0627\u0644\u0643\u064a\u0645\u064a\u0627\u0621",
                "college_id": 4
            }, {
                "id": 19,
                "name": "\u0627\u0644\u0641\u064a\u0632\u064a\u0627\u0621 \u0648\u0627\u0644\u0641\u0644\u0643",
                "college_id": 4
            }, {
                "id": 20,
                "name": "\u0627\u0644\u0646\u0628\u0627\u062a \u0648\u0627\u0644\u0623\u062d\u064a\u0627\u0621 \u0627\u0644\u062f\u0642\u064a\u0642\u0629",
                "college_id": 4
            }, {
                "id": 21,
                "name": "\u0627\u0644\u0643\u064a\u0645\u064a\u0627\u0621 \u0627\u0644\u062d\u064a\u0648\u064a\u0629",
                "college_id": 4
            }, {
                "id": 22,
                "name": "\u0627\u0644\u0625\u062f\u0627\u0631\u0629 \u0627\u0644\u0635\u062d\u064a\u0629",
                "college_id": 6
            }, {
                "id": 23,
                "name": "\u0627\u0644\u0625\u0642\u062a\u0635\u0627\u062f",
                "college_id": 6
            }, {
                "id": 24,
                "name": "\u0627\u0644\u0625\u062f\u0627\u0631\u0629 \u0627\u0644\u0639\u0627\u0645\u0629",
                "college_id": 6
            }, {
                "id": 25,
                "name": "\u0627\u0644\u0645\u0627\u0644\u064a\u0629",
                "college_id": 6
            }, {
                "id": 26,
                "name": "\u0627\u0644\u062a\u0633\u0648\u064a\u0642",
                "college_id": 6
            }, {
                "id": 27,
                "name": "\u0646\u0638\u0645 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a \u0627\u0644\u0625\u062f\u0627\u0631\u064a\u0629",
                "college_id": 6
            }, {
                "id": 28,
                "name": "\u0627\u0644\u0645\u062d\u0627\u0633\u0628\u0629",
                "college_id": 6
            }, {
                "id": 29,
                "name": "\u0627\u0644\u062a\u062d\u0644\u064a\u0644 \u0627\u0644\u0643\u0645\u064a",
                "college_id": 6
            }, {
                "id": 30,
                "name": "\u0627\u0644\u0639\u0645\u0627\u0631\u0629 \u0648\u0639\u0644\u0648\u0645 \u0627\u0644\u0628\u0646\u0627\u0621",
                "college_id": 5
            }, {
                "id": 31,
                "name": "\u0627\u0644\u0625\u0646\u062a\u0627\u062c \u0627\u0644\u062d\u064a\u0648\u0627\u0646\u064a",
                "college_id": 3
            }, {
                "id": 32,
                "name": "\u0627\u0644\u0625\u0646\u062a\u0627\u062c \u0627\u0644\u0646\u0628\u0627\u062a\u064a",
                "college_id": 3
            }, {
                "id": 33,
                "name": "\u0627\u0644\u062a\u062e\u0637\u064a\u0637 \u0627\u0644\u0639\u0645\u0631\u0627\u0646\u064a",
                "college_id": 5
            }, {
                "id": 34,
                "name": "\u0627\u0644\u0647\u0646\u062f\u0633\u0629 \u0627\u0644\u0632\u0631\u0627\u0639\u064a\u0629",
                "college_id": 3
            }, {
                "id": 35,
                "name": "\u0648\u0642\u0627\u064a\u0629 \u0627\u0644\u0646\u0628\u0627\u062a",
                "college_id": 3
            }, {
                "id": 36,
                "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u062a\u0631\u0628\u0629",
                "college_id": 3
            }, {
                "id": 37,
                "name": "\u0627\u0644\u0623\u0634\u0639\u0629",
                "college_id": 11
            }, {
                "id": 38,
                "name": "\u0627\u0644\u0625\u0642\u062a\u0635\u0627\u062f \u0627\u0644\u0632\u0631\u0627\u0639\u064a",
                "college_id": 3
            }, {
                "id": 39,
                "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u0623\u063a\u0630\u064a\u0629 \u0648\u0627\u0644\u062a\u063a\u0630\u064a\u0629",
                "college_id": 3
            }, {
                "id": 40,
                "name": "\u0627\u0644\u0628\u0627\u0637\u0646\u0629",
                "college_id": 11
            }, {
                "id": 41,
                "name": "\u0627\u0644\u0625\u0631\u0634\u0627\u062f \u0627\u0644\u0632\u0631\u0627\u0639\u064a \u0648\u0627\u0644\u0645\u062c\u062a\u0645\u0639 \u0627\u0644\u0631\u064a\u0641\u064a",
                "college_id": 3
            }, {
                "id": 42,
                "name": "\u0627\u0644\u0623\u0646\u0641 \u0648\u0627\u0644\u0623\u0630\u0646 \u0648\u0627\u0644\u062d\u0646\u062c\u0631\u0629",
                "college_id": 11
            }, {
                "id": 43,
                "name": "\u0627\u0644\u062a\u062e\u062f\u064a\u0631",
                "college_id": 11
            }, {
                "id": 44,
                "name": "\u0627\u0644\u062a\u0634\u0631\u064a\u062d",
                "college_id": 11
            }, {
                "id": 45,
                "name": "\u0627\u0644\u062a\u0639\u0644\u064a\u0645 \u0627\u0644\u0637\u0628\u064a",
                "college_id": 11
            }, {
                "id": 46,
                "name": "\u0627\u0644\u0637\u0628 \u0627\u0644\u0646\u0641\u0633\u064a",
                "college_id": 11
            }, {
                "id": 47,
                "name": "\u0627\u0644\u062c\u0631\u0627\u062d\u0629",
                "college_id": 11
            }, {
                "id": 48,
                "name": "\u0637\u0628 \u0627\u0644\u0623\u0637\u0641\u0627\u0644",
                "college_id": 11
            }, {
                "id": 49,
                "name": "\u0637\u0628 \u0627\u0644\u0623\u0633\u0631\u0629 \u0648\u0627\u0644\u0645\u062c\u062a\u0645\u0639",
                "college_id": 11
            }, {
                "id": 50,
                "name": "\u062c\u0631\u0627\u062d\u0629 \u0627\u0644\u0639\u0638\u0627\u0645",
                "college_id": 11
            }, {
                "id": 51,
                "name": "\u0627\u0644\u0639\u0646\u0627\u064a\u0629 \u0627\u0644\u0645\u0631\u0643\u0632\u0629",
                "college_id": 11
            }, {
                "id": 52,
                "name": "\u062c\u0631\u0627\u062d\u0629 \u0627\u0644\u0648\u062c\u0647 \u0648\u0627\u0644\u0641\u0643\u064a\u0646",
                "college_id": 12
            }, {
                "id": 53,
                "name": "\u0637\u0628 \u0627\u0644\u0623\u0645\u0631\u0627\u0636 \u0627\u0644\u062c\u0644\u062f\u064a\u0629",
                "college_id": 11
            }, {
                "id": 54,
                "name": "\u0639\u0644\u0648\u0645 \u0625\u0635\u0644\u0627\u062d \u0627\u0644\u0623\u0633\u0646\u0627\u0646",
                "college_id": 12
            }, {
                "id": 55,
                "name": "\u0637\u0628 \u0627\u0644\u0641\u0645 \u0648\u0639\u0644\u0648\u0645 \u0627\u0644\u062a\u0634\u062e\u064a\u0635",
                "college_id": 12
            }, {
                "id": 56,
                "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u0625\u0633\u062a\u0639\u0627\u0636\u0629 \u0627\u0644\u0633\u0646\u064a\u0629",
                "college_id": 12
            }, {
                "id": 57,
                "name": "\u0627\u0644\u0623\u0646\u0633\u062c\u0629 \u0627\u0644\u0645\u062d\u064a\u0637\u0629 \u0628\u0627\u0644\u0623\u0633\u0646\u0627\u0646 \u0648\u0635\u062d\u0629 \u0623\u0633\u0646\u0627\u0646 \u0627\u0644\u0645\u062c\u062a\u0645\u0639",
                "college_id": 12
            }, {
                "id": 58,
                "name": "\u0637\u0628 \u0623\u0633\u0646\u0627\u0646 \u0627\u0644\u0623\u0637\u0641\u0627\u0644 \u0648\u062a\u0642\u0648\u064a\u0645 \u0627\u0644\u0623\u0633\u0646\u0627\u0646",
                "college_id": 12
            }, {
                "id": 59,
                "name": "\u0627\u0644\u0635\u064a\u062f\u0644\u0629 \u0627\u0644\u0627\u0643\u0644\u064a\u0646\u064a\u0643\u064a\u0629",
                "college_id": 13
            }, {
                "id": 60,
                "name": "\u0627\u0644\u0643\u064a\u0645\u064a\u0627\u0621 \u0627\u0644\u0635\u064a\u062f\u0644\u064a\u0629",
                "college_id": 13
            }, {
                "id": 61,
                "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u0623\u062f\u0648\u064a\u0629 \u0648\u0627\u0644\u0633\u0645\u0648\u0645",
                "college_id": 13
            }, {
                "id": 62,
                "name": "\u0627\u0644\u0639\u0644\u0648\u0645 \u0627\u0644\u0625\u0634\u0639\u0627\u0639\u064a\u0629",
                "college_id": 14
            }, {
                "id": 63,
                "name": "\u0627\u0644\u0635\u064a\u062f\u0644\u0627\u0646\u064a\u0627\u062a",
                "college_id": 13
            }, {
                "id": 64,
                "name": "\u0627\u0644\u0639\u0642\u0627\u0642\u064a\u0631",
                "college_id": 13
            }, {
                "id": 65,
                "name": "\u0627\u0644\u0628\u0635\u0631\u064a\u0627\u062a \u0648\u0639\u0644\u0648\u0645 \u0627\u0644\u0631\u0624\u064a\u0629",
                "college_id": 14
            }, {
                "id": 66,
                "name": "\u0635\u062d\u0629 \u0627\u0644\u0623\u0633\u0646\u0627\u0646",
                "college_id": 14
            }, {
                "id": 67,
                "name": "\u0639\u0644\u0648\u0645 \u0635\u062d\u0629 \u0627\u0644\u0645\u062c\u062a\u0645\u0639",
                "college_id": 14
            }, {
                "id": 68,
                "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u0645\u062e\u062a\u0628\u0631\u0627\u062a \u0627\u0644\u0625\u0643\u0644\u064a\u0646\u064a\u0643\u064a\u0629",
                "college_id": 14
            }, {
                "id": 69,
                "name": "\u0625\u062f\u0627\u0631\u0629 \u0648\u062a\u0639\u0644\u064a\u0645 \u0627\u0644\u062a\u0645\u0631\u064a\u0636",
                "college_id": 15
            }, {
                "id": 70,
                "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u062a\u0623\u0647\u064a\u0644 \u0627\u0644\u0635\u062d\u064a",
                "college_id": 14
            }, {
                "id": 71,
                "name": "\u0627\u0644\u062a\u0645\u0631\u064a\u0636 \u0627\u0644\u0628\u0627\u0637\u0646\u064a \u0627\u0644\u062c\u0631\u0627\u062d\u064a",
                "college_id": 15
            }, {
                "id": 72,
                "name": "\u0635\u062d\u0629 \u0627\u0644\u0645\u062c\u062a\u0645\u0639 \u0648\u0627\u0644\u0635\u062d\u0629 \u0627\u0644\u0646\u0641\u0633\u064a\u0629 \u0648\u0627\u0644\u0639\u0642\u0644\u064a\u0629",
                "college_id": 15
            }, {
                "id": 73,
                "name": "\u0627\u0644\u0639\u0644\u0648\u0645 \u0627\u0644\u0633\u064a\u0627\u0633\u064a\u0629",
                "college_id": 16
            }, {
                "id": 74,
                "name": "\u0627\u0644\u0642\u0627\u0646\u0648\u0646 \u0627\u0644\u062e\u0627\u0635",
                "college_id": 16
            }, {
                "id": 75,
                "name": "\u0627\u0644\u0642\u0627\u0646\u0648\u0646 \u0627\u0644\u0639\u0627\u0645",
                "college_id": 16
            }, {
                "id": 76,
                "name": "\u0635\u062d\u0629 \u0627\u0644\u0623\u0645\u0648\u0645\u0629 \u0648\u0627\u0644\u0637\u0641\u0648\u0644\u0629",
                "college_id": 15
            }, {
                "id": 77,
                "name": "\u0627\u0644\u0644\u0633\u0627\u0646\u064a\u0627\u062a \u0648\u062f\u0631\u0627\u0633\u0627\u062a \u0627\u0644\u062a\u0631\u062c\u0645\u0629",
                "college_id": 17
            }, {
                "id": 78,
                "name": "\u0627\u0644\u062a\u0627\u0631\u064a\u062e",
                "college_id": 18
            }, {
                "id": 79,
                "name": "\u0627\u0644\u0644\u063a\u0627\u062a \u0627\u0644\u062d\u062f\u064a\u062b\u0629 \u0648\u0627\u0644\u062a\u0631\u062c\u0645\u0629",
                "college_id": 17
            }, {
                "id": 80,
                "name": "\u0627\u0644\u0644\u063a\u0629 \u0627\u0644\u0641\u0631\u0646\u0633\u064a\u0629 \u0648\u0627\u0644\u062a\u0631\u062c\u0645\u0629",
                "college_id": 17
            }, {
                "id": 81,
                "name": "\u0627\u0644\u0644\u063a\u0629 \u0627\u0644\u0625\u0646\u062c\u0644\u064a\u0632\u064a\u0629 \u0648\u0627\u0644\u062a\u0631\u062c\u0645\u0629",
                "college_id": 17
            }, {
                "id": 82,
                "name": "\u0627\u0644\u0644\u063a\u0629 \u0627\u0644\u0639\u0631\u0628\u064a\u0629 \u0648\u0622\u062f\u0627\u0628\u0647\u0627",
                "college_id": 18
            }, {
                "id": 83,
                "name": "\u0639\u0644\u0645 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a",
                "college_id": 18
            }, {
                "id": 84,
                "name": "\u0627\u0644\u0644\u063a\u0629 \u0627\u0644\u0625\u0646\u062c\u0644\u064a\u0632\u064a\u0629 \u0648\u0622\u062f\u0627\u0628\u0647\u0627",
                "college_id": 18
            }, {
                "id": 85,
                "name": "\u0627\u0644\u0625\u0639\u0644\u0627\u0645",
                "college_id": 18
            }, {
                "id": 87,
                "name": "\u0627\u0644\u062f\u0631\u0627\u0633\u0627\u062a \u0627\u0644\u0625\u062c\u062a\u0645\u0627\u0639\u064a\u0629",
                "college_id": 18
            }, {
                "id": 88,
                "name": "\u0627\u0644\u062f\u0631\u0627\u0633\u0627\u062a \u0627\u0644\u0642\u0631\u0622\u0646\u064a\u0629",
                "college_id": 21
            }, {
                "id": 89,
                "name": "\u0627\u0644\u062f\u0631\u0627\u0633\u0627\u062a \u0627\u0644\u0625\u0633\u0644\u0627\u0645\u064a\u0629",
                "college_id": 21
            }, {
                "id": 90,
                "name": "\u0627\u0644\u0645\u0646\u0627\u0647\u062c \u0648\u0637\u0631\u0642 \u0627\u0644\u062a\u062f\u0631\u064a\u0633",
                "college_id": 21
            }, {
                "id": 91,
                "name": "\u062a\u0642\u0646\u064a\u0627\u062a \u0627\u0644\u062a\u0639\u0644\u064a\u0645",
                "college_id": 21
            }, {
                "id": 92,
                "name": "\u0627\u0644\u062c\u063a\u0631\u0627\u0641\u064a\u0627",
                "college_id": 18
            }, {
                "id": 93,
                "name": "\u0627\u0644\u062a\u0631\u0628\u064a\u0629 \u0627\u0644\u0641\u0646\u064a\u0629",
                "college_id": 21
            }, {
                "id": 94,
                "name": "\u0627\u0644\u0625\u062f\u0627\u0631\u0629 \u0627\u0644\u062a\u0631\u0628\u0648\u064a\u0629",
                "college_id": 21
            }, {
                "id": 95,
                "name": "\u0627\u0644\u0637\u0641\u0648\u0644\u0629 \u0627\u0644\u0645\u0628\u0643\u0631\u0629",
                "college_id": 21
            }, {
                "id": 96,
                "name": "\u0639\u0644\u0645 \u0627\u0644\u0646\u0641\u0633",
                "college_id": 21
            }, {
                "id": 97,
                "name": "\u0627\u0644\u0633\u064a\u0627\u0633\u0627\u062a \u0627\u0644\u062a\u0631\u0628\u0648\u064a\u0629",
                "college_id": 21
            }, {
                "id": 98,
                "name": "\u0641\u0633\u064a\u0648\u0644\u0648\u062c\u064a\u0627 \u0627\u0644\u062c\u0647\u062f \u0627\u0644\u0628\u062f\u0646\u064a",
                "college_id": 20
            }, {
                "id": 99,
                "name": "\u0627\u0644\u0625\u062f\u0627\u0631\u0629 \u0627\u0644\u0631\u064a\u0627\u0636\u064a\u0629 \u0648\u0627\u0644\u062a\u0631\u0648\u064a\u062d\u064a\u0629",
                "college_id": 20
            }, {
                "id": 100,
                "name": "\u0625\u062f\u0627\u0631\u0629 \u0645\u0648\u0627\u0631\u062f \u0627\u0644\u062a\u0631\u0627\u062b \u0648\u0627\u0644\u0625\u0631\u0634\u0627\u062f \u0627\u0644\u0633\u064a\u0627\u062d\u064a",
                "college_id": 22
            }, {
                "id": 101,
                "name": "\u0627\u0644\u062a\u0631\u0628\u064a\u0629 \u0627\u0644\u0628\u062f\u0646\u064a\u0629",
                "college_id": 20
            }, {
                "id": 102,
                "name": "\u0627\u0644\u0622\u062b\u0627\u0631",
                "college_id": 22
            }, {
                "id": 103,
                "name": "\u0627\u0644\u0645\u064a\u0643\u0627\u0646\u064a\u0643\u0627 \u0627\u0644\u062d\u064a\u0648\u064a\u0629 \u0648\u0627\u0644\u0633\u0644\u0648\u0643 \u0627\u0644\u062d\u0631\u0643\u064a",
                "college_id": 20
            }, {
                "id": 104,
                "name": "\u062a\u062f\u0631\u064a\u0628 \u0627\u0644\u0645\u0639\u0644\u0645\u064a\u0646",
                "college_id": 19
            }, {
                "id": 105,
                "name": "\u0627\u0644\u0644\u063a\u0629 \u0648\u0627\u0644\u062b\u0642\u0627\u0641\u0629",
                "college_id": 19
            }, {
                "id": 131,
                "name": "\u0627\u0644\u0644\u063a\u0648\u064a\u0627\u062a \u0627\u0644\u062a\u0637\u0628\u064a\u0642\u064a\u0629",
                "college_id": 19
            }, {
                "id": 132,
                "name": "\u0627\u0644\u0625\u062f\u0627\u0631\u0629 \u0627\u0644\u0633\u064a\u0627\u062d\u064a\u0629 \u0648 \u0627\u0644\u0641\u0646\u062f\u0642\u064a\u0629",
                "college_id": 22
            }, {
                "id": 136,
                "name": "\u0637\u0628 \u0627\u0644\u0637\u0648\u0627\u0631\u0626",
                "college_id": 11
            }, {
                "id": 137,
                "name": "\u0637\u0628 \u0627\u0644\u0646\u0633\u0627\u0621 \u0648 \u0627\u0644\u0648\u0644\u0627\u062f\u0629",
                "college_id": 11
            }, {
                "id": 138,
                "name": "\u0637\u0628 \u0648 \u062c\u0631\u0627\u062d\u0629 \u0627\u0644\u0639\u064a\u0648\u0646",
                "college_id": 11
            }, {
                "id": 139,
                "name": "\u0639\u0644\u0645 \u0627\u0644\u0623\u0645\u0631\u0627\u0636",
                "college_id": 11
            }, {
                "id": 140,
                "name": "\u0639\u0644\u0645 \u0648\u0638\u0627\u0626\u0641 \u0627\u0644\u0623\u0639\u0636\u0627\u0621",
                "college_id": 11
            }, {
                "id": 141,
                "name": "\u0639\u0644\u0648\u0645 \u0627\u0644\u0642\u0644\u0628",
                "college_id": 11
            }, {
                "id": 142,
                "name": "\u0627\u0644\u062a\u0643\u0646\u0648\u0644\u0648\u062c\u064a\u0627 \u0627\u0644\u0637\u0628\u064a\u0629 \u0627\u0644\u062d\u064a\u0648\u064a\u0629",
                "college_id": 14
            }, {
                "id": 143,
                "name": "\u0627\u0644\u062a\u0631\u0628\u064a\u0629 \u0627\u0644\u062e\u0627\u0635\u0629",
                "college_id": 21
            }, {
                "id": 144,
                "name": "\u0627\u0644\u0633\u0646\u0629 \u0627\u0644\u0623\u0648\u0644\u0649 \u0627\u0644\u0645\u0634\u062a\u0631\u0643\u0629",
                "college_id": 41
            }]
        </script>
        <script src="main.js"></script>
        <script src="sidebar.js"></script>

</body>

</html>