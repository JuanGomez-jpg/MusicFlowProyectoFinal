<li class="list-group-item list-group-item-action d-flex justify-content-between">
    <div class="ms-2 me-auto">
        <button 
            id="showSong" 
            class="btn btn-link btn-lg" 
            style="color: black; text-decoration: none;"
            onclick="showSong( {{$song}} )">
            <div class="fw-bold text-start">{{ $song -> songName }}</div>
            <p class="text-start">Duración: {{ $song -> songDuration }}</p>
        </button>
    </div>
                        
        <div class="dropdown">
            <div class="btn-group">
                <button
                    type="button"
                    class="btn btn-secondary dropdown-toggle" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false">
                    Opciones <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item btn text-light bg-dark w-100" href="/songs/{{ $song -> id }}/edit" style="cursor: pointer;">Editar</a></li>
                <li>
                    <form action="{{ route('songs.destroy', $song) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-light">Eliminar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</li>