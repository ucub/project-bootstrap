<?php
    $s = isset($_GET['page']) ? $_GET['page'] : null;
    switch($s)
    {
        ///halaman
        case 'page1'   : include("./media/home/1.html");break;
        case 'page2'   : include("./media/home/2.html");break;
        
            
        ///postingan
        case 'post1'   : include("./media/post/post1.html");break;
        case 'post2'   : include("./media/post/post2.html");break;
        case 'post3'   : include("./media/post/post3.html");break;
        case 'post4'   : include("./media/post/post4.html");break;
        case 'post5'   : include("./media/post/post5.html");break;
        case 'post6'   : include("./media/post/post6.html");break;
        case 'post7'   : include("./media/post/post7.html");break;
        case 'post8'   : include("./media/post/post8.html");break;
        case 'post9'   : include("./media/post/post9.html");break;
        case 'post10'   : include("./media/post/post10.html");break;
        case 'post11'   : include("./media/post/post11.html");break;
        case 'aboutme' : include("./media/post/about-me.html");break;
            
            
        ///sidebar
        case 'networking' : include("./media/post/networking.html");break;
        case 'programming' : include("./media/post/programming.html");break;
        
            
        default     : include("./media/home/1.html");break;
    }
?>