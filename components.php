<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with Steller landing page.">
   <meta name="author" content="Devcrud">
   <title>Steller | Components</title>
   <!-- font icons -->
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="assets/css/steller.css">
</head>
<body>

   <!-- Page Header -->
   <header class="header header-mini"> 
      <div class="header-title">Components</div> 
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Components</li>
         </ol>
      </nav>
   </header> <!-- End Of Page Header -->

   <!-- main content -->
   <div class="container">

      <!-- Buttons -->
      <h3 class="mt-5">Buttons</h3>
      <hr>
      <h6 class="section-secondary-title">Styles :</h6>
      <button class="btn btn-primary">Default</button>
      <button class="btn btn-outline-primary">outline</button>
      <button class="btn btn-primary rounded">Rounded</button>
      <button class="btn btn-primary rounded"><i class="ti-thumb-up pr-1"></i> With Icon</button>
      <button class="btn btn-primary circle"><i class="ti-heart"></i></button>

      <h6 class="section-secondary-title mt-5">Sizes :</h6>
      <button class="btn btn-primary btn-lg">Large</button>
      <button class="btn btn-primary ">Regular</button>
      <button class="btn btn-primary btn-sm">Small</button>
      <button class="btn btn-primary w-sm ml-3">w-sm</button>
      <button class="btn btn-primary w-md">w-md</button>
      <button class="btn btn-primary w-lg">w-lg</button>

      <h6 class="section-secondary-title mt-5">Colors :</h6>          
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-light">Light</button>
      <button type="button" class="btn btn-dark">Dark</button>

      <h6 class="section-secondary-title mt-5">Buttons Tags :</h6>
      <button class="btn btn-primary" type="submit">Button</button>
      <input class="btn btn-primary" type="button" value="Input">
      <input class="btn btn-primary" type="submit" value="Submit">
      <input class="btn btn-primary" type="reset" value="Reset">
      
      <!-- devider -->
      <div class="py-5"></div>

      <!-- Inputs -->
      <h3>Inputs</h3>
      <hr>
      <div class="row mt-5">
         <div class="col-md-6">
            <h6 class="section-secondary-title">Form controls :</h6>        
            <div class="form-group">
               <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email address">
            </div>
            <div class="form-group">
               <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date">
            </div>
            <div class="form-group">
               <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
            </div>
            <div class="form-group">
               <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
            </div>
            <div class="form-group">
               <select class="form-control" id="exampleFormControlSelect1">
                  <option>Example select</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
               </select>
            </div>
            <div class="form-group">
               <select multiple class="form-control" id="exampleFormControlSelect2">
                  <option>Example multiple select</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
               </select>
            </div>
            <div class="form-group">
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Example textarea"></textarea>
            </div>
         </div>
         <div class="col-md-6">
            <h6 class="section-secondary-title">Sizes :</h6>    
            <div class="form-group">
               <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">             
            </div>
            <div class="form-group">
               <input class="form-control" type="text" placeholder="Default input">
            </div>
            <div class="form-group">
               <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"> 
            </div>
         </div>
      </div> <!-- end of inputs -->   

      <!-- devider -->
      <div class="py-5"></div>             

      <!-- Dropdowns -->
      <h3 class="components-section-title font-weight-normal">Dropdowns</h3>
      <hr>
      <div class="dropdown d-inline-block">
         <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Dropdown button
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         <a class="dropdown-item" href="#">Action</a>
         <a class="dropdown-item" href="#">Another action</a>
         <a class="dropdown-item" href="#">Something else here</a>
         </div>
      </div>
      <div class="dropdown d-inline-block">
         <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
         </a>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
         </div>
      </div>
      <div class="btn-group">
         <button type="button" class="btn btn-outline-secondary">Split</button>
         <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span class="sr-only">Toggle Dropdown</span>
         </button>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
         </div>
      </div>
      <div class="btn-group">
         <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Form Dropdown
         </button>
         <div class="dropdown-menu form">
            <form class="px-4 py-3">
               <div class="form-group">
                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
               </div>
               <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                  <label class="form-check-label" for="dropdownCheck">
                     Remember me
                  </label>
               </div>
               <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><small>New around here? Sign up</small></a>
            <a class="dropdown-item" href="#"><small>Forgot password?</small></a>
         </div>
      </div>       
      <h6 class="section-secondary-title mt-5">Directions :</h6>  
      <div class="btn-group dropup">
         <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropup
         </button>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
         </div>
      </div>
      <div class="btn-group dropright">
         <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropup
         </button>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
         </div>
      </div>
      <div class="btn-group">
         <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
         </button>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
         </div>
      </div>
      <div class="btn-group dropleft">
         <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
         </button>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
         </div>
      </div> <!-- end of Dropdowns -->  

      <!-- devider -->
      <div class="py-5"></div>   

      <!-- navbars -->
      <h3 class="components-section-title font-weight-normal mt-5">Navigations</h3>
      <hr>
      <nav class="navbar navbar-expand-sm navbar-dark bg-primary rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Primary Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-light btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-dark bg-secondary rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Secondary Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-light btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-dark bg-success rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Success Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-light btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-dark bg-info rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Info Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-light btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-dark bg-warning rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Warning Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-light btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-dark bg-danger rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Danger Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-light btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Dark Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-light btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-sm navbar-light bg-light rounded shadow mb-3">
         <div class="container">
            <a class="navbar-brand" href="#">Dark Color</a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Our Service</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#team">Our Team</a>
                  </li>
                  <li class="nav-item">
                     <a href="#book-table" class="ml-4 mt-1 btn btn-dark btn-sm">navbar button</a>
                  </li>
               </ul>                       
            </div>
         </div>
      </nav>
      <!-- End of navbars -->

      <!-- devider -->
      <div class="py-5"></div>   
      
      <!-- progress bars -->
      <div class="row justify-content-between">
         <div class="col-md-5">
            <h3 class="components-section-title font-weight-normal mt-5">Progress Bars :</h3>
            <hr>
            <small>Default: </small>
            <div class="progress mt-2 mb-3">
               <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
            </div>
            <small>Success:</small>
            <div class="progress mt-2 mb-3">
               <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
            </div>
            <small>Danger:</small>
            <div class="progress mt-2 mb-3">
               <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
            </div>
            <small>Warning:</small>
            <div class="progress mt-2 mb-3">
               <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
            </div>
            <small>Info:</small>
            <div class="progress mt-2 mb-3">
               <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
            </div>
            <small>Dark:</small>
            <div class="progress mt-2 mb-3">
               <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
            </div>
         </div>
         <div class="col-md-6">
            <h3 class="components-section-title font-weight-normal mt-5">Paginations :</h3>
            <hr>
            <nav aria-label="Page navigation example">
               <ul class="pagination pagination-sm">
                  <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-double-left"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item active"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-double-right"></i></a></li>
               </ul>
            </nav>
            <nav aria-label="Page navigation example">
               <ul class="pagination">
               <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-double-left"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item active"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-double-right"></i></a></li>
               </ul>
            </nav>
            <nav aria-label="Page navigation example">
               <ul class="pagination pagination-lg">
                  <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-double-left"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item active"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-double-right"></i></a></li>
               </ul>
            </nav>

            <!-- Badges -->
            <h3 class="components-section-title font-weight-normal mt-5">Badges :</h3>
            <hr>
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-secondary">Secondary</span>
            <span class="badge badge-success">Success</span>
            <span class="badge badge-danger">Danger</span>
            <span class="badge badge-warning">Warning</span>
            <span class="badge badge-info">Info</span>
            <span class="badge badge-light">Light</span>
            <span class="badge badge-dark">Dark</span>
            <h6 class="section-secondary-title mt-4 mb-2">Badge Pills :</h6>
            <span class="badge badge-pill badge-primary">Primary</span>
            <span class="badge badge-pill badge-secondary">Secondary</span>
            <span class="badge badge-pill badge-success">Success</span>
            <span class="badge badge-pill badge-danger">Danger</span>
            <span class="badge badge-pill badge-warning">Warning</span>
            <span class="badge badge-pill badge-info">Info</span>
            <span class="badge badge-pill badge-light">Light</span>
            <span class="badge badge-pill badge-dark">Dark</span>
         </div>
      </div> <!-- End of Progress bars -->

      <!-- devider -->
      <div class="py-5"></div>  

      <!-- Alerts -->
      <h3 class="components-section-title font-weight-normal mt-5">Alerts :</h3>
      <hr>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
         A simple primary alert—check it out!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="alert alert-secondary alert-dismissible fade show" role="alert">
         A simple secondary alert—check it out!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         A simple success alert—check it out!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
         A simple danger alert—check it out!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
         A simple warning alert—check it out!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
         A simple info alert—check it out!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div class="alert alert-dark alert-dismissible fade show" role="alert">
         A simple dark alert—check it out!
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <!-- end of alerts -->

      <!-- devider -->
      <div class="py-5"></div> 
   
      <!-- tables -->
      <h3 class="components-section-title">Tables</h3>
      <hr>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">First</th>
               <th scope="col">Last</th>
               <th scope="col">Handle</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
            </tr>
            <tr>
               <th scope="row">2</th>
               <td>Jacob</td>
               <td>Thornton</td>
               <td>@fat</td>
            </tr>
            <tr>
               <th scope="row">3</th>
               <td>Larry</td>
               <td>the Bird</td>
               <td>@twitter</td>
            </tr>
         </tbody>
      </table>

      <h6 class="section-secondary-title mt-5">Striped rows :</h6>
      <table class="table table-striped">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">First</th>
               <th scope="col">Last</th>
               <th scope="col">Handle</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
            </tr>
            <tr>
               <th scope="row">2</th>
               <td>Jacob</td>
               <td>Thornton</td>
               <td>@fat</td>
            </tr>
            <tr>
               <th scope="row">3</th>
               <td>Larry</td>
               <td>the Bird</td>
               <td>@twitter</td>
            </tr>
         </tbody>
      </table>

      <h6 class="section-secondary-title mt-5">Bordred :</h6>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">First</th>
               <th scope="col">Last</th>
               <th scope="col">Handle</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
            </tr>
            <tr>
               <th scope="row">2</th>
               <td>Jacob</td>
               <td>Thornton</td>
               <td>@fat</td>
            </tr>
            <tr>
               <th scope="row">3</th>
               <td colspan="2">Larry the Bird</td>
               <td>@twitter</td>
            </tr>
         </tbody>
      </table>
      <!-- end of tables -->

      <!-- devider -->
      <div class="py-5"></div> 

      <!-- typography -->
      <h3 class="components-section-title">Typography</h3>
      <hr>
     
      <table class="table table-borderless v-align-center">
         <tbody>
            <tr>
               <td>
                  <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt; || .h1</code></p>
               </td>
               <td class="w-75"><span class="h1">h1. Bootstrap heading</span></td>
            </tr>
            <tr>
               <td>
                  <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt; || .h2</code></p>
               </td>
               <td><span class="h2">h2. Bootstrap heading</span></td>
            </tr>
            <tr>
               <td>
                  <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt; || .h3</code></p>
               </td>
               <td><span class="h3">h3. Bootstrap heading</span></td>
            </tr>
            <tr>
               <td>
                  <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt; || .h4</code></p>
               </td>
               <td><span class="h4">h4. Bootstrap heading</span></td>
            </tr>
            <tr>
               <td>
                  <p><code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt; || .h5</code></p>
               </td>
               <td><span class="h5">h5. Bootstrap heading</span></td>
            </tr>
            <tr>
               <td>
                  <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt; || .h6</code></p>
               </td>
               <td><span class="h6">h6. Bootstrap heading</span></td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">Paragraph :</p>
               </td>
               <td><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo ab sed voluptas odit hic obcaecati qui omnis.</p></td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">BlockQuote :</p>
               </td>
               <td>
                  <blockquote class="blockquote">
                     <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                     <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
               </td>
            </tr>

            <tr>
               <td><p class="font-weight-bold text-muted">Ordred List :</p></td>
               <td>
                  <ol>
                     <li>Integer molestie lorem at massa</li>
                     <li>Facilisis in pretium nisl aliquet</li>
                     <li>Nulla volutpat aliquam velit
                        <ul>
                           <li>Phasellus iaculis neque</li>
                           <li>Vestibulum laoreet porttitor sem</li>
                           <li>Ac tristique libero volutpat at</li>
                        </ul>
                     </li>
                     <li>Faucibus porta lacus fringilla vel</li>
                     <li>Eget porttitor lorem</li>
                  </ol>
               </td>
            </tr>
            <tr>
               <td><p class="font-weight-bold text-muted">Unordred List :</p></td>
               <td>
                  <ul >
                     <li>Integer molestie lorem at massa</li>
                     <li>Facilisis in pretium nisl aliquet</li>
                     <li>Nulla volutpat aliquam velit
                        <ul>
                           <li>Phasellus iaculis neque</li>
                           <li>Vestibulum laoreet porttitor sem</li>
                           <li>Ac tristique libero volutpat at</li>
                        </ul>
                     </li>
                     <li>Faucibus porta lacus fringilla vel</li>
                     <li>Eget porttitor lorem</li>
                  </ul>
               </td>
            </tr>
            <tr>
               <td><p class="font-weight-bold text-muted">Unstyled List :</p></td>
               <td>
                  <ul class="list-unstyled">
                     <li>Integer molestie lorem at massa</li>
                     <li>Facilisis in pretium nisl aliquet</li>
                     <li>Nulla volutpat aliquam velit
                        <ul>
                           <li>Phasellus iaculis neque</li>
                           <li>Vestibulum laoreet porttitor sem</li>
                           <li>Ac tristique libero volutpat at</li>
                        </ul>
                     </li>
                     <li>Faucibus porta lacus fringilla vel</li>
                     <li>Eget porttitor lorem</li>
                  </ul>
               </td>
            </tr>
            <tr>
               <td class="font-weight-bold text-muted">Description lists : </td>
               <td>
                  <dl class="row">
                     <dt class="col-sm-3">Euismod</dt>
                     <dd class="col-sm-9">
                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio.</p>
                     </dd>

                     <dt class="col-sm-3">Malesuada porta</dt>
                     <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                     <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                     <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                     <dt class="col-sm-3">Nesting</dt>
                     <dd class="col-sm-9">
                        <dl class="row">
                           <dt class="col-sm-4">Nested definition list</dt>
                           <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                        </dl>
                     </dd>
                  </dl>
               </td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">Muted Text :</p>
               </td>
               <td>
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nulla, reprehenderit! Beatae, dolor harum fugiat.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">Primary Text :</p>
               </td>
               <td>
                  <p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nulla, reprehenderit! Beatae, dolor harum fugiat.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">Danger Text :</p>
               </td>
               <td>
                  <p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nulla, reprehenderit! Beatae, dolor harum fugiat.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">Warning Text :</p>
               </td>
               <td>
                  <p class="text-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nulla, reprehenderit! Beatae, dolor harum fugiat.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">Success Text :</p>
               </td>
               <td>
                  <p class="text-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nulla, reprehenderit! Beatae, dolor harum fugiat.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <p class="font-weight-bold text-muted">Info Text :</p>
               </td>
               <td>
                  <p class="text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, nulla, reprehenderit! Beatae, dolor harum fugiat.</p>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <!-- end of typography -->

   <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com" target="_blank">DevCRUD</a></p>
                </div>
                <div class="col-sm-6">
                    <div class="socials">
                        <a class="social-item" href="javascript:void(0)"><i class="ti-facebook"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-google"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-github"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <!-- End of page footer -->
   
   <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
   <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- steller js -->
    <script src="assets/js/steller.js"></script>

</body>
</html>
