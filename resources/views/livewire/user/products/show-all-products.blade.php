<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('user')}}">Home</a></li>
              <li class="breadcrumb-item active">Mis productos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      
      <div class="container-fluid">
 
        <div class="row">


            <div class="input-group mb-3">
              <input class="form-control" placeholder="Buscar" type="text" value="" wire:model="search">
              <a href="{{ route('user.products.create') }}"  class="btn btn-primary mw-100">Crear Producto</a>
            </div>

    
        </div>
    
        @if ($posts->count() > 0)
    
            <div class="card">
                <div class="card-body">
    
                    <table class="table table-bordered table-hover table-striped">
    
                        <thead>
                            <tr>
                                <th role="button" wire:click="order('id')"><span>id</span> <i class="fas fa-sort"></i>
                                </th>
                                <th role="button" wire:click="order('title')">Titulo <i class="fas fa-sort"></i></th>
                                <th role="button" wire:click="order('title')">Imagen <i class="fas fa-sort"></i></th>
                                <th role="button" wire:click="order('created_at')">Fecha</th>
                                <th role="button" wire:click="order('updated_at')">Actualizacion</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
    
                        <tbody>
    
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }} </td>
                                    <td><img height="75px" src="{{ Storage::url($post->images->first()->url) }}" alt=""></td>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td><a href="{{ route('user.products') . '/' . $post->id . '/edit' }}">{{ $post->id }}</a>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- {{ $posts->links() }} --}}
    
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