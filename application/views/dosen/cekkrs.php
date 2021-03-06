<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>KRS online</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link href="<?php echo base_url();?>asset/css/table.css" rel="stylesheet" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!--END HEAD SECTION -->
<body>   
     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home"><image src="<?php echo base_url();?>asset/img/logo.png" width="70px" height="50px" alt=''></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>index.php/dosen/home">HOME</a></li>
                    <li><a href="<?php echo base_url();?>index.php/dosen/krs">KRS</a></li>
                    <li><a href="<?php echo base_url();?>index.php/dosen/bimbingan">BIMBINGAN</a></li>
                    <li><a href="<?php echo base_url();?>index.php/dosen/home/logout">LOG OUT</a></li>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
   
    <!--KRS SECTION -->
    <div id="krs-section">
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" data-scrollreveal="enter left and move 100px, wait 0.5s">
                    <h1>Kartu Rencana Studi Mahasiswa</h1>
                     
                    

                </div>
            </div>
                <div align = "center">
                    <table data-scrollreveal="enter left and move 100px, wait 0.5s">
                        <thead>
                            <tr>
                                <th class="text-left">NO</th>
                                <th class="text-left">KODE</th>
                                <th class="text-left">MATAKULIAH</th>
                                <th class="text-left">SEMESTER</th>
                                <th class="text-left">SKS</th>
                                <th class="text-left">STATUS</th>
                                <th class="text-left">AKSI</th>
                            </tr>
                        </thead>

                        <tbody class="table-hover">
                            <tr>
                            <?php
                            $no = 1;
                            foreach ($krs->result() as $row) {
                            ?>

                                <form action="<?php echo base_url().'index.php/dosen/krs/setujui/'.$row->idpilihan?>" method="POST" accept-charset="utf-8">
                                    <input name="nim[]" value="<?php echo $row->id_mahasiswa; ?>" hidden>
                                    
                                
                                    <td class="text-left"><?php echo $no++; ?></td>
                                    <td class="text-left"><?php echo $row->kode; ?></td>
                                    <td class="text-left"><?php echo $row->nama; ?></td>
                                    <td class="text-left"><?php echo $row->semester; ?></td>
                                    <td class="text-left"><?php echo $row->sks; ?></td>
                                    <td class="text-left"><?php if($row->status==null||$row->status==0){echo "belum disetujui";} else{ echo "sudah disetujui";} ?></td>
                                    <td class="text-left"><button class = "btn btn-success" type="submit" onclick = "<?php echo base_url().'index.php/dosen/krs/setujui/'.$row->idpilihan?>">Setujui</a></button></td>
                                    </form>
                            </tr>
                            <?php } ?>
                                
                        </tbody>    
                    </table>
                </div>

        </div>
    </div>
    <!-- END KRS SECTION -->
    
    <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
                &copy; 2016 KRS online | RPL Ganjil 				
		
            </div>
            
        </div>
       
    </div>  
    <!--END FOOTER SECTION --> 
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="<?php echo base_url();?>asset/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
     <!-- SCROLL REVEL LIBRARY FOR SCROLLING ANIMATIONS-->
    <script src="<?php echo base_url();?>asset/js/scrollReveal.js"></script>
       <!-- CUSTOM SCRIPT-->
    <script src="<?php echo base_url();?>asset/js/custom.js"></script>
</body>
</html>
