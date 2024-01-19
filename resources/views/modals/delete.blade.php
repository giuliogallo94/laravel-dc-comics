  <div class="modal fade" id="exampleModal-{{ $comic_item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Comic selected:</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <h5 class="mb-5">{{ $comic_item->title }} </h5>
            <p class="text-center text-danger"><b>Are you sure you want to delete the element?</b></p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
            <form action="{{ route('comics.destroy', ['comic' => $comic_item->id])}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
          </form>
        
        </div>
      </div>
    </div>
  </div>