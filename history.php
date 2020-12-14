<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCTF</title>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <script src="timeline.js" async></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="header-nav">

        <div class="desktop-nav container">

            <div class="row">
                <div class="col-6">
                    <a href="index.php"><div tabindex="-1"><img src="resources/img/TwIcon.png" alt="Home"></div></a>

                    <ul>
                        <li><a href="index.php"><span tabindex="-1">Home</span></a></li
                        ><li><a href="news.php"><span tabindex="-1">News</span></a></li
                        ><li><a href="clans.php"><span tabindex="-1">Clans</span></a></li
                        ><li class="active"><a href="history.php"><span tabindex="-1">History</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="small-nav container">

            <div class="row">
                <div class="col-6">
                    <a href="index.php"><img src="resources/img/TwIcon.png" alt="Home"></a>
                    <div class="mobile-nav clearfix">
                    <div class="mobile-nav-button"><svg viewBox="0 0 32 32"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg></div>
                        <div class="mobile-nav-content clearfix">
                            <ul>
                                <li><a href="index.php"><span tabindex="-1">Home</span></a></li
                                ><li><a href="news.php"><span tabindex="-1">News</span></a></li
                                ><li><a href="clans.php"><span tabindex="-1">Clans</span></a></li
                                ><li class="active"><a href="history.php"><span tabindex="-1">History</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="banner-header"><h1>History</h1></header>
    <main class="container">
        <div class="row dateselection">
            <div class="col-1"><button id="datebtn1" class="datebtn" onClick="selectDate(this.id)" type="button"><span tabindex="-1"><h2>2002</h2></span></button></div>
            <div class="col-1"><button id="datebtn2" class="datebtn" onClick="selectDate(this.id)" type="button"><span tabindex="-1"><h2>2003</h2></span></button></div>
            <div class="col-1"><button id="datebtn3" class="datebtn" onClick="selectDate(this.id)" type="button"><span tabindex="-1"><h2>2004</h2></span></button></div>
            <div class="col-1"><button id="datebtn4" class="datebtn" onClick="selectDate(this.id)" type="button"><span tabindex="-1"><h2>2005</h2></span></button></div>
            <div class="col-1"><button id="datebtn5" class="datebtn" onClick="selectDate(this.id)" type="button"><span tabindex="-1"><h2>2006</h2></span></button></div>
            <div class="col-1"><button id="datebtn6" class="datebtn" onClick="selectDate(this.id)" type="button"><span tabindex="-1"><h2>2007</h2></span></button></div>
        </div>
        <div class="row">
            <div class="col-6">
                <ul class="timeline">
                    <li class="before navbutton"><button type="button" onclick="beforeBox()"><span tabindex="-1">&lsaquo;</span></button></li
                    ><li class="timelineelement"><h2>GCTF Tourney Winter</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum, tellus eget pellentesque ullamcorper, metus dolor semper massa, eget interdum augue diam eu dui. Quisque sapien sem, posuere vel rutrum eget, auctor ac nulla. Vestibulum laoreet gravida tortor, sed pulvinar diam ultrices et. Sed id luctus nulla. Suspendisse quis massa ut eros ornare hendrerit nec a lacus. Sed et elit in neque tincidunt volutpat. Sed tristique ultricies arcu, id viverra magna venenatis id. Curabitur quis rutrum massa. Nullam tristique, turpis quis pulvinar aliquam, ex purus eleifend dui, et semper tellus risus sit amet dui. Proin tristique in justo vel gravida.</p></li 
                    ><li class="timelineelement"><h2>1on1</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum, tellus eget pellentesque ullamcorper, metus dolor semper massa, eget interdum augue diam eu dui. Quisque sapien sem, posuere vel rutrum eget, auctor ac nulla. Vestibulum laoreet gravida tortor, sed pulvinar diam ultrices et. Sed id luctus nulla. Suspendisse quis massa ut eros ornare hendrerit nec a lacus. Sed et elit in neque tincidunt volutpat. Sed tristique ultricies arcu, id viverra magna venenatis id. Curabitur quis rutrum massa. Nullam tristique, turpis quis pulvinar aliquam, ex purus eleifend dui, et semper tellus risus sit amet dui. Proin tristique in justo vel gravida.</p></li
                    ><li class="timelineelement"><h2>GCTF Tourney Summer</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum, tellus eget pellentesque ullamcorper, metus dolor semper massa, eget interdum augue diam eu dui. Quisque sapien sem, posuere vel rutrum eget, auctor ac nulla. Vestibulum laoreet gravida tortor, sed pulvinar diam ultrices et. Sed id luctus nulla. Suspendisse quis massa ut eros ornare hendrerit nec a lacus. Sed et elit in neque tincidunt volutpat. Sed tristique ultricies arcu, id viverra magna venenatis id. Curabitur quis rutrum massa. Nullam tristique, turpis quis pulvinar aliquam, ex purus eleifend dui, et semper tellus risus sit amet dui. Proin tristique in justo vel gravida.</p></li
                    ><li class="timelineelement"><h2>DTT Tourney</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum, tellus eget pellentesque ullamcorper, metus dolor semper massa, eget interdum augue diam eu dui. Quisque sapien sem, posuere vel rutrum eget, auctor ac nulla. Vestibulum laoreet gravida tortor, sed pulvinar diam ultrices et. Sed id luctus nulla. Suspendisse quis massa ut eros ornare hendrerit nec a lacus. Sed et elit in neque tincidunt volutpat. Sed tristique ultricies arcu, id viverra magna venenatis id. Curabitur quis rutrum massa. Nullam tristique, turpis quis pulvinar aliquam, ex purus eleifend dui, et semper tellus risus sit amet dui. Proin tristique in justo vel gravida.</p></li
                    ><li class="timelineelement"><h2>DTT Tourney 2</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum, tellus eget pellentesque ullamcorper, metus dolor semper massa, eget interdum augue diam eu dui. Quisque sapien sem, posuere vel rutrum eget, auctor ac nulla. Vestibulum laoreet gravida tortor, sed pulvinar diam ultrices et. Sed id luctus nulla. Suspendisse quis massa ut eros ornare hendrerit nec a lacus. Sed et elit in neque tincidunt volutpat. Sed tristique ultricies arcu, id viverra magna venenatis id. Curabitur quis rutrum massa. Nullam tristique, turpis quis pulvinar aliquam, ex purus eleifend dui, et semper tellus risus sit amet dui. Proin tristique in justo vel gravida.</p></li
                    ><li class="timelineelement"><h2>DTT Tourney 3</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum, tellus eget pellentesque ullamcorper, metus dolor semper massa, eget interdum augue diam eu dui. Quisque sapien sem, posuere vel rutrum eget, auctor ac nulla. Vestibulum laoreet gravida tortor, sed pulvinar diam ultrices et. Sed id luctus nulla. Suspendisse quis massa ut eros ornare hendrerit nec a lacus. Sed et elit in neque tincidunt volutpat. Sed tristique ultricies arcu, id viverra magna venenatis id. Curabitur quis rutrum massa. Nullam tristique, turpis quis pulvinar aliquam, ex purus eleifend dui, et semper tellus risus sit amet dui. Proin tristique in justo vel gravida.</p></li
                    ><li  class="after navbutton"><button type="button" onclick="nextBox()"><span tabindex="-1">&rsaquo;</span></button></li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html> 