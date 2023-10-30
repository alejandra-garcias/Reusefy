<style>
    .tarjeta {
        background-color: rgb(255, 255, 255);
        height: 40vh;
        width: 20vw;
        border-radius: 40px
    }

    .tarjeta-foto {
        background-color: aquamarine;
        width: 100%;
        height: 30vh;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
        border-bottom-right-radius: 40px;

    }

    .tarjeta-foto img {
        width: 100%;
        height: 100%;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
        border-bottom-right-radius: 40px;

    }

    .tarjeta-texto {
        background-color: rgb(255, 255, 255);
        width: 100%;
        height: 10vh;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
        border: 1px solid black;
        z-index: 1000000000;
        display: flex;
        justify-content:space-around

    }

    .tarjeta-texto h2{
        font-size: 1rem
    }
    .tarjeta-texto span{
        font-size: 0.9rem
    }
    .tarjeta-texto p{
        font-size: 0.7rem;
        display:none
    }
    .tarjeta-icono{
        display: flex;
        align-items: center;
        justify-content: center;
        width:30%;
        height: 100%

    }
    .tarjeta-icono img{
        width:2.8rem;
        border-radius: 50%
    }
    .tarjeta-info{
        margin:0;
        padding: 0;
        display: flex;
        flex-direction: column
    }

    /*hovers*/
    .tarjeta-texto:hover{
        height: 20vh;
    }
</style>
<div class="tarjeta">
    <div class="tarjeta-foto">
        <img src="https://via.placeholder.com/150" alt="">
    </div>
    <div class="tarjeta-texto">
        <div class="tarjeta-icono">
            <img src="https://via.placeholder.com/150" alt="">
        </div>
        <div class="tarjeta-info">
            <h2>titulo</h2>
            <span>precio</span>
            <p>descripcion</p>
        </div>
    </div>

</div>
