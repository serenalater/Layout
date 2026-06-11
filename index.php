<?php include 'header.php' ?>

<main>

    <!-- hero -->


    <div style="height: 100vh; background-image: url(./img/hero-bg.jpg); background-size: cover; background-position: center;" class="position-relative w-100">
        <div class="position-absolute text-white d-flex flex-column align-items-start justify-content-center" style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.7);">
            <div class="container d-flex vh-100 row align-content-center m-auto">
                <div class="col-md-6">
                    <span style="color: #bbb;" class="text-uppercase">Burger deliziosi</span>
                    <!-- on small screens remove display-4 -->
                    <h1 class="mb-4 mt-2 display-4 fw-bold">Il buger fatto<br> <span class="text-warning">come si deve</span></h1>
                    <p  style="color: #bbb;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem eos ea, cum quae facilis optio impedit tempora aliquam at eveniet?</p>
                    <div class="mt-5">
                    <!-- hover background-color: white; color: black; -->
                        <a href="#" class="btn px-5 py-3 text-dark fw-bold mt-3 mt-sm-0 bg-warning rounded-5">Scopri chi siamo</a>
                    </div>
            
                </div>
                <div class="col-md-6">
                    <img src="./img/burger.webp" class="float-end">

                </div>
            </div>
        </div>
    </div>
     

</main>


<!-- chi siamo -->
<div class="container col mt-5 mb-5 pt-5">
    <h2 class="text-center mb-5 fw-bold display-5">Chi Siamo</h2>
        <div class="container d-flex row">
            <div class="col-6">
                <div class="container row">
                    <div class="col-6">
                        <img src="./img/hero-bg1.jpg" alt="" class="rounded img-fluid">
                    </div>
                    <div class="col-6">
                        <img src="./img/hero-bg3.jpg" alt="" class="rounded img-fluid">
                    </div>
                </div>
                
            </div>
            <div class="col-6">
                <h3 class="fw-bold">Ogni burger racconta una scelta.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum reprehenderit eius necessitatibus perferendis quos? Inventore deserunt magnam quia aliquid deleniti, minus, quod voluptates veniam quibusdam quaerat ea reprehenderit adipisci quae!</p>
                <div class="row mb-5 gap-3">
                        <div class="text-center col bg-warning p-3 rounded">
                            <div class="text-dark text-3xl font-bold mb-2 fw-semibold">1985</div>
                            <div class="text-dark">Lorem ipsum</div>
                        </div>
                        <div class="text-center col bg-warning p-3 rounded">
                            <div class="text-dark text-3xl font-bold mb-2 fw-semibold">50+</div>
                            <div class="text-dark">Lorem ipsum</div>
                        </div>
                </div>
                <div class="row gap-3">
                        <div class="text-center col bg-warning p-3 rounded">
                            <div class="text-dark text-3xl font-bold mb-2 fw-semibold">3</div>
                            <div class="text-dark">Lorem ipsum</div>
                        </div>
                        <div class="text-center col bg-warning p-3 rounded">
                            <div class="text-dark text-3xl font-bold mb-2 fw-semibold">100%</div>
                            <div class="text-dark">Lorem ipsum</div>
                        </div>
                </div>
            </div>



        </div>







</div>








<?php include 'footer.php' ?>