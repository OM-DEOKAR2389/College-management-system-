<?php

session_start();
if (isset($_SESSION['id'])) {
    // echo $_SESSION['id'];
}
?>
<html>
    <head>
<title>Image Upload</title>

<style>
    .backg {
        margin-top: 120px;
        border-radius: 20px;
        border: 1px solid black;
    }

    input {
        height: 35px;
    }

    input {
        font-family: 'Times New Roman', serif;
        font-display: swap;
    }



    h3,
    h4 {
        font-family: 'Times New Roman', serif;
        font-size: 28px;
        font-display: swap;
    }

    button {
        font-family: 'Times New Roman', serif;
        font-display: swap;
    }

    .icon {
        color: red;
        font-size: 11px;
    }

    #preview img {
        width: 100%;
        height: auto;
        display: block;
    }

    #preview {
        display: none;
        width: 80px;
        border: 2px dashed #333;
        margin-bottom: 20px;
    }

    #preview1 img {
        width: 100%;
        height: auto;
        display: block;
    }

    #preview1 {
        display: none;
        width: 80px;
        border: 2px dashed #333;
        margin-bottom: 20px;
    }

    #preview2 img {
        width: 100%;
        height: auto;
        display: block;
    }

    #preview2 {
        display: none;
        width: 80px;
        border: 2px dashed #333;
        margin-bottom: 20px;
    }

    #preview3 img {
        width: 100%;
        height: auto;
        display: block;
    }

    #preview3 {
        display: none;
        width: 80px;
        border: 2px dashed #333;
        margin-bottom: 20px;
    }
</style>
</head>
<div class="container pb-3" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class=" col-md-6  col-12 ">
            <div class="card ">
                <form id="change" action="do_img_upload.php" enctype="multipart/form-data" method="post">
                    <div class=" card-header text-center"><b>
                            <h3>Image Upload</h3>

                        </b></div>
                    <div class="card_body">
                        <div class="form p-3 ">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <h4><i class="fa fa-star-o icon" aria-hidden="true"></i> Select image to upload :</h4>

                                                </div>

                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 ">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <input type="file" name="image" id="image1" required>
                                                                </div>
                                                                <div class="col-md-2 mt-4">
                                                                    <div id="preview"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    if (isset($_REQUEST['id'])) {
                                                    ?>
                                                        <p class="text-danger mt-3">You are allowed Only Gif, Png, Jpg, Jpeg, webp</p>
                                                    <?php
                                                    } else
                                                    ?>

                                                    <!-- <input type="hidden" required name="id" value=" -->
                                                    <?php  echo $_SESSION['id']; ?>
                                                    <!-- "> -->
                                                    <input type="text" required name="id" value="32">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mt-4 justify-content-center ">
                                        <div class="col-md-11 col-12 ms-lg-5 text-center mt-2 ms-sm-2">
                                            <button id="main_btn" class="btn btn-danger" style="width:40%;height:40px;" type="submit">
                                                <b>Submit</b>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</html>
<script>
    let image1 = document.querySelector("#image1");
    let preview = document.querySelector("#preview");

    image1.addEventListener("change", function() {
        getImgData();
    });

    function getImgData() {
        const files = image1.files[0];
        if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function() {
                preview.style.display = "block";
                preview.innerHTML = '<img  src="' + this.result + '" />';
            });
        }
    }
</script>

