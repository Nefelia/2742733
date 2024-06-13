<style>
    .footer {
        background: #19181D;
        color: #726F82;

        height: auto;
        display: flex;
        align-items: center;
    }

    .logo-footer {
        background-image: url(./img/Logo.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 200px;
        width: 180px;
    }

    .copyright {
        text-align: left;
    }

    .x,
    .inst,
    .google,
    .wsp {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .x,
    .inst {
        padding-left: 80px;
    }

    .ix,
    .iinst,
    .igoogle,
    .iwsp {
        padding-bottom: 15px;
        padding-right: 10px;
    }
</style>

<footer>
    <div class="container-fluid text-center">
        <div class="row footer">
            <div class="col-4 copyright">
                <p>Copyright</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia tempora modi optio provident,
                    eum vero qui quam impedit quos, consequuntur libero nam beatae. Repellendus eos minus maiores
                    illo deserunt eius.</p>
            </div>
            <div class="row row-cols-2 col-6 redes">
                <div>
                    <div class="x">
                        <i class="fa-brands fa-x-twitter ix" style="color: #e41476;"></i>
                        <p>@musica123</p>
                    </div>
                    <div class="inst">
                        <i class="fa-brands fa-instagram iinst" style="color: #e41476;"></i>
                        <p>musica123</p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="google">
                            <i class="fa-brands fa-google igoogle" style="color: #e41476;"></i>
                            <p>musica123@gmail.com</p>
                        </div>
                        <div class="wsp">
                            <i class="fa-brands fa-whatsapp iwsp" style="color: #e41476;"></i>
                            <p>(##)123-456 123</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="logo-footer"></div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
