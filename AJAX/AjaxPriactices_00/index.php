<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Searching | Ajax</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/main.js"></script>
</head>

<body>
<h1 align="center">Welcome to Ajax Searching</h1>
<hr>

<div class="container">
    <div class="row">


        <div class="col-md-5 well" style="margin-top: 5%">
            <p class="text-center text-weight-bold">Add user</p>
            <form action="store.php" method="post"  id="myForm">
                <div class="form-group">
                    <label for="userName">User name:</label>
                    <input type="text" name="user_name" class="form-control" id="userName" placeholder="User Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>

                <button type="submit" id="sub" class="btn btn-default">Submit</button>
            </form>

            <div class="success"></div>

        </div>

        <div class="col-md-5 col-md-offset-2 well" style="margin-top: 5%">

            <form action="search.php" id="searchForm" method="post">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">A</label>
                    <div class="input-group">
                        <div class="input-group-addon">Search</div>
                        <input type="text" name="search" class="form-control search " id="exampleInputAmount" placeholder="Search by Name">
                        <div class="input-group-addon glyphicon glyphicon-search"></div>
                    </div>
                </div>
            </form>

            <div class="success1"></div>

        </div>



    </div>
</div>






<script>
    // For Insertion

    $("#sub").click( function(){
        var data = $("#myForm :input").serializeArray();
        $.post($("#myForm").attr("action"),
            data,
            function(message){
                $('.success').html(message);

        });



    });

    $("#myForm").submit(function(){
        clearInput();
        return false;
    });

     function clearInput(){
         $("#myForm :input").each(function(){
             $(this).val(' ');
         });
     }




    // for Searching

    $('document').ready(function(){
       $('.search').keyup(function(){
           var search = $(this).val();
//           alert(search);
           $.post($("#searchForm").attr('action'),
               {'search': search},
               function(data){
                   $('.success1').html(data);

               }
           )
       })
    });

</script>
</body>
</html>