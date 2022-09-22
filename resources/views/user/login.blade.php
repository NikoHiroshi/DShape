@extends('./layouts/auth')

@section('container')
<div class="card login bg-dark text-white position-absolute top-50 start-50 translate-middle">
    <div class="card-header text-center">
        <h1>Login 🖊</h1>
    </div>
    <div class="card-body text-center">
        <div class="row">
            <div class="col-6 left-side">
                <h2>Bem vindo de volta!</h2>
                <p>Continue com o otimo desempenho! 💪</p>
                <img class="login-img" src="https://c.tenor.com/xtGD7kyjoBMAAAAC/dbz-goku.gif" alt="">
            </div>
            <div class="col-6 right-side">
                <form action="">
                    <input type="email" class="form-control" placeholder="E-mail" required>
                    <br>
                    <input type="password" class="form-control" placeholder="Senha" required>
                    <br>
                    <div class="d-grid">
                        <button class="btn btn-site" type="submit">Login</button>
                        <a class="link active forgor text-end" href="" data-bs-toggle="modal" data-bs-target="#forgor">Esqueceu sua senha?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="forgor" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog text-white modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h2 class="modal-title" id="modalLabel">Esqueceu sua senha <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"><i class="fa-solid fa-question"></i></a></h2>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <h5>Insira seu email para resetar sua senha:</h5>
                    <input type="text" class="form-control" placeholder="Insira seu email" required>
                    <br>
                    <div class="d-grid text-center">
                        <button class="btn btn-site">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection