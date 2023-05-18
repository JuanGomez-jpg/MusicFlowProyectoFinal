

function showSong(value)
{
    let songName = value.songName;
    let songDuration = value.songDuration;
    let songLyrics = value.songLyrics;

    var textoFormateado = songLyrics.replace(/[A-Z]/g, function(match) {
        return '\n' + match;
      });
    var lineas = textoFormateado.split('\n');
    lineas.shift();
    var textoSinPrimeraLinea = lineas.join('\n');
    Swal.fire({
        title: '<strong><pre><code>'+ songName + '</code></pre></strong>',
        text: 'Duración: ' + songDuration,
        input: 'textarea',
        inputLabel: 'Letra',
        inputValue:textoSinPrimeraLinea,
        inputAttributes: {
            rows: 20,
            style: "border: 1px solid red; font-size: 16px; height: auto;",
            disabled: true,
        },
        showCloseButton: false,
        focusConfirm: false,
      });
}

//========= DELETE ALBUM ===========
function successDeletedAlbum()
{
  Swal.fire(
    '¡Eliminado!',
    'El album fue eliminado.',
    'success'
  )
}

function confirmationDeleteAlbum()
{
  const form = document.querySelector('#delete-album');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    Swal.fire({
      title: '¿Estás seguro que deseas eliminar el album?',
      text: "¡No podrás revertir los cambios!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Borrar'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })
  });
}

//========= CREATE ALBUM ===========
function successCreatedAlbum()
{
  Swal.fire(
    '¡Creado!',
    'El album fue creado.',
    'success'
  )
}

function confirmationCreateAlbum()
{
  const form = document.querySelector('#create-album');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    Swal.fire({
      title: '¿Estás seguro que deseas crear el album?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#00b012',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Crear'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })
  });
}


//========= EDIT ALBUM ===========
function successEditAlbum()
{
  Swal.fire(
    '¡Actualizado!',
    'El album fue actualizado.',
    'success'
  )
}

function confirmationEditAlbum()
{
  const form = document.querySelector('#edit-album');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    Swal.fire({
      title: '¿Estás seguro que deseas actualizar el album?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#00b012',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Actualizar'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })
  });
}