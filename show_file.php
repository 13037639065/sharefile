
<?php
	
	/*****************************
	*	 copyright Codedream
	*	文件上传/下载;
	*
	*****************************/
	include "template/head.html";
	//include "template/body.html";
	//include "template/footer.html";
?>






<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="assets/img/logo.png">

                    </a>
                    
                </div>
              
                <span class="logout-spn">
                  <a href="/" style="color:#fff;">ACM 工作室</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
						<h4>&nbsp;&nbsp;&nbsp;边栏挂件</h4>
                    </li>
                   

                    
                    


                    
                    

                    
                    
                     
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>上传/下载文件</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>文件分享</strong> 请不要和文件列表重名,大文件尽量压缩(>.<)
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                  <div class="row text-center pad-top">
                  <div  align="left" >
					<?php
						
					    
					?>
                    <a href="upload.html">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="上传文件"/>
					</a>
                     
                  </div> 
                 
                  
                  
                  
                  
                  
              </div>
                 <!-- /. ROW  --> 
                   
                      
                 
                   
                    
                    
                
                    
				  <div class="row">
                    <div class="col-lg-12 ">
					<br>
                        <div class="alert alert-danger">
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   


</body>
<?php
	include "template/footer.html";
?>
</html>