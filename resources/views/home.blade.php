@extends('./layouts/main')
@extends('.layouts/navbar')

@section('container')
<div class="container-fluid d-flex align-items-center paralaco justify-content-center text-center">
    <div class="row">
        <div class="col-12">
            <h1 class="mx-auto">DSHAPE</h1>
            <h4>Venha fazer suas medidas hoje!</h4>
            <a class="btn btn-site" href="/register">Tirar sua medida</a>
        </div>
    </div>
</div>
<div class="container">
    <div class=" row align-items-center bagui">
        <div class="col-6">
            <img src="https://c.tenor.com/JAuzjdYxt28AAAAC/one-punch-man-saitama.gif" class="mt-5 d-flex justify-content-center" alt="asdasda">
        </div>
        <div class="col-6">
            <h1>PARA QUE O SITE FUNCIONA?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin lacus eu mauris sagittis,
                luctus ultrices nisi dictum. Morbi quis aliquam est, ut interdum tellus.
                Pellentesque venenatis ultricies felis, pretium vestibulum neque interdum id.
                Quisque urna augue, bibendum non bibendum eget, egestas et eros. Phasellus fermentum,
                arcu nec mattis placerat, nibh odio maximus orci, sed gravida odio purus ut nunc.
                Curabitur a lacus vel augue eleifend consectetur.</p>
        </div>
    </div>
    <div class="row align-items-center bagui">
        <div class="col-6">
            <h1>COMO VOCÊ PODE UTILIZÁ-LO?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin lacus eu mauris sagittis,
                luctus ultrices nisi dictum. Morbi quis aliquam est, ut interdum tellus.
                Pellentesque venenatis ultricies felis, pretium vestibulum neque interdum id.
                Quisque urna augue, bibendum non bibendum eget, egestas et eros. Phasellus fermentum,
                arcu nec mattis placerat, nibh odio maximus orci, sed gravida odio purus ut nunc.
                Curabitur a lacus vel augue eleifend consectetur.</p>
        </div>
        <div class="col-6">
            <img src="https://c.tenor.com/p8gfSVD9BowAAAAC/zoro-one-piece.gif" class="mt-5 d-flex justify-content-center" alt="asdasda">
        </div>
    </div>
</div>

<footer class="footer py-4 text-center">
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4">Copyright&copy; <b>Niko Hiroshi 3°DS 2022</b></div>
            ||
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-site btn-social mx-2" target="blank" href="https://twitter.com/elonmusk?" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-site btn-social mx-2" target="blank" href="https://www.facebook.com/groups/getbootstrap" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-site btn-social mx-2" target="blank" href="https://www.instagram.com/nintendo_brasil/" aria-label="LinkedIn"><i class="fa-brands fa-instagram"></i></i></a>
            </div>
        </div>
    </div>
</footer>
@endsection