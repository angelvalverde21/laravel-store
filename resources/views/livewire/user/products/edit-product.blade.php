<div>
    {{-- The whole world belongs to you. --}}

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Complete la informacion del producto</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <div class="container-fluid">

            <form class="row g-3" action="">

                <div class="col">

                    <div class="card">

                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-6 col">

                                    <label for="inputState" class="form-label">Categoria</label>

                                    <select id="inputState" class="form-select" wire:model="category_id">

                                        <option value="" selected disabled>Escoja una Categoria</option>

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>

                                    <x-jet-input-error for="category_id" />
                                </div>

                                <div class="col-lg-6 col">

                                    <label for="inputState" class="form-label">Subcategoria</label>


                                    <select id="inputStatex" class="form-select" wire:model="product.subcategory_id">

                                        <option value="" selected disabled>Escoja una sub categoria</option>

                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach

                                    </select>

                                    <x-jet-input-error for="subcategory_id" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col">
                                    <div class="mb-3">
                                        <label for="inputName" class="form-label">Nombre del producto</label>
                                        <input type="text" class="form-control" id="inputName"
                                            wire:model="product.name" aria-describedby="nameHelp">

                                        <x-jet-input-error for="name" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col">
                                    <div class="mb-3">
                                        <label for="inputSlug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" id="inputSlug"
                                            wire:model="product.slug" aria-describedby="nameHelp" readonly>
                                        <x-jet-input-error for="slug" />
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <textarea class="form-control" wire:model="product.description"></textarea>
                                    <x-jet-input-error for="description" />
                                </div>
                            </div>


                            <div class="row">
                                <div class="col mt-3 d-flex">
                                    <x-jet-action-message class="mr-3" on="guardando">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </x-jet-action-message>
                                    <button type="button" wire:loading.attr="disabled" wire.target="save"
                                        wire:click="save" class="btn btn-primary ml-auto">Actualizar producto</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </form>

        </div>

    </section>



</div>
