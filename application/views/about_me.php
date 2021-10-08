<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #fff;
  }
  p {
  color: navy;
  text-indent: 0px;
  text-transform: uppercase;
  font-size:18px;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="<?php echo site_url('Hello/index');?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Hello/about_me');?>">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Hello/education');?>">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Hello/active');?>">Activity</a>
      </li>    
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 style="color:Coral">About Me</h2>
      <h5>Photo of me:</h5>
      <div>
            <img src="<?= base_url();?>/images/23456618_855376774622141__o.jpg" width="100%" />
        </div>
      <br><br><br>
      <ul class="nav nav-pills flex-column">
      <li class="nav-item">
          <a class="nav-link active" href="<?php echo site_url('Hello/about_me');?>">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('Hello/education');?>">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('Hello/active');?>">Activity</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Nontawat Wongkat</h2>
      <h5>Nueng(หนึ่ง)</h5>
      <div>
        <img src="<?= base_url();?>/images/IMG20170108164941.jpg" width="100%" />
      </div><br>
      <h3 style="color:Coral">Something About Me</h3>
      <h4>วันเดือนปีเกิด 1 ม.ค. 2542</h4>
      <h4>กลุ่มเลือด :B</h4>

      <br><br>
      <h3 style="color:Coral">Contact</h3>
      <p>Facebook :<a href="https://www.facebook.com/N0ntawat"> N0ntawat</a></p>
      <h4>Gmail </h4><p>yamatouzee@gmail.com</p>
      <h4>Phone Number </h4><p>064 0044 820</p>
      <h4>Address </h4><p>166 ต.มหาวัน อ.แม่สอด จ.ตาก 63110</p>
      <br>
    </div>
  </div>
</div>

<footer class="footer">
    <p align="center">&copy; My Website, 2021</p>
</foot>
</div>

</body>
</html>
