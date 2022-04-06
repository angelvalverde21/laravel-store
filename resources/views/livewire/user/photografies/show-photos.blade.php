<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mis fotos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('user') }}">Home</a></li>
                        <li class="breadcrumb-item active">Mis fotos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col mb-3">
                    <input placeholder="Buscar" type="text" value="" wire:model="search" class="form-control">
                </div>

            </div>

            @if ($posts->count() > 0)

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">

                            <thead>
                                <tr>
                                    <th role="button" wire:click="order('id')"><span>id</span> <i
                                            class="fas fa-sort"></i></th>
                                    <th class="text-center" role="button" wire:click="order('title')">Imagen <i
                                            class="fas fa-sort"></i></th>
                                    <th role="button" wire:click="order('title')">Titulo <i class="fas fa-sort"></i>
                                    </th>
                                    <th role="button" wire:click="order('created_at')">Fecha</th>
                                    <th role="button" wire:click="order('updated_at')">Actualizacion</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }} </td>
                                        <td class="text-center"><img height="75px"
                                                src="{{ Storage::url($post->images->first()->url) }}" alt=""></td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td><a
                                                href="{{ route('user.photografies') . '/' . $post->id }}">{{ $post->id }}</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>
            @else
                No se encontro resultados

            @endif



        </div>

    </section>
    <!-- /.content -->


</div>
