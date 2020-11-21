<style>
    .form-control {
        display: block;
        width: 100%;
        font-size: 20px;
        font-weight: 400;
        line-height: 1.5;
        border-color: #00ac96;
        border-style: solid;
        border-width: 0 0 3px 0;
        padding: 10px;
        color: #495057;
        height: auto;
        border-radius: 0;
        background-color: #fff;
        background-clip: padding-box;
    }

    h1 {
        color: #ff0000;
        font-size: 40px;
    }

    sup {
        font-size: small;
        vertical-align: super;
    }

    .btnL {
        background: #ff0000;
        color: white;
        border: none;
        border-radius: 2px;
        font-size: 20px;
        margin-bottom: 10px;
        margin-top: 10px;
        width: 100%;
        padding: 10px;
    }

    .btnL:hover {
        opacity: 0.7;
    }

    .btnR {
        background: #fff;
        color: #ff0000;
        border-radius: 2px;
        font-size: 20px;
        padding: 10px;
        margin-bottom: 10px;
        margin-top: 10px;
        width: 100%;
        border: 1px solid grey;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, .8);
    }

    .btnR:hover {
        font-size: 23px;
    }
</style>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center ">

                                    <h1 class="mb-4"><i><b>sentral</b>tukang<sup>&reg;</sup></h1></i>
                                </div>


                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class=" form-control form-control-user " id="email" name="email" placeholder="email">
                                        <?= form_error('email', '<small class="text-danger" pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class=" form-control form-control-user " id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger" pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btnL">Login</button>
                                    <button type="button" class="btnR" onclick="window.location.href='<?= base_url('auth/registration'); ?>'">Register</button>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>