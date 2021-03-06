<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="titulo_libro"></label>
                <input wire:model="titulo_libro" type="text" class="form-control" id="titulo_libro" placeholder="Titulo Libro">@error('titulo_libro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="edicion_libro"></label>
                <input wire:model="edicion_libro" type="text" class="form-control" id="edicion_libro" placeholder="Edicion Libro">@error('edicion_libro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_lanzamiento_libro"></label>
                <input wire:model="fecha_lanzamiento_libro" type="text" class="form-control" id="fecha_lanzamiento_libro" placeholder="Fecha Lanzamiento Libro">@error('fecha_lanzamiento_libro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="idioma_libro"></label>
                <input wire:model="idioma_libro" type="text" class="form-control" id="idioma_libro" placeholder="Idioma Libro">@error('idioma_libro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descripcion_libro"></label>
                <input wire:model="descripcion_libro" type="text" class="form-control" id="descripcion_libro" placeholder="Descripcion Libro">@error('descripcion_libro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="paginas_libro"></label>
                <input wire:model="paginas_libro" type="text" class="form-control" id="paginas_libro" placeholder="Paginas Libro">@error('paginas_libro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="categoria_id"></label>
                <input wire:model="categoria_id" type="text" class="form-control" id="categoria_id" placeholder="Categoria Id">@error('categoria_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="autor_id"></label>
                <input wire:model="autor_id" type="text" class="form-control" id="autor_id" placeholder="Autor Id">@error('autor_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="editorial_id"></label>
                <input wire:model="editorial_id" type="text" class="form-control" id="editorial_id" placeholder="Editorial Id">@error('editorial_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>