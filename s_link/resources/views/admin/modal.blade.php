<div class="modal" id="modal-delete-{{$usu->id}}" tabindex="-1" role="dialog">
    <form  action="/eliminar/{{$usu->id}}" method="DELETE" style="display: none;">
        @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¿Desea eliminar al usuario {{$usu->id}} ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Una vez realizada esta accion no se podra volver atras.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
      </div>
    </div>
    </form>
  </div>