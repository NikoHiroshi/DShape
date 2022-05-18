@extends('./layouts/main')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-12 my-3">
        <a href="/">Voltar</a>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-primary text-white text-center">
            <h2>Cadastrar</h2>
          </div>
          <div class="card-body">
            <div class="container px-3 my-3">
              <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                {{-- Data --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="dataMed" type="date" placeholder="Data da medição" data-sb-validations="required" />
                  <label for="dataMed">Data da Medição</label>
                  <div class="invalid-feedback" data-sb-feedback="dataMed:required">Data da medição é obrigatório.</div>
                </div>

                {{-- Peso --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="pesoKg" type="text" placeholder="Peso(Kg)" data-sb-validations="required" />
                  <label for="pesoKg">Peso(Kg)</label>
                  <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso(Kg) é obrigatório.</div>
                </div>

                {{--  Altura --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="alturaCm" type="text" placeholder="Altura(cm)" data-sb-validations="required" />
                  <label for="alturaCm">Altura(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="alturaCm:required">Altura(cm) é obrigatório.</div>
                </div>

                {{-- Peitoral --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="peitoralCm" type="text" placeholder="Peitoral(cm)" data-sb-validations="required" />
                  <label for="peitoralCm">Peitoral(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="peitoralCm:required">Peitoral(cm) é obrigatório.</div>
                </div>

                {{-- Braço esquerdo --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="bracoEsquerdoCm" type="text" placeholder="Braço esquerdo(cm)" data-sb-validations="required" />
                  <label for="bracoEsquerdoCm">Braço esquerdo(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="bracoEsquerdoCm:required">Braço esquerdo(cm) é obrigatório.</div>
                </div>

                {{-- Braço direito --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="bracoDireitoCm" type="text" placeholder="Braço direito(cm)" data-sb-validations="required" />
                  <label for="bracoDireitoCm">Braço direito(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="bracoDireitoCm:required">Braço direito(cm) é obrigatório.</div>
                </div>

                {{-- Abdômen --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="abdomenCm" type="text" placeholder="Abdômen(cm)" data-sb-validations="required" />
                  <label for="abdomenCm">Abdômen(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="abdomenCm:required">Abdômen(cm) é obrigatório.</div>
                </div>

                {{-- Cintura --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="cinturaCm" type="text" placeholder="Cintura(cm)" data-sb-validations="required" />
                  <label for="cinturaCm">Cintura(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="cinturaCm:required">Cintura(cm) é obrigatório.</div>
                </div>

                {{-- Quadril --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="quadrilCm" type="text" placeholder="Quadril(cm)" data-sb-validations="required" />
                  <label for="quadrilCm">Quadril(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="quadrilCm:required">Quadril(cm) é obrigatório.</div>
                </div>

                {{-- Coxa esquerda --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="coxaEsquerdaCm" type="text" placeholder="Coxa esquerda(cm)" data-sb-validations="required" />
                  <label for="coxaEsquerdaCm">Coxa esquerda(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="coxaEsquerdaCm:required">Coxa esquerda(cm) é obrigatório.</div>
                </div>

                {{-- Coxa direita --}}
                <div class="form-floating mb-3">
                      <input class="form-control" id="coxaDireitaCm" type="text" placeholder="Coxa direita(cm)" data-sb-validations="required" />
                      <label for="coxaDireitaCm">Coxa direita(cm)</label>
                      <div class="invalid-feedback" data-sb-feedback="coxaDireitaCm:required">Coxa direita(cm) é obrigatório.</div>
                </div>

                {{-- Panturriliha esquerda --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="panturrilhaEsquerdaCm" type="text" placeholder="Panturrilha esquerda(cm)" data-sb-validations="required" />
                  <label for="panturrilhaEsquerdaCm">Panturrilha esquerda(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="panturrilhaEsquerdaCm:required">Panturrilha esquerda(cm) é obrigatório.</div>
                </div>

                {{-- Panturrilha direita --}}
                <div class="form-floating mb-3">
                  <input class="form-control" id="panturrilhaDireitaCm" type="text" placeholder="Panturrilha direita(cm)" data-sb-validations="required" />
                  <label for="panturrilhaDireitaCm">Panturrilha direita(cm)</label>
                  <div class="invalid-feedback" data-sb-feedback="panturrilhaDireitaCm:required">Panturrilha direita(cm) é obrigatório.</div>
                </div>

                {{-- Botões --}}
                <div class="d-flex ">
                  <button class="btn btn-primary btn-lg disabled flex-fill me-1" id="submitButton" type="submit">Enviar</button>
                  <button class="btn btn-secondary btn-lg flex-fill ms-1" type="reset">Limpar</button>
                </div>
              </form>
            </div>

          </div><!-- fim do card-body -->
        </div> <!-- fim do card -->
      </div> <!-- fim da col -->
    </div> <!-- fim da row-->
  </div> <!-- fim da container -->
@endsection