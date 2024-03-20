<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>



    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- framework -->
    <link rel="stylesheet" href="./css/framework.css">

    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/39dc9eb8ed.js" crossorigin="anonymous"></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</head>




<body data-bs-theme="dark">

    <div id="app">
        <section class="container">
            <h1 class="d-flex justify-content-center pt-5">My Albums</h1>
            <ul class="d-flex row-cols-4 justify-content-center flex-wrap align-content-center gap-4">
                <li class="d-flex flex-column  align-items-center px-5 py-4 rounded-2"
                    v-for="(discs, index) in discList" :key="index">
                    <img :src="discs.poster" alt="img-album">
                    <div class="d-flex text-center flex-column align-items-center">
                        <h2 class=" fs-5 mt-2"> {{ discs.title }} </h2>
                        <h3 class=" fs-6"> {{ discs.author }} </h3>
                        <span class=" fs-5"> {{ discs.year }} </span>
                    </div>
                </li>
            </ul>


        </section>
    </div>











    <!-- ******** LIBRARIES AND FRAMEWORKS ******** -->

    <!-- JS -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>