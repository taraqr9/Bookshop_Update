<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>

<body>


        <div id="" data-rating="3" data-rateyo-read-only="true" class="rateYo"></div>

        <div id="" data-rating="3" data-rateyo-read-only="true " class="rateYo"></div>
        <div id="" data-rating="3" data-rateyo-read-only="true " class="rateYo"></div>
        <span id="" class="rateYo" data-rating="3" data-rateyo-read-only="true " ></span>
        <span class='rateyo m-auto' data-rateyo-rating='5' data-rateyo-read-only='true'></span>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        // star rating init
        $(".rateYo").each(function(e) {

            var language = "english";
            var rating = $(this).attr("data-rating");
            $(this).rateYo({
                rating: rating,
                starWidth: "20px",
                numStars: 5,
                fullStar: true,
                normalFill: "#A0A0A0",
                spacing: "5px",
                precision: 2,
                // rtl: true,
                // readOnly: true,
            });
        });



        
    </script>
</body>



</html>