@extends('./layouts/main')
@extends('.layouts/navbar')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card form bg-dark">
          <div class="card-header head text-white text-center mt-4">
            <h2>Medidas Cadastradas</h2>
          </div>
          <div class="card-body">
            <div class="container px-3 my-3">
              <table class="table">
                <thead>
                  <tr class="text-white">
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody class="text-white">
                  @if ($measurements->isEmpty())
                    <tr>
                      <td colspan="3" class="text-center">Nenhuma medida cadastrada ☹☹☹</td>
                    </tr>
                  @else
                  @foreach ($measurements as $measurement)
                  <tr>
                    <th scope="row">{{$measurement->id}}</th>
                    <td>{{$measurement->date}}</td>
                    <td>
                      <button class="btn btn-site">Editar</button>
                      <button id="botao" type="button" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target="#modal"  data-measurement-id="{{$measurement->id}}">
                        Excluir
                        </button>
                    </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div><!-- fim do card-body -->
        </div> <!-- fim do card -->
      </div> <!-- fim da col -->
    </div> <!-- fim da row-->
  </div> <!-- fim da container -->

  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="modalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <p>Deseja excluir essa medida?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sitem" data-bs-dismiss="modal">Cancelar</button>
                <form action="" method="POST" id="formDeleteMeasurements">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-cancelm">Excluir</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

  <script>
    const confirmationModal = document.getElementById('modal');
    confirmationModal.addEventListener('show.bs.modal', function(event) {
      const btn = event.relatedTarget;
      const form = document.getElementById('formDeleteMeasurements')

      form.action = "/measurements/" + btn.getAttribute('data-measurement-id');
    })
  </script>
@endsection

