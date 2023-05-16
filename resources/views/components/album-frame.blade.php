<div class="col-md-3">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="text-center">
            <img src="{{ asset('storage/images/'. $al->coverImg) }}" class="mx-auto d-block img-fluid" style="height: auto; max-width: auto;" />
            <div class="card-body" style="height: 7rem;">
                <strong><h5 class="card-title">{{ $al -> albumName }}</h5></strong>
                <p class="card-text">{{ $al -> artistName }}</p>
            </div>
            <div class="card-footer bg-transparent">
                <a href="/albums/{{ $al->id }}" class="btn btn-primary">Ver</a>
                <a href="/albums/{{ $al->id }}/edit" class="btn btn-warning">Editar</a>
            </div>
        </div>
    </div>
</div>