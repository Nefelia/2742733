<!DOCTYPE html>
<html lang="en">

<style>
    .header {
        background-color: #19181D;
        height: 140px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        padding: 10px 15px;
    }

    .logo-header {
        background-image: url(./img/Logo.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 120px;
        width: 180px;
    }

    .search {
        border: 3px #E41476 solid;
        border-radius: 15px;
        background-color: transparent;
        color: #E41476;
        padding: 5px 10px;
        font-size: larger;
    }

    ::placeholder {
        color: #E41476;
    }

    .usuario {
        display: flex;
        align-items: center;
        justify-content: end;
        gap: 3.5rem;
    }

    .inicio {
        color: #E41476;
        text-decoration: none;
        font-family: CenturyGothicB;
        font-size: x-large;
    }

    .registro {
        color: #EEEF04;
        text-decoration: none;
        font-family: CenturyGothicB;
        font-size: x-large;
        background-color: #E41476;
        padding: 8px 20px;
        border-radius: 15px;
    }
</style>
<header>
    <div class="container-fluid text-center">
        <div class="row header">
            <div class="col-1">
                <div class="logo-header">
                </div>
            </div>
            <div class="col">
                <div class="form">
                    <input type="text" class="form-input search" placeholder="BUSCAR...">
                </div>
            </div>
            <div class="col-6 usuario">
                <a href="" class="inicio">INICIAR SESIÓN</a>
                <a href="" class="registro">REGISTRARSE</a>
            </div>
        </div>
    </div>
</header>