 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Project Akhir</title>
     <link rel="stylesheet" href="<?= site_url('assets/css/bootstrap.min.css') ?>">
     <style>
         .fit-image {
             width: 70px;
             height: 70px;
         }
     </style>
 </head>

 <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <div class="container">
             <a class="navbar-brand" href="<?= base_url(''); ?>">Sistem Multimedia</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="nZavbarSupportedContent">
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="#">Users</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('Home/create'); ?>">Create</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>

     <main class="container">