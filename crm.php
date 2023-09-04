<?php
  require_once('header.php');

?>

<div class="row d-flex justify-content-center">
                <div class="col-lg-6 pb-4">
                    <h4 style="text-align: center;">
                        Send us a message
                    </h4>

                </div>
            </div>

            <div class="row">

                <div class="col-lg-12 d-flex justify-content-center">

                    <div class="row p-4 shadow-lg col-lg-5" style="background-color: rgb(241, 241, 241);">


                        <form action="https://formsubmit.co/adeyemiakinyemi01@gmail.com" method="POST" >

                            <div>
                                <label for="questions" class="form-label d-flex align-items-start">Message:</label>
                                <textarea required id="myTextArea" name="message" rows="4"></textarea>
                            </div>

                            <div class="my-3">
                              <input type="text" required class="form-control" id="exampleInputEmail1" name="first_name" placeholder="Your First Name">
                            </div>



                            <div class="my-3">
                              <input type="text" required class="form-control" id="exampleInputEmail1" name="last_name"  placeholder="Your Last Name">
                            </div>

                            <div class="my-3">
                                <input type="number" required class="form-control" id="exampleInputEmail1" name="telephone" placeholder="&#9742 Your Telephone No *">
                            </div>

                            
                            <div class="my-3">
                                <input type="email" required class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="&#128231 Your Email*">
                            </div>




                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-dark text-white d-flex">Submit</button>

                            </div>
                           

                        </form>


                    </div>

                </div>
           
                      
            </div>

    <?php
        require_once('footer.php');

    ?>
