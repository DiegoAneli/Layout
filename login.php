<?php include 'header.php'?>


<main class="mainProject py-5">

    <section class="bg_personal min-vh-100 py-5">

         <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-5">

                    <div class="p-4 rounded shadow" style="border: 1px solid #FFC107">
                        <h2 class="fw-bold text-warning mb-4 text-center">Login</h2>
                    </div>

                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>

                        <button type="submit" class="btn btn-outline-warning w-100">Login</button>

                        <p class="text-white text-center mt-3 mb-0">
                            No account yet?
                            <a href="register.php" class="text-warning">Register</a>
                        </p>


                    </form>






                </div>

            </div>



         </div>






    </section>

</main>


<?php include 'footer.php'?>