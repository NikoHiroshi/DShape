@extends('./layouts/auth')

@section('container')
<div class="card register bg-dark text-white position-absolute top-50 start-50 translate-middle">
    <div class="card-header text-center">
        <h1>Cadastre-se 📒</h1>
    </div>
    <div class="card-body text-center">
        <div class="row">
            <div class="col-6 left-side">
                <h2>Bem vindo ao DShape!</h2>
                <p>Vamo começar o projetinho pai? <i class="fa-solid fa-chart-line"></i></p>
                <img src="https://c.tenor.com/lPrqJck5fvoAAAAM/rikka-rikka-takanashi.gif" alt="">
            </div>
            <div class="col-6 right-side mt-4">
                <form action="">
                    <input type="name" class="form-control" placeholder="Nome de usuario" required>
                    <br>
                    <input type="email" class="form-control" placeholder="Email" required>
                    <br>
                    <input type="password" class="form-control" placeholder="Senha" required>
                    <br>
                    <input type="password" class="form-control" placeholder="Repita sua senha" required>
                    <br>
                    <div class="d-grid">
                        <button class="btn btn-site" type="submit">Cadastrar</button>
                        <p>Já tem uma conta?<a class="link active forgor" href="/login">Entre aqui</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection