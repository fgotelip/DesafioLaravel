             <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="p-4">
              <x-delete></x-delete>
              </button>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5  id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                      <form method="post" action="{{$slot}}" class="p-6">
                          @csrf
                          @method('DELETE')
                        <button class="btn btn-danger">Sim</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>