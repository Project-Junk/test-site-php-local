<html>

<head>
   <title>Contact Form Tutorial by Bootstrapious.com</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel='stylesheet' href='css/style.css'>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
   <link href='custom.css' rel='stylesheet' type='text/css'>
</head>

<body>

   <div class="container">

      <div class="row">

         <div class="col-xl-8 offset-xl-2 py-5">

            <h1 class="center">Service Section</h1>

            <p class="lead center"></p>

            <!-- We're going to place the form here in the next step -->
            <form></form>

         </div>

      </div>

   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
   <script src="contact.js"></script>
</body>

</html>

<form id="contact-form" method="post" action="service_submit.php" role="form">

   <div class="messages"></div>

   <div class="controls">

      <div class="row">
         <div class="col-md-6 center">
            <div class="form-group">
               <label for="form_name">Enter the Service</label>
               <input id="service_type_name" type="text" name="service_type_name" class="form-control" placeholder="Please enter your service request" required="required" data-error="Firstname is required.">
               <div class="help-block with-errors"></div>
            </div>
         </div>

      </div>
      <div class="row">


      </div>
      <div class="row">
         <div class="col-md-6 center">
            <div class="form-group">
               <label for="form_message">Remarks</label>
               <textarea id="remarks" name="remarks" class="form-control" placeholder="Provide additional information regarding the services" rows="4" required="required" data-error="Provide additional information regarding the services"></textarea>
               <div class="help-block with-errors"></div>
            </div>
         </div>

         <div class="col-md-12  px-2 center">
            <div class="form-group center">
               <label for="form_need">Select Priority </label>
               <select id="priority" name="priority" class="form-control" required="required" data-error="Please specify your need.">
                  <option value=""></option>
                  <option value="Request quotation">Urgent</option>
                  <option value="Request order status">Not urgent</option>
               </select>
               <div class="help-block with-errors"></div>
            </div>
         </div>
      </div>

   </div>
   <div class="col-md-6 center">
      <input style="padding-left:50px; padding-right:50px; margin-left:200px;" type="submit" class="btn" value="Submit">
   </div>
</form>
